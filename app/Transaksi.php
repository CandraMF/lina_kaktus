<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['id_pelangan', 'id_barang', 'jumlah_beli'];    

    public function pelanggan(){
        return $this->belongsToMany('App\User');
    }

    public function barang(){
        return $this->belongsToMany('App\Barang');
    }
}
