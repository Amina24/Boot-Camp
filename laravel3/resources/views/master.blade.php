


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store </title>
<meta name="keywords" content="Book Store " />
<meta name="description" content="Book Store " />
<link href="/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/script/book_script.js"></script>


</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
     
            
    	<ul>
            <li><a href="{{url('/')}}" class="current">Home</a></li>
            <li><a href="{{url('cart')}}">Cart</a></li>
            
              
        @if(isset( $_SESSION['user_name']))
             <li><a href="{{url('show_trans')}}">Transactions</a></li>
            <li><a href="{{url('logout')}}">Logout</a></li>
        @else
            <li><a href="{{url('login')}}">Login</a></li>
            <li><a href="{{url('signup')}}">Signup</a></li> 
            
        @endif
            
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over $80
        	</p>
			<a href="subpage.html" style="margin-left: 50px;">Read more...</a>
        </div>
        
        
        <div id="templatemo_new_books">
        	<ul>
                <li>Suspen disse</li>
                <li>Maece nas metus</li>
                <li>In sed risus ac feli</li>
            </ul>
            <a href="subpage.html" style="margin-left: 50px;">Read more...</a>
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
                   
        @if(isset( $_SESSION['user_name']))
            <h2> {{$_SESSION['user_name']}} </h2>
        @endif
            
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                  <li><a href="{{url('category', 'islamic')}}">Islamic</a></li> 
                    <li><a href="{{url('category', 'computer')}}">Computer</a></li>
                    <li><a href="{{url('category', 'biology')}}">Biology</a></li>
                    <li><a href="{{url('category', 'physics')}}">Physics</a></li>
                    <li><a href="{{url('category', 'udru')}}">Urdu</a></li>
                    <li><a href="{{url('category', 'english')}}">English</a></li>
                    
            	</ul>
            </div>
        
         	<div class="templatemo_content_left_section">
            	<h1>Cart Items</h1>
                
                     <ul id="update_cart">
                  
                    @if(isset( $_SESSION['cart']))
                    
                    @foreach($_SESSION['cart'] as $store_cart)
                    
                    <li ><a href="{{ route('showBook',['id' => $store_cart['id']]) }}">
                            {{ $store_cart["name"]}}</a></li>
                    
                    @endforeach
                    @endif
                    
                    
                    </ul>
              
            </div>
            
          <!--  <div class="templatemo_content_left_section">                
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
			</div>
       
        -->
        
        </div> <!-- end of content left -->
        
    
 
    
    
@yield('content') 
    
    
    
    
     <div class="cleaner_with_height">&nbsp;</div>      
           <!-- <a href=""><img src="/images/templatemo_ads.jpg" alt="ads" /></a> -->
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
  
    
    
      <div id="templatemo_footer">
	       <a href="">Home</a> | <a href="subpage.html">Search</a> | <a href="subpage.html">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2048 <a href="#"><strong>Your Company Name</strong></a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent" title="free css templates">Free CSS Templates</a>	
      </div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->




</div> <!-- end of container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
