<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Session;
use Cart;

class UserController extends Controller
{
    public function index(){
        $user = DB::table('pegawai')->get();
    }

    public function login(Request $request){
        
        $this->validate($request, [
            'nama' => 'required',            
        ]);
            
        $statement = DB::select("SHOW TABLE STATUS LIKE 'users'");
        $id = $statement[0]->Auto_increment;

        User::create([                    
            'name' => $request->nama,
        ]);

        Session::put('id', $id);
        Session::put('nama', $request->nama);
        Session::put('login', TRUE);

        $link = "/katalog/masuk_keranjang/$request->idbarang";
        return redirect($link);
    }

    public function logout(){
        $userId = Session::get('id');
        
        Cart::session($userId)->clear();
        Session::flush();        

        return redirect('/katalog');
    }
}
