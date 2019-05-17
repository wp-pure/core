<?php


function button_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'url' => '',
		'class' => '',
		'target' => '_top',
		'download' => false
	), $atts );

	if ( !empty( $a['url'] ) && !empty( $content ) ) {
		return '<a href="' . $a['url'] . '" class="btn ' . $a['class'] . '" target="' . $a['target'] . '"' . ( !empty( $a['download'] ) ? ' download="' . $a['download'] . '"' : '' ) . '>' . $content . '</a>';
	}
}
add_shortcode( 'button', 'button_shortcode' );

