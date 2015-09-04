<?php

use Illuminate\Database\Seeder;
use App\cart;

class cartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cart::create([
            
            'c_id' => 1,
            'b_id' => 1,
            
        ]);
        
        cart::create([
            
            'c_id' => 1,
            'b_id' => 3,
            
        ]);
        
        
        cart::create([
            
            'c_id' => 1,
            'b_id' => 5,
            
        ]);
        
        cart::create([
            
            'c_id' => 1,
            'b_id' => 7,
            
        ]);
        
        cart::create([
            
            'c_id' => 2,
            'b_id' => 2,
            
        ]);
        cart::create([
            
            'c_id' => 2,
            'b_id' => 4,
            
        ]);
        cart::create([
            
            'c_id' => 2,
            'b_id' => 6,
            
        ]);
        cart::create([
            
            'c_id' => 2,
            'b_id' => 8,
            
        ]);
    }
}
