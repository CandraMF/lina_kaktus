<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Transaksi;
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
            
            return view('keranjang', ['barang' => $barang, 'qty' => $barangKatalog->toArray()]);
        }
    }
   

    public function update($id, $jumlah){
        Cart::session(Session::get('id'))->update($id, [
            'quantity' => 1,
        ]);                                   
                
        return redirect('/keranjang');
    }

    public function min($id, $jumlah){
        Cart::session(Session::get('id'))->update($id, [
            'quantity' => -1,
        ]);                                   
                
        return redirect('/keranjang');
    }

    public function delete($id){
        Cart::session(Session::get('id'))->remove($id);

        return redirect('/keranjang');

    }

    public function pesan(){
        $barangKatalog = Cart::session(Session::get('id'))->getContent();
        if($barangKatalog->count() > 0){            
            $nama = Session::get('nama');
            $link = "https://wa.me/6285721372243?text=Nama%:%20%3A%20".$nama."%0AIngin%20pesan%20%3A%20";

            foreach($barangKatalog as $bk){
                Transaksi::create(array(
                    'id_pelangan' => Session::get('id'),
                    'id_barang' =>  $bk->id,
                    'jumlah_beli' => $bk->quantity,
                ));
                $link .= "%0A$bk->nama%28$bk->quantity%29";
            }                 
            
            Cart::session(Session::get('id'))->clear();
            Session::flush();
            return redirect('/')->with('alert', 'terimakasih, pesanan anda telah diproses!');            
        }else{
            return redirect('/katalog');
        }     
        
        
    }
}
