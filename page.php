<?php

$leftImage = get_theme_mod('header_left_image', get_template_directory_uri() . '/img/pond.jpg' );
$middleImage = get_theme_mod('header_middle_image', get_template_directory_uri() . '/img/welcomesign.jpg' );
$rightImage = get_theme_mod('header_right_image', get_template_directory_uri() . '/img/swan.jpg' );


?>

<?php get_header(); ?>
<div class="header-three-images-container">
  <div class="header-image-container" style="background: url(<?php echo $leftImage; ?>); background-size: cover; background-position: center center;">

  </div>
  <div class="header-image-container" style="background: url(<?php echo $middleImage; ?>); background-size: cover; background-position: center center;">

  </div>
  <div class="header-image-container" style="background: url(<?php echo $rightImage; ?>); background-size: cover; background-position: center center;">

  </div>
</div>

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
