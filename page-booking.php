<?php
/*
Template Name: booking
*/
?>

<?php get_header(); ?>
    <div class="overlay"></div>
    <div class="booking">
      <div class="booking__container">
        <div class="booking__text-container">
          <p class="booking__text">ご希望の店舗をお選びください</p>
          <p class="booking__subtext">ホットペッパーにページ遷移します</p>
        </div>
        <div class="booking__button-container">
          <button
            onclick="location.href='https://beauty.hotpepper.jp/kr/slnH000434395/'"
            class="book booking__button"
          >
            eyeroom mira 本店
          </button>
          <button
            onclick="location.href='https://beauty.hotpepper.jp/kr/slnH000599265/'"
            class="book booking__button"
          >
            eyeroom mira 恵比寿店
          </button>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>
  </body>
</html>
