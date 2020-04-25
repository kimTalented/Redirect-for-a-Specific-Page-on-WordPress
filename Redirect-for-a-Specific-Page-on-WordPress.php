<?php

//add to the functions.php file

function redirect_to_another_page() {
$page_id_to_redirect = 119; //enter page id here
$destination = 'https://kimberleygriffith.com'; //enter destination url here
if ( is_page($page_id_to_redirect) ) {
D0d_redirect( $destination, 301 );
exit;
}
}
add_action( 'template_redirect', 'redirect_to_another_page' );

?>