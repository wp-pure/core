<?php


// require composer autoload
require_once 'vendor/autoload.php';


// set a custom field prefix
define( "CMB_PREFIX", "_p_" );


// require multiple
function require_multi( $files ) {
    $files = func_get_args();
    foreach( $files as $file )
        require_once( 'library/' . $file . '.php' );
}


// include utility functions
require_multi( 'menus', 'scripts', 'metabox', 'images', 'paginate' );


// include metabox features
require_multi( 'metabox' );


// include feature functions
require_multi( 'showcase', 'calculator', 'boxes', 'button' );


// add editor stylesheet
add_editor_style( 'editor-style.css' );

