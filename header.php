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
    <div class="input-group">
				<input type="text" class="form-control bg-black" placeholder="Search Site...">
				<span class="input-group-btn">
					<button class="btn btn text-white bg_red rounded-0 border-0" type="button">
						 Search</button>
				</span>
		</div>
   </div>
  </div>
  <div class="col-md-4">
   <div class="top_1r text-end">
		<?php wp_nav_menu(array(
			'theme_location' => 'menu-social',
			'menu_class' => 'social-network social-circle mb-0'
		)) ?>
     <!-- <ul class="social-network social-circle mb-0">
			<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
			<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
		</ul> -->
   </div>
  </div>
 </div>
</div>
</section>