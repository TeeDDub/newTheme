<?php
function register_my_menu() {
  register_nav_menu('primary',__( 'Primary Menu' ));
}

add_action( 'init', 'register_my_menu' );

add_theme_support( 'custom-logo', array(
	'flex-height' => true,
  'height'      => 100,
  'flex-width'  => true,
  'width'       => 100,
	'header-text' => array( 'site-title', 'site-description' ),
) );

?>
