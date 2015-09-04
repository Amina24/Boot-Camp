@extends('master')

@section('content')


    <div id="templatemo_content_right">
        
     
            
    @if(count($books) > 0)     
            
            
            
        <h1>Product List</h1> 
        <table style="width:100%"> 
            <tr> 
                <th>Name</th> 
                <th>Category</th> 
                <th>Price</th> 

            </tr> 
            
            @for($i=0, $price=0; $i<count($books) ; $i++)
               <?php $price  += $books[$i]['price']; ?> 
            <tr> 
                <td>{{$books[$i]['name']}}</td> 
                <td>{{$books[$i]['type']}}</td> 
                <td>{{$books[$i]['price']}} $</td> 
                <!-- <td><a href="#">Add to cart</a></td> -->
            </tr> 
            
            @endfor
             
        </table>
        
        <div class="cleaner_with_height">&nbsp;</div><div class="cleaner_with_height">&nbsp;</div>
        
        <h2>Total Price : {{$price}}</h2>
        
        <div class="buy_now_button"><a href="{{ url('buy_books')}}">Buy Books</a></div>
        
        <div class="cleaner_with_height">&nbsp;</div>
            
    @else
        <div class="cleaner_with_height">&nbsp;</div>
        
        <h2> There is no book in the cart....</h2>
        
        
    @endif 
            
            
                    
                      

        
                    
                        
                        
 @endsection