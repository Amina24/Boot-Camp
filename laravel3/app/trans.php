<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trans extends Model
{
    //
    protected $table= 'point_transact';
    
    protected $fillable= ['amount', 'u_id', 'c_id'];
}
