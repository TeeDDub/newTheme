<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Press_Impress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  	<header id="masthead" class="site-header" role="banner">
		<nav id="site-name">
			<?
			if( has_custom_logo() ) {
				the_custom_logo();
			} else {?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?} 
			?>
		</nav>
		<div id="navigation-bar">
		<div id="menu-drop" onclick=""> &#9776; </div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
				// Primary navigation menu.
				wp_nav_menu( array(
					'menu_class'     => 'nav-menu',
					'theme_location' => 'primary',
				) );
			?>
		<div id="menu-drop" onclick=""> &#9776; </div>	
		</nav><!-- .site-header -->
	</div>

  	</header>
	<script>

	$(document).on('click', '#menu-drop',  function(event) {
    event.preventDefault();
    $('#site-navigation').toggleClass("dropdown-show");
	});

	</script>
  <div id="content" class="site-content">
