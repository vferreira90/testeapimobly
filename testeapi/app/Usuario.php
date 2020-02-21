<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id','name','username','email','street','suite','city','zipcode','geolat',
        'geolng','phone','website','compname','catchphrase','bs'
    ];
}
