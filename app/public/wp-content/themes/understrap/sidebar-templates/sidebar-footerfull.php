<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<footer class="ftco-footer ftco-bg-dark ftco-section">
			 <div class="container">
				 <div class="row mb-5 justify-content-center">
					 <div class="col-md-5 text-center">
						 <div class="ftco-footer-widget mb-5">
							 <ul class="ftco-footer-social list-unstyled">
								 <li><a href="https://github.com/derekwebdevcom" target="_blank"><span class="icon-github"></span></a></li>
									 <li><a href="https://codepen.io/derek-andrews/" target="_blank"><span class="icon-codepen"></span></a></li>
									 <li><a href="https://linkedin.com/in/derek-andrews-5280" target="_blank"><span class="icon-linkedin"></span></a></li>
							 </ul>
						 </div>
						 <div class="ftco-footer-widget">
							 <h2 class="mb-3">Contact Me</h2>
							 <p class="h3 email"><a href="#">info@DerekWebDev.com</a></p>
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
		 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		 </div>

	 </div>

<?php endif; ?>
