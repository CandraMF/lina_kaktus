<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $barang = Barang::with(['kategori' => function ($query) {
            $query->where('nama', 'like', '%terlaris%');
        }])->skip(0)->take(4)->get();
        
        return view('welcome',['barang' => $barang]);
    }
}
