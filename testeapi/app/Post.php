<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
    protected $primaryKey = 'userid';
    public $timestamps = false;
}
