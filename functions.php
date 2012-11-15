<?php


//Add Sidebar Widget Area
function cv_widgets() {
  register_sidebar( array(
    'name' => __( 'Sidebar', 'cvw' ),
    'id' => 'sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ) );
}
add_action('init', 'cv_widgets'); 

//Add Primary Menu Area
register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'bnb' ),
  ) 
);