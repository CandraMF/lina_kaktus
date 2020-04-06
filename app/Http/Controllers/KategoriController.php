<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function tambah_proses(Request $request){
        $this->validate($request, [
            'nama' => 'required',            
        ]);
        
        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('admin/kategori');                
    }

    public function edit($id){
        $kategori = Kategori::find($id);

        return view('admin/form_kategori_edit', ['kategori' => $kategori]);
    }

    public function edit_proses(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required'
        ]);

        $kategori = Kategori::find($request->id);
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect('admin/kategori');
    }

    public function hapus($id){
        $kategori = Kategori::find($id);        
    }
}
