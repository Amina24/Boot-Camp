@extends('master')

@section('content')


        <div  id="templatemo_content_right">
            <div class="parent_btn">
            <h1 class='book_name'> {{ $book->name}} </h1>
            <div class="image_panel"><img src="images/templatemo_image_02.jpg" alt="CSS Template" width="100" height="150" /></div>
          <h2>Read the lessons - Watch the videos - Do the exercises</h2>
            <ul>
                <li class="book_id">Unique ID :  {{$book->b_id}}</li>
	        <li>By {{$book->author}}</li>
            	<li>January 2024</li>
                <li>Pages: {{$book->pages}}</li>
                <li>Price: {{$book->price}}</li>
                <li>ISBN 10: 0-496-91612-0 | ISBN 13: 9780492518154</li>
            </ul>
            
            <p>{{$book->description}}Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec dui. Donec nec neque ut quam sodales feugiat. Nam sodales, pede vel dapibus lobortis, ipsum diam molestie risus, a vulputate risus nisl pulvinar lacus.</p>

			<p>Donec at arcu. Nunc aliquam, dolor vitae sollicitudin lacinia, nibh orci sagittis diam, dignissim sodales dui erat nec eros. Fusce quis enim. Aenean eleifend, neque hendrerit elementum sodales, odio erat sagittis quam, sed tempor orci magna vitae tellus. Proin dui mauris, tempor eget, pulvinar sed, pretium sit amet, dui. Proin vulputate justo et quam.</p>

			<p>In fermentum, eros ac tincidunt aliquam, elit velit semper nunc, a tincidunt orci lectus a arcu. Nullam commodo, arcu non facilisis imperdiet, felis lectus tempus felis, vitae volutpat augue ante quis leo. Aliquam tristique dolor ac odio. Sed consectetur, lacus et dictum tristique, odio neque elementum ante, nec eleifend leo dolor vel tortor.</p>
                        
                        
                    
                          <div class="cleaner_with_height">&nbsp;</div>

         <div class="show_cart_btn buy_now_button"><a >Add to Cart</a></div>
                    
            </div>            
                        
 @endsection