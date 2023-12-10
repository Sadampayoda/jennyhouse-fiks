<?php

namespace App\Http\Controllers;

use App\Models\KartuKredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KreditController extends Controller
{
    public function index()
    {
        $bank = DB::table('kartu_kredits')->where('user_id',auth()->user()->id)->get();
        return view('home.user.bank.index',[
            'active' => 'kartu kredit',
            'bank' => $bank
        ]);

    }

    public function create()
    {
        return view('home.user.bank.create',[
            'active' => 'Buat kartu'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'metode' => 'required',
            'nomor' => 'required',
        ]);

        KartuKredit::create([
            'metode' => $request->metode,
            'nomor' => $request->nomor,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('kartu.kredit')->with('success', 'Kartu kredit berhasil ditambah.');
    }

    public function edit($id)
    {
        return view('home.user.bank.edit',[
            'active' => 'edit bank',
            'bank' => KartuKredit::findOrFail($id)
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'metode' => 'required',
            'nomor' => 'required',
        ]);

        $kartuKredit = KartuKredit::findOrFail($request->id);
        $kartuKredit->update([
            'metode' => $request->metode,
            'nomor' => $request->nomor,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('kartu.kredit')->with('success', 'Kartu kredit berhasil diperbarui.');
    }

    public function destroy($id)
    {
        KartuKredit::destroy($id);

        return redirect()->route('kartu.kredit')->with('success', 'Kartu kredit berhasil dihapus.');
    }
}
