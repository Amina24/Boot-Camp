<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    //
    
    protected $table= 'cart';
    
    protected $fillable= ['c_id', 'b_id'];
}
