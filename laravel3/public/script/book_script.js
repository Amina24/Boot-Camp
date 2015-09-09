/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).ready(function(){
   
    $('.show_cart_btn').click(function(){
        
        var id=1;
       
      var book_name = $(this).closest('.parent_btn').find('.book_name').text();
      var book_id = $(this).closest('.templatemo_product_box').find('.book_id').text();
      //alert(book_name+"  "+book_id);  
      
        var url= '/add_to_cart/'+book_id;
      ajaxCall(url);
      $('#update_cart').append('<li><a href="/book/'+book_id+'">'+ book_name+ '</a></li>');
       
    });
 
});
function ajaxCall(url) {
  //alert(""+url);
    $.ajax({
        type: "GET",
        url: url,
        data: {},
        cache: false,
        success: function(response) {
            alert("Add Book to Cart..");
        },
        error: function(response){
            alert("Book not added to cart");
        }
    });
}