<?php


// require composer autoload
require_once 'vendor/autoload.php';


// set a custom field prefix
define( "CMB_PREFIX", "_p_" );


// require multiple
function require_multi( $files ) {
    $files = func_get_args();
    foreach ( $files as $file )
        require_once( 'library/' . $file . '.php' );
}


// include utility functions
require_multi( 'core', 'metabox', 'images', 'paginate', 'metabox', 'showcase', 'button', 'calculator' );

