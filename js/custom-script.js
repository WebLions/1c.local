var cart_counter = 0;
$(document).ready(function(){

    $('#goods').on('click','.add-to-cart', function(){

        cart_counter += 1;
        $('#cart-counter').remove();
        $('<span id="cart-counter" style="font-size: 14pt"> Товаров в корзине: '+cart_counter+'</span>').appendTo( ".cart" );

    })

});