/**
* Set the URL to redirect to on login.
*
* @param string $url The visited URL.
* @return string The URL to redirect to on login. Must be absolute.
*/
function my_forcelogin_redirect( $url ) {
return home_url( '/' );
}
add_filter( 'v_forcelogin_redirect', 'my_forcelogin_redirect' );
