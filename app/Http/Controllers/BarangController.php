<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function viewProduct(Request $request)
    {
        if($request->sort == null){
            $product = DB::table('barangs')->get();
        }else if($request->sort == 'mahal'){
            $product = DB::table('barangs')->orderBy('harga','desc')->get();
        }else{
            $product = DB::table('barangs')->orderBy('harga','asc')->get();
        }
    
        return view('home.user.product',[
            'active' => 'products',
            'products' => $product,
            'category' => 'all',
            'text' => 'Cosmetics made with passion for beauty and experience of the senses, Jenny House Cosmetics is a
            product that anyone can find their own hidden beauty based on that long agony and experience.
            We respect you by making that journey together.'
        ]);
    }

    public function optionProduct(string $id , ?Request $request)
    {
        if($request->sort == null){
            $product = DB::table('barangs')->where('category',$id)->get();
        }else if($request->sort == 'mahal'){
            $product = DB::table('barangs')->where('category',$id)->orderBy('harga','desc')->get();
        }else{
            $product = DB::table('barangs')->where('category',$id)->orderBy('harga','asc')->get();
        }

        if($id == 'hair-care'){
            $text = 'Formulated from 20 years experience of Jennyhouse salon in Korea with natural ingredients';
        }else if($id == 'hair-coloor'){
            $text = 'Premium Hair Color at Salon Korea made with CICA natural ingredients';
        }else{
            $text ='Vegan cosmetic products that are widely used by celebrities and public figures from South Korea';
        }
        
    
        return view('home.user.product',[
            'active' => 'products',
            'products' => $product,
            'category' => $id,
            'text' => $text
        ]);
    }
}
