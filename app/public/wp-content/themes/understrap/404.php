<?php
/**
 * The template for displaying 404 pages (not found).
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

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">
							<br>


							<h1 class="page-title"><?php esc_html_e( 'Sorry, that page cannot be displayed.', 'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">
							<br>
							<br>
							<br>
							<br>

							<p><?php esc_html_e( 'Most likely it does not exist. Maybe try one of the links below or a search?', 'understrap' ); ?></p>

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

							<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

								<div class="widget widget_categories">

									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'understrap' ); ?></h2>

									<ul>
										<?php
										wp_list_categories(
											array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 10,
											)
										);
										?>
									</ul>

								</div><!-- .widget -->

							<?php endif; ?>

							<?php

							/* translators: %1$s: smiley */
							$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'understrap' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

							the_widget( 'WP_Widget_Tag_Cloud' );
							?>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

	    </section>



<?php get_footer(); ?>
