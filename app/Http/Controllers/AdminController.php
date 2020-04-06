<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use App\Admin;
use Session;

class AdminController extends Controller
{
    public function index(){
        if(Session::has('admon')){
            return view('admin/dashboard');
        }else{
            return view('admin/login');
        }
    }
    public function barang(){
        $barang = Barang::get();        
        
        return view('admin/barang', ['barang' => $barang]);
    }

    public function kategori(){
        $kategori = Kategori::get();

        return view('admin/kategori', ['kategori' => $kategori]);
    }

    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Admin::where('username', $request->username, 'AND', 'password', $request->password)){
            return redirect('/admin')->with('admon', TRUE);
        }else{
            return view('admin/login');
        }
    }

    public function logout(){
        Session::flush();        
        return redirect('/admin');
    }
    
    
}
