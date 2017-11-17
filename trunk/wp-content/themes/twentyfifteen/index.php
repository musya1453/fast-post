<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="1" category="post" transition="fade"]'); ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
