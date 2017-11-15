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
                <span class="date"><?php echo get_the_date(); ?></span>
                <ul class="tags">
                  <?php the_tags('<li>','</li><li>','</li>'); ?>
                </ul>
              </header>
              <div class="body-article">
                <?php the_content(); ?>
              </div>
              <?php get_template_part('content', get_post_format()); ?>

              <div class="footer-article">
                <span class="views"><?php if(function_exists('the_views')) { the_views(); } ?>  Просмотров</span>
                <ul class="social-elem">
                  <li><a href="#"><img src="theme/images/tmp/soc-1.jpg" alt=""/></a></li>
                  <li><a href="#"><img src="theme/images/tmp/soc-2.jpg" alt=""/></a></li>
                  <li><a href="#"><img src="theme/images/tmp/soc-3.jpg" alt=""/></a></li>
                  <li><a href="#"><img src="theme/images/tmp/soc-4.jpg" alt=""/></a></li>
                </ul>
              </div>
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