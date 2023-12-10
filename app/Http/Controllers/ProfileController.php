<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $user = Auth::user();
        $transactions = DB::table('detal_transaksis')->join('orders','orders.id','=','detal_transaksis.order_id')
                                                    ->join('order_barangs','orders.id','=','order_barangs.id')
                                                    ->join('barangs','barangs.id','=','order_barangs.barang_id')
                                                    ->join('users','users.id','=','orders.user_id')
                                                    ->join('kartu_kredits','kartu_kredits.user_id','=','users.id')
                                                    ->where('orders.user_id',auth()->user()->id)
                                                    ->get();

        return view('home.user.show',[
            'active' => 'profile',
            'user' => $user,
            'transactions' => $transactions
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $user = DB::table('users')->where('id',$id)->get();
        return view('home.user.profile',[
            'active' => 'edit profile',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('users')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
