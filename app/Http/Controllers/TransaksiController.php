<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\Audit;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.user.transaksi',[
            'active' => 'transaksi',
            'barang' => DB::table('barangs')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $transaksiInput= $request->validate([
            'product' => 'required',
            'quantity' => 'required|numeric|min:1',
            'address' => 'required|min:5',
        ]);
        Transaksi::create([
            'user_id' => auth()->user()->id,
            'product' => $request->input('product'),
            'quantity' => $request->input('quantity'),
            'address' => $request->input('address'),
        ]);
        Audit::create([
            'status' => 'beli barang',
            'nama_barang' => $request->input('name'),
            'harga_barang' => $request->input('harga'),
            'quantity' => $request->input('quantity'),
            'user_id' => auth()->user()->id,
        ]);

        // Berikan respons atau lakukan tindakan lain...
        return redirect()->route('home')->with('success', 'Transaksi berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
