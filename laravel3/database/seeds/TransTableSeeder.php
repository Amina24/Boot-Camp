<?php

use Illuminate\Database\Seeder;
use App\trans;
class TransTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         Trans::create([
            'amount' => 376.87 ,
             'u_id' => 1 ,
             'c_id' => 1
        ]);
        
          Trans::create([
            'amount' => 345476.87 ,
             'u_id' => 2 ,
             'c_id' => 2
        ]);
        
    }
}
