<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertbl extends Model
{
    protected $table        = 'tbl_user';
    public $timestamps      = false;
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'email', 'password', 'nohp', 'alamat'
    ];
}
