<?php get_header(); ?>
<?php if( have_posts() ):
      while( have_posts() ): the_post(); ?>
      <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="page-whole-container">
          <div class="page-content-width">
            <div class="icon-box">
              <img src="<?php echo $backgroundImg[0]; ?>"/>
            </div>
            <div class="page-title-container">
              <h1><?php echo the_title(); ?></h1>
            </div>
            <div class="page-content-container">
              <p>
                <?php echo the_content(); ?>
              </p>
            </div>
          </div>
        </div>

<?php  endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
