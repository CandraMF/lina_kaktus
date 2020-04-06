<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Barang;
use App\Barang_kategori;
use App\kategori;
use App\User;
use Cart;


class KatalogController extends Controller
{

    public function index(Request $request){    
        $barang = Barang::get();    
        $kategori = Kategori::get();                                 
        
        return view('katalog', ['barang' => $barang, 'kategori' => $kategori]);
    }

    public function masuk_keranjang($id){

        if(!Session::get('login')){
            return redirect('/katalog')->with('alert','Anda Belum Memasukkan Nama');
        }else{

            $barang = Barang::where('id', $id)->first();
            $userId = Session::get('id'); 
                                                           
            Cart::session($userId)->add(array(      
                'id' => $barang->id,
                'name' => $barang->nama,
                'price' => 0,
                'quantity' => 1,
                'berat' => $barang->berat,                
            ));

            return redirect('/katalog');
        }        
    }
}
