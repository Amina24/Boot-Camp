<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\cart;
use App\trans;
class BookController extends Controller
{
    //
    
    public function  index()
    {
     
       $books= Book::all()->toArray();
       return view('Home', compact('books',$books));
    }
     public function create()
    {
         $b= Book::create(['name'=>'Quran', 
             'description' =>'for Muslims to read' ,
             'published_at'=> '',// Carbon\Carbon::now() , 
             'type'=>'Islamic' ,
             'author'=>'Muhammad' ,
             'pages'=>'398' ,
             'price'=>'100.89'   ]);
    }
    
    public function detail_book($id)
    {
        $book= Book::where('b_id', $id)->first();
        //return $book;
        return view('book', compact('book'));
    }

    public function categoryBook($cat)
    {
      //{{ action('BookController@categoryBook' ,['cat'=> 'islamic']) }}
        $books= Book::where('type', $cat)->get()->toArray();
     
        //return $books;
        return view('Home', compact('books'));
    }
    
    public function add_to_cart($id)
    {
      
       session_start();
       if(isset ($_SESSION['cart']))
       {
           $_SESSION['cart'][]= $id;
       }
       else
       {
           $_SESSION['cart'] = array();
           $_SESSION['cart'][]= $id;
       }

       
        return $this->index();
    }
    
    public function  show_cart()
    {
        session_start();
        $books= array();
        
       if(isset ($_SESSION['cart']))
       {
            foreach($_SESSION['cart'] as $item)
            {
                $books[]= Book::where('b_id', $item)->first();
            }
       }
     //  return count($books);
       return view('cart', compact('books'));
       
    }
    public function buy_books()
    {
        session_start();
        
       if(!isset ($_SESSION['user_id']))
       {
           return $msg="U r not Login... Please Login to continue ....";
           $this->index();
       }
       
        
        
        $price= 0;
        $cid= cart::max('c_id')+1;
        foreach($_SESSION['cart'] as $item)
        {
            cart::create([
                'b_id' => $item,
                'c_id' => $cid
            ]);
            $b= Book::where('b_id', $item)->first();
            $price= $price + $b->price;
        } 
        
        trans::create([
            'u_id' => $_SESSION['user_id'],
            'c_id' => $cid , 
            'amount' => $price
        ]);
        $_SESSION['cart']= array();
        //session_destroy();
        
        $msg ="Book are added to transaction";
        
        return $this->index();
    }
    
}

