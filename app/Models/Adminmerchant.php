<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Adminmerchant extends Authenticatable
{
    use HasFactory;
    protected $table = "adminmerchants" ;
    protected $guarded=[];
    public $timsstamps = true ;
}
 