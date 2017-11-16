<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Fast_Post
 * @since Fast Post 1.0
 */
?>

<?php get_header(); ?>


  <div class="content-wrapper">
    <div class="container">
      <div class="left-part">
        <div class="post-wrapper single-post-wrapper">
          <?php /* The loop */ ?>
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <article class="post">
              <header>
                <h1><?php the_title(); ?></h1>
              </header>
              <div class="body-article">

              </div>
              <?php the_content(); ?>
            </article>

          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="right-part">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme/images/tmp/ads.png" alt=""/>
      </div>
    </div>
  </div>
<?php get_footer(); ?>