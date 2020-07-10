<?php

$logo = get_template_directory_uri() . '/img/logotowhite.png';


$headerTagline= get_theme_mod('site_description', 'A beautiful fishing spot on a working farm');
$facebookLink = esc_attr( get_option('facebook_link') );



$leftImage = get_theme_mod('header_left_image', get_template_directory_uri() . '/img/pond.jpg' );
$middleImage = get_theme_mod('header_middle_image', get_template_directory_uri() . '/img/welcomesign.jpg' );
$rightImage = get_theme_mod('header_right_image', get_template_directory_uri() . '/img/swan.jpg' );

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://kit.fontawesome.com/978397fef6.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>

</head>
<body>
<header>
  <div class="header-whole-container">
      <div class="header-logo">
        <img src="<?php echo $logo ?>">
      </div>


      <div class="title-padding">
      <div class="header-title-container">
        <a href="index.html"><h1>Oakham Farm</h1></a>
        <h4><?php echo $headerTagline ?></h4>

      </div>
      </div>
      <div class="header-menu-container">
        <div class="header-menu-float">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container' => false,

            ));
            ?>
        </div>
        <div class="header-facebook-float">
          <a href="<?php echo $facebookLink; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </div>


      </div>

    </div>
    <div class="header-three-images-container">
      <div class="header-image-container" style="background: url(<?php echo $leftImage; ?>); background-size: cover; background-position: center center;">

      </div>
      <div class="header-image-container" style="background: url(<?php echo $middleImage; ?>); background-size: cover; background-position: center center;">

      </div>
      <div class="header-image-container" style="background: url(<?php echo $rightImage; ?>); background-size: cover; background-position: center center;">

      </div>
    </div>

</header>
