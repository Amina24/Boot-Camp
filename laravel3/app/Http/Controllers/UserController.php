<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User; 
use App\trans;
use App\cart;
use App\Book;

class UserController extends Controller
{
    

   public function  index()
    {
     
       $books= Book::all()->toArray();
       return view('Home', compact('books',$books));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
         $userEmail    = $request->input('email');
        $userPassword = $request->input('password');
         $card   = $request->input('card_no');
        $userName = $request->input('u_name');
        
        
        
       $u= User::create([
            'u_name' => $userName,
            'email' => $userEmail,
            'password' => $userPassword,
            'card_no' => $card , 
        ]);
      
        session_start();
     
       $_SESSION['user_id']= $u->u_id;
       $_SESSION['user_name']= $u->u_name;
       return $u->u_id;
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function check(Request $request)
    {        
        $userEmail    = $request->input('email');
        $userPassword = $request->input('password');

        $u= User::where('email', $userEmail )
                ->where('password', $userPassword)
                ->first();
       
      
        if(isset($u))
        {
              session_start();
              
              
            $_SESSION['user_id']= $u->u_id;
            $_SESSION['user_name']= $u->u_name;
            $msg="You are succesfull Login...";
            return $this->index();
        }
        else {
            return $msg="You Enter Wrong email or password...";
        }
        
    }
    
    public function show_trans()
    {
         session_start();
        $uid= $_SESSION['user_id'];
       if (isset( $uid ))
       {
           $tr= trans::where('u_id', $uid)->get()->toArray();
           return view('trans', compact('tr'));
       }
       else
       {
           return $msg= "U r nt Login , Please Login First...";
       }
    }
    
    public function  logout()
    {
         session_start();
        session_destroy();
        return $this->index();
    }
  

}
