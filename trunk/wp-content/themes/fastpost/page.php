<?php get_header(); ?>

  <div class="content-wrapper">
    <div class="container">
      <div class="left-part">
        <div class="post-wrapper single-post-wrapper">
          <?php /* The loop */ ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="post">
              <header>
                <h1><?php the_title(); ?></h1>
              </header>
              <div class="body-article">
                <?php the_content(); ?>
              </div>
              <?php get_template_part('content', get_post_format()); ?>

            </article>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="right-part">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme/images/tmp/ads.png" alt=""/>
      </div>
    </div>
  </div>
<?php get_footer(); ?>