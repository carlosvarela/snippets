<?
/*
Add to your functions.php in your wordpress theme

EN: Redirect user to thank you or any specific page after purchased a specific product by  ID
ES: Redireccionar usuario a una pagina especifica o de agradecimiento despues de comprar un producto especifico por ID
PT: Redireccionar usuario a uma tela especifica o de agradecimento apos comprar um produto especifico por ID
*/

function woo_redirect_product_based ( $order_id ){
	$order = wc_get_order( $order_id );
 
	foreach( $order->get_items() as $item ) {
		$_product = wc_get_product( $item['product_id'] );
		// Add product id you want here
		if ( $item['product_id'] == 70 ) {
			// change to the URL that you want to send your customer to  
                	wp_redirect('http://www.yoursite.com/thank-you-page');
		}
	}
}
add_action( 'woocommerce_thankyou', 'woo_redirect_product_based' );	

?>