     


        <ul id="update_cart">
                  
                    <?php
                    echo '<pre>';
                    print_r($_SESSION);
                    echo '</pre>'; ?> 
                    @if(isset( $_SESSION['cart']))
                    
                    @foreach($_SESSION['cart'] as $store_cart)
                    
                    <li ><a href="{{ route('showBook',['id' => $store_cart['id']]) }}">
                            {{ $store_cart["name"]}}</a></li>
                    
                    @endforeach
                    @endif
                    
                    
                    </ul>