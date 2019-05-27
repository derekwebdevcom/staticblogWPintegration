<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
		 <div class="container">
			 <div class="row mb-5 justify-content-center">
				 <div class="col-md-5 text-center">
					 <div class="ftco-footer-widget mb-5">
						 <ul class="ftco-footer-social list-unstyled">
							 <li><a href="https://github.com/derekwebdevcom" target="_blank"><span><i class="fab fa-github pt-1"></i><span></a></li>
								 <li><a href="https://codepen.io/derek-andrews/" target="_blank"><span><i class="fab fa-codepen pt-1"></i><span></a></li>
								 <li><a href="https://linkedin.com/in/derek-andrews-5280" target="_blank"><span><i class="fab fa-linkedin-in pt-1"></i><span></a></li>
						 </ul>
					 </div>
					 <div class="ftco-footer-widget">
						 <h2 class="mb-3">Contact Me</h2>
						 <p class="h3 email"><a href="mailto:info@derekwebdev.com">info@DerekWebDev.com</a></p>
					 </div>
				 </div>
			 </div>
			 <div class="row">
				 <div class="col-md-12 text-center">

					 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved www.DerekWebDev.com
	 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				 </div>
			 </div>
		 </div>
	 </footer>

	 <!-- loader -->
	 <div id="ftco-loader" class="allow fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	 </div>

 </div>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/jquery.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/jquery-migrate-3.0.1.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/popper.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/bootstrap.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/jquery.easing.1.3.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/jquery.waypoints.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/jquery.stellar.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/owl.carousel.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/jquery.magnific-popup.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/aos.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/jquery.animateNumber.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/scrollax.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/bootstrap-datepicker.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/jquery.timepicker.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/google-map.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/js/main.js"></script>



<?php wp_footer(); ?>

</body>

</html>
