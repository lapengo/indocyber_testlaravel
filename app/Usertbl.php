<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usertbl extends Authenticatable
{
    use Notifiable;


    protected $table        = 'tbl_user';
    public $timestamps      = false;
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'email', 'password', 'nohp', 'alamat'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword()
    {
      return $this->password;
    }
}
