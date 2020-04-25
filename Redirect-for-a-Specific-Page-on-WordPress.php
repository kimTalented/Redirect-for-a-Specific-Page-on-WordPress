<?php

//add to the functions.php file
//this snippet creates sidebar-1

function redirect_to_another_page() {
	
	$page_id_to_redirect = 119; //enter page id here
	$destination = 'https://kimberleygriffith.com'; //enter destination url here
	
	if ( is_page($page_id_to_redirect) ) {
		wp_redirect( $destination, 301 );
		exit;
	}
	
}
add_action( 'template_redirect', 'redirect_to_another_page' );

?>