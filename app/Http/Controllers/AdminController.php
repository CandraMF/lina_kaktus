<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use App\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{    

    public function index(){
        if(!Session::get('admin')){
            return redirect('/admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin/dashboard');
        }
    }

    public function login(){
        return view('admin/login');
    }

    public function login_proses(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = Admin::where('username', $username)->first();
        if($data){
            if($password == $data->password){
                Session::put('username', $data->username);                
                Session::put('admin', TRUE);                
                return redirect('/admin/dashboard');
            }
            else{
                return redirect('/admin/login')->with('alert','Password atau Email, Salah !');
            }
        }else{
            return redirect('/admin/login')->with('alert','Password atau Email, Salah !');
        }
    }

    public function barang(){

        if(!Session::get('admin')){
            return redirect('/admin/login')->with('alert','Kamu harus login dulu');
        }        
        $barang = Barang::get();        
        
        return view('admin/barang', ['barang' => $barang]);
    }

    public function kategori(){
        if(!Session::get('admin')){
            return redirect('/admin/login')->with('alert','Kamu harus login dulu');
        }

        $kategori = Kategori::get();

        return view('admin/kategori', ['kategori' => $kategori]);
    }
   
    public function logout(){
        Session::flush();        
        return redirect('/');
    }
    
    
}
