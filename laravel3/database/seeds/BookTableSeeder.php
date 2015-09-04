<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'test book1',
            'type' => 'islamic',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 1000.0,
            'pages' => 343,
            'author' => 'Amina Nisar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          
        ]);
        Book::create([
            
             'name' => 'zoo2',
            'type' => 'general',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 10444.0,
            'pages' => 3463,
            'author' => 'Amina Nisar',
           
        ]);
        
        Book::create([
            
             'name' => 'history3',
            'type' => 'general',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 10444.0,
            'pages' => 3463,
            'author' => 'Amina Nisar',
            
        ]);
        
        Book::create([
            
             'name' => 'hello world4',
            'type' => 'general',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 10444.0,
            'pages' => 3463,
            'author' => 'Amina Nisar',
           
        ]);
        
        Book::create([
            
             'name' => 'Databases5',
            'type' => 'general',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 10444.0,
            'pages' => 3463,
            'author' => 'Amina Nisar',
            
        ]);
        
        Book::create([
            
             'name' => 'seeders6',
            'type' => 'general',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 10444.0,
            'pages' => 3463,
            'author' => 'Amina Nisar',
           
        ]);
        
         Book::create([
            
             'name' => 'helper7',
            'type' => 'general',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 10444.0,
            'pages' => 3463,
            'author' => 'Amina Nisar',
            
        ]);
          Book::create([
            
             'name' => 'future8',
            'type' => 'general',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 10444.0,
            'pages' => 3463,
            'author' => 'Amina Nisar',
            
        ]);
           Book::create([
            
             'name' => 'programming9',
            'type' => 'general',
            'description' => 'good book',
            'published_at' => Carbon\Carbon::now(),
            'price' => 10444.0,
            'pages' => 3463,
            'author' => 'Amina Nisar',
            
        ]);
    }
}
