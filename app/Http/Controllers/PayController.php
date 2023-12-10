<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\DetalTransaksi;
use App\Models\Audit;
use App\Models\OrderBarang;
use Illuminate\Support\Facades\DB;


class PayController extends Controller
{
    public function index()
    {
        // return 'o';
        $order = DB::table('orders')->join('order_barangs','order_barangs.id','=','orders.id')
                                    ->join('users','users.id','=','orders.user_id')
                                    ->join('barangs','barangs.id','=','order_barangs.barang_id')
                                    ->where('users.id',auth()->user()->id)
                                    ->select(['orders.id as order_id','*'])
                                    ->get();
        
        
        // var_dump($tes);die;
        $result = [];
        foreach($order as $orders){
            if(DetalTransaksi::where('order_id',$orders->order_id)->first() == NULL){
                
                $result[] = $orders;
            }
        }
        
        
        
        return view('home.user.order',[
            'orders' => $result,
            'active' => 'Pesanan',
            
        ]);
    }
    public function pay($id)
    {
        $order = DB::table('orders')->join('order_barangs','order_barangs.id','=','orders.id')
                                    ->join('users','users.id','=','orders.user_id')
                                    ->join('barangs','barangs.id','=','order_barangs.barang_id')
                                    ->where('users.id',auth()->user()->id)
                                    ->select(['orders.id as order_id','*'])
                                    ->get();

        $bank = DB::table('kartu_kredits')->where('user_id',auth()->user()->id)->get();
        $bank_count = DB::table('kartu_kredits')->where('user_id',auth()->user()->id)->count();
        
        // var_dump($bank_count);die;
        return view('home.user.payment',[
            'order' => $order,
            'active' => 'payment',
            'bank' => $bank,
            'jumlah' =>$bank_count
        ]);
    }

    public function deleteOrder(Request $request)
    {
        // var_dump($request->id);die;
        Order::destroy($request->id);
        OrderBarang::destroy($request->id);

        return redirect()->route('order')->with('success', 'Orders delete successfully');
    }

    public function editOrder($id)
    {
        $purchase = Order::findOrFail($id); // Mengambil data pembelian yang akan diedit
        $barang = Barang::all();

        return view('home.user.edit_order',[
            'active' => 'edit order',
            'purchase' => $purchase,
            'barang' => $barang,
            'id' => $id 
        ]);
    }

    public function updateOrder(Request $request){
        
        $request->validate([
            'barang' => 'required|exists:barangs,id',
            'quantity' => 'required|numeric|min:1',
        ]);
        $id_barang = DB::table('barangs')->where('id',$request->barang)->select(['id'])->get();
        // return $id_barang[0]['id'];
        // Jika validasi sukses, lanjutkan dengan proses pembaruan data
        DB::table('orders')->where('id',$request->id)->update([
            'user_id' => auth()->user()->id,
        ]);

        DB::table('order_barangs')->where('id',$request->id)->update([
            
            'barang_id' => $id_barang[0]->id,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('order')->with('success', 'Pembelian berhasil diperbarui.');
    } 


    public function processPayment(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'pengantar_paket' => 'required',
            'metode' => 'required', // pastikan name pada select sesuai dengan ini
        ]);

       
        // $address = 
        // $metode = Bank::find($request->card)->metode; // Dapatkan nama metode dari model Bank

        // Simpan data transaksi ke database
        DetalTransaksi::create([
            'order_id' => $request->order_id,
            'address' => $request->alamat,
            'metode' => $request->metode,
            'pengantar_paket' => $request->pengantar_paket,
        ]);

        $order_audit = DB::table('order_barangs')->join('barangs','barangs.id','=','order_barangs.barang_id')
                                            ->where('order_barangs.id',$request->order_id)
                                            ->get();

        Audit::create([
            'status' => 'beli barang',
            'nama_barang' => $order_audit[0]->name,
            'harga_barang' => $order_audit[0]->harga,
            'quantity' => $order_audit[0]->quantity,
            'user_id' => auth()->user()->id,
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('order')->with('success', 'Pembayaran berhasil.');
    }
}
