  <?php
  $name = kyliemae_opt('creator_name', 'Kylie Mae');
  $live = kyliemae_opt('live_url', 'https://example.com/live');
  $premium = kyliemae_opt('premium_url', 'https://example.com/premium');
  $photos = kyliemae_opt('photos_url', 'https://example.com/photos');
  $popup_live = kyliemae_img('popup_live_id', '/assets/popup-live.svg');
  $popup_premium = kyliemae_img('popup_premium_id', '/assets/popup-premium.svg');
  $popup_photos = kyliemae_img('popup_photos_id', '/assets/popup-photos.svg');
  $avatar = kyliemae_img('avatar_id', '/assets/avatar.svg');
  ?>
  <div id="funnelOverlay" class="funnel-overlay" hidden style="position:fixed;inset:0;z-index:2147483647;display:none;align-items:center;justify-content:center;padding:16px;background:rgba(0,0,0,.78);">
    <div class="funnel-card" style="position:relative;width:min(400px,100%);background:#1c1a22;border-radius:18px;padding:26px 18px 18px;text-align:center;">
      <button id="popupClose" class="funnel-x" type="button">×</button>
      <h2 id="popupName"><?php echo esc_html($name); ?></h2>
      <p id="popupHeadline">Watch explicit content for FREE in "<span>Jerkmate</span>"</p>
      <div id="popupSteps" class="funnel-steps"><div>1- Create a FREE Jerkmate Account</div><div>2- Get the Free Lifetime Membership</div><div>3- Enjoy thousands of models like me</div></div>
      <img id="popupImage" class="funnel-banner" src="<?php echo esc_url($popup_photos); ?>" alt="" />
      <span id="popupJoin" class="funnel-btn" role="button">Join for Free</span>
    </div>
  </div>
  <script>
  window.SITE = {
    name: <?php echo wp_json_encode($name); ?>,
    tagline: <?php echo wp_json_encode(kyliemae_opt('tagline', 'Your favorite creator for exclusive content, live shows & more')); ?>,
    flag: <?php echo wp_json_encode(kyliemae_opt('flag', '🇺🇸')); ?>,
    videos: <?php echo wp_json_encode(kyliemae_opt('videos', '187')); ?>,
    photos: <?php echo wp_json_encode(kyliemae_opt('photos', '341')); ?>,
    avatar: <?php echo wp_json_encode($avatar); ?>,
    liveUrl: <?php echo wp_json_encode($live); ?>,
    liveImage: <?php echo wp_json_encode($popup_live); ?>,
    premiumUrl: <?php echo wp_json_encode($premium); ?>,
    premiumImage: <?php echo wp_json_encode($popup_premium); ?>,
    photosUrl: <?php echo wp_json_encode($photos); ?>,
    photosImage: <?php echo wp_json_encode($popup_photos); ?>,
    popup: {
      enabled: true,
      brand: "Jerkmate",
      headline: "Watch explicit content for FREE in",
      steps: ["1- Create a FREE Jerkmate Account","2- Get the Free Lifetime Membership","3- Enjoy thousands of models like me"],
      image: <?php echo wp_json_encode($popup_photos); ?>,
      button: "Join for Free",
      url: <?php echo wp_json_encode($live); ?>
    }
  };
  </script>
  <?php wp_footer(); ?>
</body>
</html>
