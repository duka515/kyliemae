<?php
if (!defined('ABSPATH')) exit;

function kyliemae_setup() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'kyliemae_setup');

function kyliemae_assets() {
  $ver = '1.0.0';
  wp_enqueue_style('kyliemae-google', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;500;600&display=swap', array(), null);
  wp_enqueue_style('kyliemae-main', get_template_directory_uri() . '/css/style.css', array(), $ver);
  wp_enqueue_style('kyliemae-open', get_template_directory_uri() . '/css/open-app.css', array('kyliemae-main'), $ver);
  wp_enqueue_script('kyliemae-app', get_template_directory_uri() . '/js/app.js', array(), $ver, true);
}
add_action('wp_enqueue_scripts', 'kyliemae_assets');

function kyliemae_opt($key, $default = '') {
  $v = get_theme_mod($key, $default);
  return $v !== '' && $v !== null ? $v : $default;
}

function kyliemae_img($key, $fallback) {
  $id = get_theme_mod($key);
  if ($id) {
    $url = wp_get_attachment_url($id);
    if ($url) return $url;
  }
  return get_template_directory_uri() . $fallback;
}

function kyliemae_customize($wp_customize) {
  $wp_customize->add_section('kyliemae_site', array(
    'title' => 'Kylie Mae Landing',
    'priority' => 30,
  ));

  $texts = array(
    'creator_name' => array('Name', 'Kylie Mae'),
    'tagline' => array('Tagline', 'Your favorite creator for exclusive content, live shows & more'),
    'flag' => array('Flag', '🇺🇸'),
    'videos' => array('Videos count', '187'),
    'photos' => array('Photos count', '341'),
    'live_url' => array('WATCH ME NOW link', 'https://example.com/live'),
    'premium_url' => array('EXCLUSIVE CONTENT link', 'https://example.com/premium'),
    'photos_url' => array('Photos / View all link', 'https://example.com/photos'),
  );
  foreach ($texts as $id => $meta) {
    $wp_customize->add_setting($id, array('default' => $meta[1], 'sanitize_callback' => 'wp_kses_post'));
    $wp_customize->add_control($id, array('label' => $meta[0], 'section' => 'kyliemae_site', 'type' => 'text'));
  }

  $images = array(
    'avatar_id' => 'Profile photo',
    'g1_id' => 'Gallery photo 1',
    'g2_id' => 'Gallery photo 2',
    'g3_id' => 'Gallery photo 3',
    'g4_id' => 'Gallery photo 4 (locked)',
    'popup_live_id' => 'WATCH popup image',
    'popup_premium_id' => 'EXCLUSIVE popup image',
    'popup_photos_id' => 'Photos popup image',
  );
  foreach ($images as $id => $label) {
    $wp_customize->add_setting($id, array('default' => '', 'sanitize_callback' => 'absint'));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, $id, array(
      'label' => $label,
      'section' => 'kyliemae_site',
      'mime_type' => 'image',
    )));
  }
}
add_action('customize_register', 'kyliemae_customize');
