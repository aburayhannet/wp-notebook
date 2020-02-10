<?php 

/*
@package wp notebook

*/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg nav_bg">
<div class="container" >
  <div class="brand-logo" ><a class="" href="<?php echo esc_url(home_url( '/' )); ?>"><?php bloginfo('name'); ?></a></div>
  <button class="nav_icon navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-align-justify"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'menu menu_nav clear navbar-nav mr-auto', 'menu_id' => 'navigation', 'container' => false,  'show_home' => '1','fallback_cb'=> 'wp_notebook_fallbackmenu')); ?>
  </div>
  

  </div>
</nav>


 
	<div  class=" main_content clear">
		<div class="container" >

		