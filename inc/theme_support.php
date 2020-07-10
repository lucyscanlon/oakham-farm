<?php

/* Registering Menu Locations */
function ruralworks_register_nav_menu() {
  register_nav_menu( 'primary', 'Main Menu');
}

add_action( 'after_setup_theme', 'ruralworks_register_nav_menu');

// Add featured image
add_action( 'after_setup_theme', function(){
	remove_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'testimonials', 'gallery' ) );
}, 11 );


function oakhamfarm_contactinfo_shortcode() {

  $addressLocation = esc_attr( get_option('address_location') );
  $landlineNumber= esc_attr( get_option('landline_number') );
  $mobileNumber = esc_attr( get_option('mobile_number') );
  $emailAddress = esc_attr( get_option('email_address') );
  $message1 = '<div class="contactnumbers-shortcode-container"><a href="tel:+'.$landlineNumber.'"><i class="fas fa-phone"></i>'.$landlineNumber.'</a> or <a href="tel:+'.$mobileNumber.'"><i class="fas fa-phone"></i>'.$mobileNumber.'</a></div>';

  $message =
  '<div class="oakhamfarm-contactinfo-container">
    <p><i class="fas fa-map-pin"></i>'.$addressLocation.'<br /><i class="fas fa-phone"></i>'.$mobileNumber.' or <i class="fas fa-phone"></i>'.$landlineNumber.'<br /><i class="far fa-envelope-open"></i><a href="mailto:'.$emailAddress.'">'.$emailAddress.'</a></p>
  </div>';


  return $message;

}

add_shortcode('contactinfo', 'oakhamfarm_contactinfo_shortcode');
