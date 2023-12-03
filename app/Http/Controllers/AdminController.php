<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Audit;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('home.admin.index',[
            'active' => 'admin',
            'users' => $users,
            
        ]);
    }

    public function index_product()
    {
        $barang = Barang::paginate(5);
        return view('home.admin.product.index',[
            'active' => 'admin',
            'products' => $barang
        ]);   
    }

    public function delete(Request $request)
    {
        User::destroy($request->id);
        return redirect()->route('admin.index')->with('success', 'User deleted successfully');
    }

    public function create_product()
    {
        return view('home.admin.product.create',[
            'active' => 'create product'
        ]);
    }

    public function store_product(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:png|max:2048', // Validasi untuk gambar
            'harga' => 'required|numeric',
            'category' => 'required|in:HAIR-CARE,COSMETICS,HAIR-COLOR',
            'rating' => 'nullable|numeric',
        ]);
    
        // Menyimpan gambar ke direktori public/img/barang
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/barang'), $imageName);
            $imagePath = 'img/barang/' . $imageName;
        }
    
        // Menyimpan produk
        Barang::create([
            'name' => $request->input('name'),
            'image' => $imagePath,
            'harga' => $request->input('harga'),
            'category' => $request->input('category'),
            'rating' => $request->input('rating'),
        ]);

        Audit::create([
            'status' => 'tambah barang',
            'nama_barang' => $request->input('name'),
            'harga_barang' => $request->input('harga'),
            'quantity' => 1,
            'user_id' => auth()->user()->id,
        ]);


    
        return redirect()->route('admin.product')->with('success', 'Product added successfully');
    }

    public function edit_product($id)
    {
        $product = DB::table('barangs')->where('id',$id)->get();
        return view('home.admin.product.edit',[
            'active' => 'edit product',
            'product' => $product
        ]);
    }

    public function delete_product(Request $request)
    {
        Barang::destroy($request->id);
        Audit::create([
            'status' => 'hapus barang',
            'nama_barang' => $request->input('name'),
            'harga_barang' => $request->input('harga'),
            'quantity' => 1,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin.product')->with('success', 'User deleted successfully');
    }

    public function update_product(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:png|max:2048',
            'harga' => 'required|numeric',
            'category' => 'required|in:HAIR-CARE,COSMETICS,HAIR-COLOR',
            'rating' => 'nullable|numeric',
        ]);

        $product = Barang::find($id);

        if (!$product) {
            return redirect()->route('admin.product')->with('error', 'Product not found');
        }

        // Jika ada file gambar yang diunggah, atau jika belum ada gambar untuk produk, simpan gambar baru
        if ($request->hasFile('image') || !$product->image) {
            // Menghapus gambar lama jika ada gambar baru diunggah
            if ($product->image) {
                Storage::delete($product->image);
            }

            // Menyimpan gambar baru
            $imagePath = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('img/barang'), $imageName);
                $imagePath = 'img/barang/' . $imageName;
            }
        } else {
            // Jika tidak ada file gambar yang diunggah dan sudah ada gambar untuk produk, gunakan gambar yang sudah ada
            $imagePath = $product->image;
        }

        // Memperbarui produk
        $product->update([
            'name' => $request->input('name'),
            'image' => $imagePath,
            'harga' => $request->input('harga'),
            'category' => $request->input('category'),
            'rating' => $request->input('rating'),
        ]);

        Audit::create([
            'status' => 'update barang',
            'nama_barang' => $request->input('name'),
            'harga_barang' => $request->input('harga'),
            'quantity' => 1,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin.product')->with('success', 'Product updated successfully');
    }

    public function log()
    {
        $log = Audit::all();
        return view('home.admin.log',[
            'active' => 'log',
            'auditLogs' => $log
        ]);
    }

}
