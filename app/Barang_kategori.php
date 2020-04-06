<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang_kategori extends Model
{
    protected $table = 'barang_kategori';
    protected $fillable = ['barang_id', 'kategori_id'];
}
