

@extends('master')

@section('content')


    <div id="templatemo_content_right">
        	
    <h1> Login </h1>
            
    <form  action=" {{ url('check') }}" method="post" > 
            
           <table style="width:100%"> 
            <tr> 
                <td><label for="email"> Email  : </label></td> 
                <td><input type="text" name="email" id="email" /></td> 
             

            </tr>
            <tr> 
                <td> <label for="password"> Password  : </label> </td>
                <td> <input type="text" name="password" id="password" /> </td>
                
            </tr>
           </table>
        
         <button type="submit" class="buy_now_button"> Login In</button>
         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
            
              
        <div class="cleaner_with_height" >&nbsp;</div>     
                
       
                
                
  @endsection