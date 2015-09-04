

@extends('master')

@section('content')

<div id="templatemo_content_right">

    @for($i=0; $i< count($books) ; $i++)
       
        


        	<div class="templatemo_product_box">
            	<h1>{{ $books[$i]['name'] }} <span>(by {{$books[$i]['author']}})</span></h1>
   	      <img src="/images/templatemo_image_01.jpg" alt="image" />
                <div class="product_info">
                	<p>Desciption :  {{$books[$i]['description']}}   </p>
                  <h3>$55</h3>
                    <div class="buy_now_button"><a href="{{action('BookController@add_to_cart' , ['id'=> $books[$i]['b_id']])}}">Add to Cart</a></div>
                    <div class="detail_button"><a href="{{ route('showBook',['id' => $books[$i]['b_id']]) }}">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
        
        <?php $i++;  ?>
            @if ( $i< count($books))
        
            <div class="templatemo_product_box">
            	<h1>{{$books[$i]['name'] }}  <span>(by {{$books[$i]['author']}})</span></h1>
       	    <img src="/images/templatemo_image_02.jpg" alt="image" />
                <div class="product_info">
                	<p>{{$books[$i]['description']}} Aliquam a dui, ac magna quis est eleifend dictum.</p>
                    <h3>$35</h3>
                    <div class="buy_now_button"><a href="{{action('BookController@add_to_cart' , ['id'=> $books[$i]['b_id']])}}">Add to Cart</a></div>
                    <div class="detail_button"><a href="/book/{{$books[$i]['b_id']}}">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            @endif

            
@endfor
  @endsection