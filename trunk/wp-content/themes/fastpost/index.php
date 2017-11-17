<?php get_header(); ?>

  <div class="content-wrapper">
    <div class="container">
      <div class="left-part">
        <div class="post-wrapper">
          <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" category="post" scroll_container=".post-wrapper" transition="fade" button_label="Загрузить еще"]'); ?>
        </div>
      </div>
      <div class="right-part">
        <?php include 're.php';?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>