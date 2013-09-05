<?php
/*
* Template Name: Home Page
*/
get_header(); ?>

    <div class="container">
    	<div class="wrapper">
              <div class="home-widget" id="home-left">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-left') ) : ?><?php endif; ?>
              </div>
              <div class="home-widget" id="home-rightg">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-mid') ) : ?><?php endif; ?>
              </div>
        </div><!--wrapper-->
    </div><!--container-->

<?php get_footer(); ?>