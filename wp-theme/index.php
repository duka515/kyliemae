<?php get_header();
$name = kyliemae_opt('creator_name', 'Kylie Mae');
$tagline = kyliemae_opt('tagline', 'Your favorite creator for exclusive content, live shows & more');
$flag = kyliemae_opt('flag', '🇺🇸');
$videos = kyliemae_opt('videos', '187');
$photos = kyliemae_opt('photos', '341');
$avatar = kyliemae_img('avatar_id', '/assets/avatar.svg');
$g1 = kyliemae_img('g1_id', '/assets/g1.svg');
$g2 = kyliemae_img('g2_id', '/assets/g2.svg');
$g3 = kyliemae_img('g3_id', '/assets/g3.svg');
$g4 = kyliemae_img('g4_id', '/assets/g4.svg');
$dmca = home_url('/dmca/');
?>
<div id="fbOverlay" class="fb-overlay" hidden>
  <a id="openAppBtn" class="open-app-btn" href="#">Are you 18 or older? CLICK HERE TO CONTINUE...</a>
</div>
<main class="page">
  <section class="hero">
    <div class="profile">
      <div class="avatar-wrap">
        <img id="avatar" class="avatar" src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($name); ?>" />
        <span class="online"></span>
      </div>
      <div class="identity">
        <div class="name-row">
          <h1 id="creatorName"><?php echo esc_html($name); ?></h1>
          <span class="badges"><span id="flag" class="flag"><?php echo esc_html($flag); ?></span><span class="verified"><svg viewBox="0 0 24 24"><path d="M12 2l2.2 2.2 3.1-.4 1 3 2.8 1.5-1.5 2.8 1.5 2.8-2.8 1.5-1 3-3.1-.4L12 22l-2.2-2.2-3.1.4-1-3L2.9 15.7l1.5-2.8L2.9 10.1l2.8-1.5 1-3 3.1.4L12 2zm-1.2 13.3l5.5-5.5-1.4-1.4-4.1 4.1-2-2-1.4 1.4 3.4 3.4z"/></svg></span></span>
        </div>
        <p id="tagline" class="tagline"><?php echo esc_html($tagline); ?></p>
        <div class="stats">
          <div class="stat"><strong id="videoCount"><?php echo esc_html($videos); ?></strong><span>VIDEOS</span></div>
          <div class="stat"><strong id="photoCount"><?php echo esc_html($photos); ?></strong><span>PHOTOS</span></div>
        </div>
      </div>
    </div>
    <div class="ctas">
      <a class="cta js-live" href="#"><span class="cta-copy"><strong>WATCH ME NOW</strong><small>Join my live show</small></span><span class="arrow">›</span></a>
      <a class="cta js-premium" href="#"><span class="cta-copy"><strong>EXCLUSIVE CONTENT</strong><small>View premium content</small></span><span class="arrow">›</span></a>
    </div>
  </section>
  <section class="gallery-block">
    <div class="gallery-head">
      <div class="left"><strong><span id="photoCountLabel"><?php echo esc_html($photos); ?></span> PHOTOS</strong><span class="updated">updated today</span></div>
      <a class="view-all js-photos" href="#">VIEW ALL CONTENT ›</a>
    </div>
    <div class="gallery">
      <a class="shot js-photos" href="#"><img src="<?php echo esc_url($g1); ?>" alt="" /></a>
      <a class="shot js-photos" href="#"><img src="<?php echo esc_url($g2); ?>" alt="" /></a>
      <a class="shot js-photos" href="#"><img src="<?php echo esc_url($g3); ?>" alt="" /></a>
      <a class="shot locked js-photos" href="#">
        <img src="<?php echo esc_url($g4); ?>" alt="" />
        <span class="lock-overlay"><svg viewBox="0 0 24 24"><rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V8a4 4 0 018 0v3"/></svg></span>
      </a>
    </div>
  </section>
</main>
<footer><a href="<?php echo esc_url($dmca); ?>">DMCA</a><span>© <?php echo esc_html(date('Y')); ?> <span id="footerName"><?php echo esc_html($name); ?></span></span></footer>
<?php get_footer();
