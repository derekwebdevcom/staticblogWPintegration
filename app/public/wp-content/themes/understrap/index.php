<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DerekWebDev</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
      	<div class="img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/cloudsilver.png)"></div>
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


<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->






<?php get_footer(); ?>
