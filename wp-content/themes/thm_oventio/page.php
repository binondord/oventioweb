<? get_header(); ?>

    <div class="container"><!-- sws page.php -->
        <div class="wrapper">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          		<div class="post" id="post-<?php the_ID(); ?>">
              <!-- Title / Page Headline -->
					<h1 class="headline"><?php the_title(); ?></h1>
          			<div class="entry">
          				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

          				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

          			</div>
          		</div>
          	<?php endwhile; endif; ?>
        </div><!--wrapper-->
    </div><!--container-->
    
 <? get_footer(); ?>