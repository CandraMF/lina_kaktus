<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Barang;
use App\Kategori;
use App\Barang_kategori;

use File;

class BarangController extends Controller
{

    public function index(){
        $barang = Barang::get();    
        return view('barang', ['barang' => $barang]);
    }

    public function barang(){     
        $barang = Barang::get();
        return view('barang', ['barang' => $barang]);
    }
    
    public function tambah(){
        $kategori = Kategori::get();
        
        return view('admin/form_barang_tambah', ['kategori' => $kategori]);
    }

    public function tambah_proses(Request $request){
        $this->validate($request, [
            'nama' => 'required',            
            'berat' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png,bmp|max:5000',
            'deskripsi' => 'nullable',    
            'kategori' => 'nullable',
        ]);

        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';                          
        $file->move($tujuan_upload, $nama_file);                   

        //get next id barang
        $statement = DB::select("SHOW TABLE STATUS LIKE 'barang'");
        $id = $statement[0]->Auto_increment;

        if(isset($request->kategori)){
            foreach($request->kategori as $k){
                Barang_kategori::create([
                    'barang_id' => $id,
                    'kategori_id' => $k
                ]);
            }
        }
            
        Barang::create([
            'nama' => $request->nama,            
            'berat' => $request->berat,
            'gambar' => $nama_file,
            'deskripsi' => $request->deskripsi,                        
        ]);

        return redirect('admin/barang');
        
    }

    public function pesan(){
        $nama = "candra";
        $jenis = "kaktus a";
        $jumlah = "10";

        $link = "https://wa.me/6285721372243?text=Nama%20saya%20%3A%20MRxxxx%0AIngin%20pesan%20%3A%20";

        for($i=0; $i<5; $i++){
            $link .= "%0A$jenis%28$jumlah%29";
        }

        return view('link', ['wa' => $link]);
    }

    public function delete(){
        
    }

    public function edit($id){
        $barang = Barang::find($id);
        $barang_kategori = Barang_kategori::where('barang_id', $barang->id)->get()->toArray();
        $kategori = Kategori::get();

        return view('admin/form_barang_edit', [
            'barang'            => $barang, 
            'kategori'          => $kategori,
            'barangKategori'    => $barang_kategori,            
        ]);
    }

    public function edit_proses(Request $request){        
        $this->validate($request, [
            'id'        => 'required',
            'nama'      => 'required',            
            'berat'     => 'required',
            'file'      => 'required|mimes:jpg,jpeg,png,bmp|max:5000',
            'deskripsi' => 'nullable',                                     
        ]);

        $barang = Barang::find($request->id);
        $barangKategori = Barang_kategori::where('barang_id', $request->id);
        $barangKategori->delete();

        $barang->nama = $request->nama;        
        $barang->berat = $request->berat;
        //image
        $usersImage = public_path("data_file/$barang->gambar"); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';                          
        $file->move($tujuan_upload, $nama_file);

        $barang->gambar = $nama_file;
        $barang->deskripsi = $request->deskripsi;  

        if(isset($request->kategori)){
            foreach($request->kategori as $k){
                Barang_kategori::create([
                    'barang_id' => $request->id,
                    'kategori_id' => $k
                ]);
            }
        }
                
        $barang->save();

        return redirect('/admin/barang');
    }

    public function trash($id){

    }
    
}

