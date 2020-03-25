<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table        = 'tbl_produk';
    public $timestamps      = false;
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'nama_produk', 'image', 'harga', 'stok'
    ];
}
