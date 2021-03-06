<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();

$container = get_theme_mod( 'understrap_container_type' );


?>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/animate.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/magnific-popup.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/aos.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/ionicons.min.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/jquery.timepicker.css">


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/flaticon.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/icomoon.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/customcss/style.css">
<link rel='shortcut icon' type='image/x-icon' href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

<div class="KW_progressContainer">
	<div class="KW_progressBar">

	</div>
</div>
<div class="page">
<nav id="colorlib-main-nav" role="navigation">
	<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
	<div class="js-fullheight colorlib-table">
		<div class="img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/cloudorange.png)"></div>
		<div class="colorlib-table-cell js-fullheight">
			<div class="row no-gutters">
				<div class="col-md-12 text-center">
					<h1 class="mb-4"><a href="index.html" class="logo">Derek Andrews</a></h1>
					<ul>
						<li><a href="https://derekwebdev.com"><span><small></small>Home</span></a></li>
						<li><a href="https://derekwebdev.com/about.html"><span><small></small>Resume</span></a></li>
						<li><a href="https://derekwebdev.com/services.html"><span><small></small>Services</span></a></li>
						<li><a href="https://derekwebdev.com/portfolio.html"><span><small></small>Portfolio</span></a></li>
						<li class="active"><a href="https://blog.derekwebdev.com"><span><small></small>Blog</span></a></li>
						<li><a href="https://derekwebdev.com/contact.html"><span><small></small>Contact</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>

<div id="colorlib-page">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="colorlib-navbar-brand">
						<a class="colorlib-logo" href="https://derekwebdev.com"><span class="logo-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/derekwebdevlogo.png);"></span>Derek Andrews</a>
					</div>
					<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
				</div>
			</div>
		</div>
	</header>
	<br>
	<br>




<div class="wrapper" id="single-wrapper">



	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->
</section>




<?php get_footer(); ?>
