<?php
/**
 * Oventio Wordpress Theme
 * by Thabet-Abbas C. Burias
 */
?>
<!DOCTYPE HTML>
<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

<script type="text/javascript">
</script>
</head>

<body <?php body_class(); ?>>
		<div id="header">
        	<div class="wrapper">
                <h1 class="logo"><a title="Home" href="<?php echo site_url(); ?>">Oventio</a></h1>
                
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('top-right') ) : ?><?php endif; ?>
			</div><!--wrapper-->
		</div><!--header-->
		
		<?php
      		$args = array( 'items_wrap' => '%3$s', 'menu' => 'Main Menu', 'container' => false );
      		wp_nav_menu($args);
		?>
        <?php 
			$show_masthead = get_post_meta($post->ID,'show_masthead',true);
			if ($show_masthead) {
		?>
            <div id="masthead">
                <div class="wrapper">
                    <?php 
                        $cols = get_post_meta($post->ID,'columns',true); 
                        if ($cols == 2) {
                    ?>
                        <div id="section-left" class="masthead-section one-half">
                        	<div class="section-content">
                            <?php echo get_post_meta($post->ID,'section-left',true); ?>
                            </div>
                        </div>
                        <div id="section-right" class="masthead-section one-half">
                        	<div class="section-content">
                            <?php echo get_post_meta($post->ID,'section-right',true); ?>
                            </div>
                        </div>
                    <?php } else if ($cols == 3) { ?>
                        <div id="section-left" class="masthead-section one-third">
                        	<div class="section-content">
                        	<?php echo get_post_meta($post->ID,'section-left',true); ?>
                            </div>
                        </div>
                        <div id="section-mid" class="masthead-section one-third">
                        	<div class="section-content">
                        	<?php echo get_post_meta($post->ID,'section-mid',true); ?>
                            </div>
                        </div>
                        <div id="section-right" class="masthead-section one-third">
                        	<div class="section-content">
                        	<?php echo get_post_meta($post->ID,'section-right',true); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div><!--wrapper-->
            </div>
        <?php } ?>