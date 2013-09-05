<? get_header(); ?>

    <div class="container"><!-- sws index.php -->
        <div class="wrapper">
          <div class="content-left">
          	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("posts_per_page=5&paged=$paged"); ?>
			
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<?php 
								if (has_post_thumbnail()) 
								{ 
									// 'thumbnail', 'medium', 'large', 'full', or array(width, height)
									// @link http://codex.wordpress.org/Function_Reference/get_the_post_thumbnail
									$thumbSize = array(200, 200);
									echo get_the_post_thumbnail(get_the_ID(), $thumbSize); 
								} 
							?>

          				<h3 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          				<small class="theTime">Posted <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small>

          				<div class="entry">
          					<?php #the_content('Read the rest of this entry &raquo;'); ?>
							
							<?php the_excerpt(); ?>
							<a href="<?php echo get_permalink(); ?>"> Read the rest of this entry &raquo;</a>
							
							<p><small>You can <?php comments_popup_link('Leave a Response'); ?> to this article.</small></p>
          				</div>
                        <br />
          			</div>

          	<?php endwhile; ?>

          		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

          	<?php else : ?>

          		<h2 class="center">Not Found</h2>
          		<p class="center">Sorry, but you are looking for something that isn't here.</p>
          		<?php get_search_form(); ?>

          	<?php endif; ?>
          </div>
          <div id="sidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog') ) : ?><?php endif; ?>
          </div>
        </div><!--wrapper-->
    </div><!--container-->

 <? get_footer(); ?>