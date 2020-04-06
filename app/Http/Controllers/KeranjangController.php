<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Session;
use Cart;

class KeranjangController extends Controller
{
    public function index(Request $request){
        if(!Session::has('login')){
            return redirect('/katalog')->with('message', 'keranjang masih kosong');
        }else{            
            $barangKatalog = Cart::session(Session::get('id'))->getContent();        
            
            $idbarang = array();

            foreach($barangKatalog as $bk){
                array_push($idbarang, $bk->id);
            }
                                
            $barang = Barang::find($idbarang);            
            
            return view('keranjang', ['barang' => $barang]);
        }
    }

    public function masuk_keranjang($id){
        
    }
}
