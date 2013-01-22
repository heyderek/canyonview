<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<html>
  <head>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.js" charset="utf-8"></script>
    <!--[if lt IE 9]><script src="<?php bloginfo( 'template_directory' ); ?>/js/html5.js" charset="utf-8"></script><![endif]-->
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
          </hgroup><!-- /#branding -->
          <a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/canyonview_logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
          <nav><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
          <div id="head_location">
            <ul>
              <li><address>4309 W 27th Place Ste. B102, Kennewick, WA 99338</address></li>
              <li><p> | 509-737-2010</p></li>
              <li>
                <a class="social" href="https://www.facebook.com/pages/CanyonView-Family-Eye-Care/128239243886231"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="Canyon View Family Eye Care on Facebook" /></a>
              </li>
              <li>
                <a class="social" href="#"><img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="contact Family Eye Care"/></a>
              </li>
            </ul>
          </div>
        </header>
      </section><!-- /#header_wrap -->