
<section id="footer">
<div class="footer_m clearfix">
 <div class="container">
   <div class="row footer_1">
    <div class="col-md-4">
	 <div class="footer_1i">
        <?php dynamic_sidebar('footer-1') ?>
	 </div>
	</div>
	<div class="col-md-4">
	 <div class="footer_1i">
        <?php dynamic_sidebar('footer-2') ?>
	 </div>
	</div>
	<div class="col-md-4">
	 <div class="footer_1i">
        <h4>Nous suivre</h4>
        <?php wp_nav_menu(array(
			'theme_location' => 'menu-social',
			'menu_class' => 'social-network social-circle mb-0'
		)) ?>
	 </div>
	</div>
   </div>
</div>
</div>
</section>

<section id="footer_b" class="pt-3 pb-3 bg_grey">
<div class="container">
   <div class="row footer_1">
     <div class="col-md-8">
	  <div class="footer_1l">
        <?php dynamic_sidebar('footer-copy') ?>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="footer_1r">
        <?php wp_nav_menu(array(
			'theme_location' => 'menu-bottom',
			'menu_class' => 'mb-0',
            'walker' => new WP_Bottom_Menu_Walker()
		)) ?>
	  </div>
	 </div>
   </div>
</div>
</section>

<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>
<?php wp_footer(); ?>
</body>

</html>