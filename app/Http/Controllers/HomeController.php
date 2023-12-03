<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $result = DB::table('barangs')->orderBy('rating','desc')->limit(7)->get();
        $all = DB::table('barangs')->limit(7)->get();
        return view('home.user.index',[
            'active' => 'home',
            'product' => $result,
        ]);
    }

    public function about()
    {
        return view('home.user.about',['active' => 'about']);
    }
}
