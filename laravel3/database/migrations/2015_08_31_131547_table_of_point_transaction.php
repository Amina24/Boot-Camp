<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableOfPointTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_transact', function (Blueprint $table) {
            $table->increments('t_id');
            $table->float('amount');
            $table->integer('u_id');
            $table->foreign('u_id')->references('u_id')->on('users');
             
            $table->integer('c_id');
            $table->foreign('c_id')->references('c_id')->on('cart');
            
            $table->timestamps();
                
            
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('point_transact');
       
        
    }
}
