<?php get_header(); ?>

  <div class="content-wrapper">
    <div class="container">
      <div class="left-part">
        <div class="post-wrapper">
          <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

            <article class="post">
              <header>
                <?php edit_post_link('Редактировать запись.', '<p>', '</p>'); ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <span class="date"><?php echo get_the_date(); ?></span>
                <ul class="tags">
                  <?php the_tags('<li>', '</li><li>', '</li>'); ?>
                </ul>
              </header>
              <div class="body-article">
                <div class="img">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if (function_exists('add_theme_support'))
                      the_post_thumbnail(array(600, 9999), array('class' => 'img-polaroid'));
                    ?></a>
                </div>
                <div class="text">
                  <p>
                    <?php the_excerpt(); ?>
                  </p>
                </div>

              </div>
              <div class="footer-article">
                <!--                <span class="views">--><?php //if(function_exists('the_views')) { the_views(); } ?><!-- Просмотров</span>-->

              </div>
            </article>
          <?php endwhile;
          else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>); ?>
        </div>
      </div>
      <div class="right-part">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme/images/tmp/ads.png" alt=""/>
      </div>
    </div>
  </div>
<?php get_footer(); ?>