<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta name="theme-color" content="#08060f" />
  <?php wp_head(); ?>
  <style>.online{box-shadow:0 0 0 0 rgba(34,197,94,.7);animation:livePulse 1.4s ease-out infinite;z-index:2}.online::after{content:"";position:absolute;inset:-4px;border-radius:50%;border:3px solid rgba(34,197,94,.55);animation:liveRing 1.4s ease-out infinite}@keyframes livePulse{0%{box-shadow:0 0 0 0 rgba(34,197,94,.75);transform:scale(1)}70%{box-shadow:0 0 0 12px rgba(34,197,94,0);transform:scale(1.08)}100%{box-shadow:0 0 0 0 rgba(34,197,94,0);transform:scale(1)}}@keyframes liveRing{0%{transform:scale(.7);opacity:.9}100%{transform:scale(1.7);opacity:0}}</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
