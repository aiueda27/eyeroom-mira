<?php if(is_front_page()){ ;?>
<footer id="footer" class="footer">
      <div class="footer__content">
        <!-- TODO:  -->
        <a href="<?php echo home_url('/'); ?>" class="footer__logo-link">
          <figure class="footer__logo">
            <img
              src="<?php echo esc_url(get_theme_file_uri('./assets/eyeroom-mira-logo-pink.svg')); ?>"
              alt="アイルームミラのロゴ"
            />
          </figure>
        </a>
        <div class="footer__business-info">
          <div class="footer__shop-info">
            <div class="footer__shop">
              <p class="footer__shop-name">eyeroom mira 本店</p>
              <address class="footer__shop-adress">
                渋谷区恵比寿西1-8-1<br class="sp-only" />
                かづさやビル 302　<a
                  href="https://goo.gl/maps/LRPHLNUpwAVAVpe29"
                  target="_blank"
                  >view map</a
                ><br />
                <a href="tel:09034173535">090-3417-3535</a>　9:00〜20:00
              </address>
            </div>
            <div class="footer__shop">
              <p class="footer__shop-name">eyeroom mira 恵比寿店</p>
              <address class="footer__shop-adress">
                渋谷区恵比寿西1-2-1<br class="sp-only" />
                エビスマンション 405　<a
                  href="https://goo.gl/maps/mv785Ymr3ao3WUv87"
                  target="_blank"
                  >view map</a
                ><br />
                <a href="tel:08044202525">080-4420-2525</a>　9:00〜20:00
              </address>
            </div>
          </div>
          <div class="footer__links">
            <a
              href="https://instagram.com/eyeroom_mira?igshid=YmMyMTA2M2Y="
              target="_blank"
              class="footer__link"
              >　eyeroom-mira</a
            >
            <a href="mailto:eyeroom.mira&#64;gmail.com?subject=お問合せ" class="footer__link"
              >　eyeroom.mira@gmail.com</a
            >
            <!-- TODO: -->
            <button
              onclick="location.href='<?php echo home_url('/booking/'); ?>'"
              class="book footer__book-button"
            >
              ホットペッパーから予約する
            </button>
          </div>
        </div>
      </div>
      <div class="footer__back2top">
        <!-- TODO: -->
        <button onclick="location.href='<?php echo home_url('/#'); ?>'" class="back2top">
          <figure class="back2top__image">
            <img
              src="<?php echo esc_url(get_theme_file_uri('./assets/back2top-button.svg')); ?>"
              alt="トップに戻るボタン画像"
            />
          </figure>
          <p class="back2top__text">top</p>
        </button>
      </div>
      <small class="footer__copyright"
        >&copy; <?php echo bloginfo('name'); ?></small
      >
      <!-- <small class="footer__copyright"
        >©︎ eyeroom mira all rights reserved</small
      > -->
</footer>
<?php } ;?>
<?php wp_footer(); ?>
</body>
</html>