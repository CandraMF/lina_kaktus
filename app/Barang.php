<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";

    protected $fillable = ['nama', 'id', 'berat', 'gambar', 'deskripsi'];

    public function kategori(){
        return $this->belongsToMany('App\Kategori');
    }
        
}
