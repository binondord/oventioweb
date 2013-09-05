<?php

// http://codex.wordpress.org/Post_Thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(150, 100, true);

register_sidebar(array(
 'name' => 'top-right',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="widgetTitle">',
 'after_title' => '</h3>'
 ));
 
 register_sidebar(array(
 'name' => 'home-left',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="widgetTitle">',
 'after_title' => '</h3>'
 ));
 
 register_sidebar(array(
 'name' => 'home-right',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="widgetTitle">',
 'after_title' => '</h3>'
 ));
 
  register_sidebar(array(
 'name' => 'blog',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3 class="widgetTitle">',
 'after_title' => '</h3>'
 ));

?>