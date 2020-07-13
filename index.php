<?php

$leftImage = get_theme_mod('header_left_image', get_template_directory_uri() . '/img/pond.jpg' );
$middleImage = get_theme_mod('header_middle_image', get_template_directory_uri() . '/img/welcomesign.jpg' );
$rightImage = get_theme_mod('header_right_image', get_template_directory_uri() . '/img/swan.jpg' );

$fishIcon = get_template_directory_uri(). '/img/fishicon.png';

$fishTitle = get_theme_mod('fishing_title', 'Oakham Farm Coarse Fishing');
$fishDescription = get_theme_mod('fishing_description', 'fishing description');
$fishLink = get_theme_mod('fishing_readmore_link', '');

$timberIcon = get_template_directory_uri(). '/img/timbericon.png';
$timberBackgroundImage = get_theme_mod('timber_background_image', get_template_directory_uri(). '/img/truck.jpg');
$timberTitle = get_theme_mod('timber_title', 'Oakham English Timber');
$timberDescription = get_theme_mod('timber_description', 'timber description');
$timberLink = get_theme_mod('timber_readmore_link', '');
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
<div class="timber-whole-container">
    <div class="timber-fishing-boxes">
      <div class="icon-box">
        <img src="<?php echo $fishIcon; ?>" />
      </div>

      <div class="fishing-title-container">
        <h4><?php echo $fishTitle; ?></h4>
      </div>
      <div class="fishing-description-container">
        <p><?php echo $fishDescription; ?></p>
      </div>
      <div class="readmore-container">
        <a href="<?php echo $fishLink; ?>"><p>
          read more <i class="fas fa-long-arrow-alt-right"></i>
        </p></a>
      </div>


    </div>

  </div>
  <div class="timber-whole-container" style="background: url('<?php echo $timberBackgroundImage; ?>'); background-size: cover; background-position: bottom center;">
    <div class="timber-green-layover">
      <div class="timber-fishing-boxes">
        <div class="icon-box">
          <img src="<?php echo $timberIcon; ?>"/>
        </div>

        <div class="timber-title-container">
          <h4><?php echo $timberTitle; ?></h4>
        </div>
        <div class="timber-description-container">
          <p><?php echo $timberDescription; ?></p>
        </div>
        <div class="timber-readmore-container">
          <a href="<?php echo $timberLink; ?>"><p>
            read more <i class="fas fa-long-arrow-alt-right"></i>
          </p></a>
        </div>


      </div>


    </div>
  </div>

<?php get_footer(); ?>
