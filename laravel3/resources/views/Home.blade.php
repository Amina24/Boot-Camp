@extends('master')

@section('content')

<div id="templatemo_content_right">

    @for($i=0; $i< count($books) ; $i++)
       
        


       <div class="parent_btn templatemo_product_box">
            	<h1 class='book_name'>{{ $books[$i]['name'] }} </h1>
                <img src="/images/templatemo_image_01.jpg" alt="image" />
                <div class='book_id' > {{ $books[$i]['b_id'] }}</div>
                <div class="product_info">
                    <p>Desciption :  {{$books[$i]['description']}}   </p >
                
                    <h3>Rs. {{$books[$i]['price']}}</h3>
                    <div  class="show_cart_btn buy_now_button"><a >Add to Cart</a></div>
                    <div class="detail_button"><a href="{{ route('showBook',['id' => $books[$i]['b_id']]) }}">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
        </div>
            
    
    @if($i%2 === 0)
        <div class="cleaner_with_width">&nbsp;</div>
        
    @else
     <div class="cleaner_with_height">&nbsp;</div>
     
    @endif
            
      
@endfor
  @endsection
