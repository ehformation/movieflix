<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo get_bloginfo('name'); ?></title>
	<link href="<?php echo get_bloginfo('stylesheet_directory')  ?>/css/bootstrap.min.css" rel="stylesheet" >
	<link href="<?php echo get_bloginfo('stylesheet_directory')  ?>/css/font-awesome.min.css" rel="stylesheet" >
	<link href="<?php echo get_bloginfo('stylesheet_directory')  ?>/css/global.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('stylesheet_directory')  ?>/css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
	<script src="<?php echo get_bloginfo('stylesheet_directory')  ?>/js/bootstrap.bundle.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>

<section id="top">
<div class="container">
 <div class="row top_1">
  <div class="col-md-3">
   <div class="top_1l pt-1">
		<?php 
			if( function_exists( 'the_custom_logo' ) ) {
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$custom_logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' );

				if( has_custom_logo() ) {
					echo '<a href="' . esc_url( home_url('/') ) . '" >';
					echo '<img src="' . $custom_logo_src[0] . '" style="max-width: 100px" />';
					echo '</a>';
				}else{
					echo '<h2>' . get_bloginfo('name') . '</h2>';
				}
			}
		?>
   </div>
  </div>
  <div class="col-md-5">
   <div class="top_1m">
		<?php get_search_form(); ?>
   </div>
  </div>
  <div class="col-md-4">
   <div class="top_1r text-end">
		<?php wp_nav_menu(array(
			'theme_location' => 'menu-social',
			'menu_class' => 'social-network social-circle mb-0'
		)) ?>
   </div>
  </div>
 </div>
</div>
</section>

<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container">
	<?php 
		if( function_exists( 'the_custom_logo' ) ) {
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' );

			if( has_custom_logo() ) {
				echo '<a class="navbar-brand text-white fw-bold" href="' . esc_url( home_url('/') ) . '" >';
				echo '<img src="' . $custom_logo_src[0] . '" style="max-width: 100px" />';
				echo '</a>';
			}else{
				echo '<h2>' . get_bloginfo('name') . '</h2>';
			}
		}
	?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	<?php wp_nav_menu(array(
		'theme_location' => 'menu-principal',
		'container' => 'div',
		'container_class' => 'collapse navbar-collapse',
		'container_id' => 'navbarSupportedContent',	
		'menu_class' => 'navbar-nav mb-0',	
		'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 
		'walker' => new WP_Bootstrap_Navwalker()
	)) ?>
  </div>
</nav>
</section>