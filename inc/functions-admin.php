<?php

function trek_add_admin_page() {

  // Generates admin page
  add_menu_page( 'Oakham Farm Settings', 'Oakham Farm', 'manage_options', 'trek_settings', 'trek_create_page', 'dashicons-phone', 110 );

  // Generates admin submenu
  add_submenu_page( 'trek_settings', 'Oakham Farm Settings', 'Oakham Farm Settings', 'manage_options', 'trek_settings', 'trek_create_page');

  add_action( 'admin_init', 'trek_custom_settings');

}

add_action( 'admin_menu', 'trek_add_admin_page');

function trek_create_page() {
  //grabs template for page
    require_once( get_template_directory() . '/inc/template-parts/admin-settings.php');
}




function trek_custom_settings() {

  //creates custom settings fields

  //trek

  //trek travel stats
  register_setting('trek-travelstats-group', 'header_tagline');
  register_setting('trek-travelstats-group', 'mobile_number');
  register_setting('trek-travelstats-group', 'landline_number');
  register_setting('trek-travelstats-group', 'email_address');
  register_setting('trek-travelstats-group', 'facebook_link');
  register_setting('trek-travelstats-group', 'address_location');

  add_settings_section( 'trek-travelstats-options', '', 'trek_travelstats_options', 'trek_settings');

  add_settings_field('header_tagline', 'Farm Description (appears top left)', 'oakham_header_tagline', 'trek_settings', 'trek-travelstats-options');
  add_settings_field('mobile-number', 'Mobile Number', 'oakham_mobile_number', 'trek_settings', 'trek-travelstats-options');
  add_settings_field('landline-number', 'Landline Number', 'oakham_landline_number', 'trek_settings', 'trek-travelstats-options');
  add_settings_field('email-address', 'Email Address', 'oakham_email_address', 'trek_settings', 'trek-travelstats-options');
  add_settings_field('facebook-link', 'Link To Facebook Page', 'oakham_facebook_link', 'trek_settings', 'trek-travelstats-options');
  add_settings_field('address-location', 'Address', 'oakham_address_location', 'trek_settings', 'trek-travelstats-options');

}


// Functions for Trek Travel Stats

function trek_travelstats_options() {

}

function oakham_header_tagline() {
  $headerTagline= esc_attr( get_option('header_tagline') );
  echo '<input type="tel" name="header_tagline" value="'.$headerTagline.'" />';
}

function oakham_mobile_number() {
  $mobileNumber = esc_attr( get_option('mobile_number') );
  echo '<input type="tel" name="mobile_number" value="'.$mobileNumber.'" />';
}

function oakham_landline_number() {
  $landlineNumber= esc_attr( get_option('landline_number') );
  echo '<input type="tel" name="landline_number" value="'.$landlineNumber.'" />';
}

function oakham_email_address() {
  $emailAddress = esc_attr( get_option('email_address') );
  echo '<input type="email" name="email_address" value="'.$emailAddress.'" />';
}


function oakham_facebook_link() {
  $facebookLink = esc_attr( get_option('facebook_link') );
  echo '<input type="text" name="facebook_link" value="'.$facebookLink.'" />';
}

function oakham_address_location() {
  $addressLocation = esc_attr( get_option('address_location') );
  echo '<textarea name="address_location" />'.$addressLocation.'</textarea>';
}
