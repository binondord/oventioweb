<? get_header(); ?>

    <div class="container">
        <div class="wrapper">
          <div class="content-left">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          			<h1 class="headline"><?php the_title(); ?></h1>

          			<div class="entry">
          				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
          				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
          				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
          				<p class="postmetadata alt">
          					<small>
          						This entry was posted
          						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
          						and is filed under <?php the_category(', ') ?>.
          						You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.
          						<?php if ( comments_open() && pings_open() ) {
          							// Both Comments and Pings are open ?>
          							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
          						<?php } elseif ( !comments_open() && pings_open() ) {
          							// Only Pings are Open ?>
          							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
          						<?php } elseif ( comments_open() && !pings_open() ) {
          							// Comments are open, Pings are not ?>
          							You can skip to the end and leave a response. Pinging is currently not allowed.
          						<?php } elseif ( !comments_open() && !pings_open() ) {
          							// Neither Comments, nor Pings are open ?>
          							Both comments and pings are currently closed.
          						<?php } edit_post_link('Edit this entry','','.'); ?>
          					</small>
          				</p>

          			</div>
          		</div>
          	<?php comments_template(); ?>
          	<?php endwhile; else: ?>
    		      <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
          <div id="sidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog') ) : ?><?php endif; ?>
          </div>
        </div><!--wrapper-->
    </div><!--container-->
 <? get_footer(); ?>