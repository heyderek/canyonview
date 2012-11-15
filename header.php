<!DOCTYPE html>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width" />
<html>
  <head>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if lt IE 9]><script src="js/html5.js" charset="utf-8"></script><![endif]-->
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.js" charset="utf-8"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/prefixfree.min.js" charset="utf-8"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/flexslider.js" charset="utf-8"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/custom.js" charset="utf-8"></script>
    <title><?php
  	/*
  	 * Print the <title> tag based on what is being viewed.
  	 */
  	global $page, $paged;
  
  	wp_title( '|', true, 'right' );
  
  	// Add the blog name.
  	bloginfo( 'name' );
  
  	// Add the blog description for the home/front page.
  	$site_description = get_bloginfo( 'description', 'display' );
  	if ( $site_description && ( is_home() || is_front_page() ) )
  		echo " | $site_description";
  
  	// Add a page number if necessary:
  	if ( $paged >= 2 || $page >= 2 )
  		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );
  
  	?></title>
  <?php wp_head(); ?>
  </head>
  <body>
    <div id="page">
      <section id="header_wrap">
        <header class="wrapper">
          <hgroup id="branding">
            <h1>Canyon View Family Eye Care</h1>
            <h2>Dr. Karl Czirr</h2>
            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/canyonview_logo.png" /></a>
          </hgroup><!-- /#branding -->
          <nav><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
          <div id="head_location">
            <ul>
              <li><address>1234 Anywhere, WA</address></li>
              <li><p>509-123-4567</p></li>
            </ul>
          </div>
        </header>
      </section><!-- /#header_wrap -->