@extends('master')

@section('content')


    <div id="templatemo_content_right">
        
     
            
    @if(count($tr) > 0)     
            
            
            
        <h1>Trasaction List</h1> 
       
        <table style="width:100%"> 
            <tr> 
                <th>Transactions</th> 
                <th>Total Amount</th> 
                <th>Detail</th> 

            </tr> 
            
            @for($i=0 ; $i<count($tr) ; $i++)
              
            <tr> 
                <td>Transaction {{ $i+1}}</td> 
                <td>{{$tr[$i]['amount']}}</td> 
               
                 <td><a href="#">Detail</a></td> 
            </tr> 
            
            @endfor
             
        </table>
        
       
        
        
        <div class="cleaner_with_height">&nbsp;</div>
            
    @else
        <div class="cleaner_with_height">&nbsp;</div>
        
        <h2> There is no Transaction....</h2>
        
        
    @endif 
            
            
                    
                      

        
                    
                        
                        
 @endsection