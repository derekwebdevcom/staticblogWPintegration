<?php
/**
 * Template Name: Home Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139597870-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139597870-1');
</script>

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
			<section class="ftco-section">
			 <div class="container mt-5">
				 <div class="row justify-content-center mb-5 pb-5">
					 <div class="col-md-7 text-center heading-section ftco-animate">
						 <span>Blog</span>
						 <h2>Read my blog</h2>
					 </div>
				 </div>

<div class="wrapper" id="index-wrapper">
  <br>
  <br>


	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">


		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
        <br>
        <br>
        <br>
      	<br>



				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div <?php post_class(); ?>>

		<?php
		//Post thumbnails need this in functions.php: `add_theme_support('post-thumbnails');`
		if(has_post_thumbnail()) the_post_thumbnail(array(100,100));
		?>

		<h2 id="post-<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>

		<div class="post-metadata">
			<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
			<p><?php edit_post_link('Edit','','|'); ?> <?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?></p>
		</div>

		<div class="post-content">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
			<?php /* the_excerpt(); */ ?>
		</div>

		<div class="post-tags">
			<?php the_tags(); ?>
		</div>

	</div>

<?php endwhile; ?>

	<div class="post-navigation">
		<div><?php posts_nav_link('', 'Next Entries &raquo;', ''); ?></div>
		<div><?php posts_nav_link('', '', '&laquo; Previous Entries'); ?></div>
	</div>

<?php else: ?>
	<!-- No posts found -->
<?php endif; ?>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->
</section>



<?php get_footer(); ?>
