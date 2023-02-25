<?php get_header(); ?>
<main>
<div class="overlay"></div>
      <section id="fv" class="fv">
        <figure class="fv__image--pc">
          <img src="<?php bloginfo('template_url');?>/assets/topimg@2x.png" alt="メイン女性画像" />
        </figure>
        <figure class="fv__image--sp">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/top-img-sp@2x.png')); ?>" alt="メイン女性画像" />
        </figure>
        <div class="fv__button-container">
            <!-- TODO: -->
          <button
            onclick="location.href='<?php echo home_url('/booking/'); ?>'"
            class="book fv__button"
          >
            ホットペッパーから予約する
          </button>
        </div>
      </section>
      <section id="menu" class="menu">
        <div class="menu__left">
          <h2 class="title">施術メニュー</h2>
          <p class="subtitle">menu</p>
          <!-- TODO:詳細ページ完成し次第反映 -->
          <!-- <button class="viewall menu__viewall">
            <figure class="viewall__image">
              <img
                src="<?php echo esc_url(get_theme_file_uri('./assets/more-button.svg')); ?>"
                alt="施術メニュー開くボタン画像"
              />
            </figure>
            <p class="viewall__text">view all</p>
          </button> -->
        </div>
        <div class="menu__right">
          <div class="carousel">
            <div class="carousel__item">
                <!-- TODO: 詳細ページ完成し次第反映-->
              <!-- <a class="carousel__link" href=""> -->
                <img
                  class="carousel__image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/eyelash@2x.jpg')); ?>"
                  alt="ラッシュエクステンション施術後写真"
                />
                <p class="carousel__text">まつげエクステンション</p></p>
              <!-- </a> -->
            </div>
            <div class="carousel__item">
                <!-- TODO: 詳細ページ完成し次第反映-->
              <!-- <a class="carousel__link" href=""> -->
                <img
                  class="carousel__image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/pari@2x.jpg')); ?>"
                  alt="ラッシュリフト施術後写真"
                />
                <p class="carousel__text">パリジェンヌラッシュリフト</p>
              <!-- </a> -->
            </div>
            <div class="carousel__item">
                <!-- TODO: 詳細ページ完成し次第反映-->
              <!-- <a class="carousel__link" href=""> -->
                <img
                  class="carousel__image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/lashlift@2x.jpg')); ?>"
                  alt="ラッシュリフト施術後写真"
                />
                <p class="carousel__text">ラッシュリフト</p>
              <!-- </a> -->
            </div>
            <div class="carousel__item">
                <!-- TODO: 詳細ページ完成し次第反映-->
              <!-- <a class="carousel__link" href=""> -->
                <img
                  class="carousel__image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/pari-browstyling@2x.jpg')); ?>"
                  alt="ラッシュリフト施術後写真"
                />
                <p class="carousel__text">パリジェンヌ＆アイブロウスタイリング</p>
              <!-- </a> -->
            </div>
            <div class="carousel__item">
                <!-- TODO:詳細ページ完成し次第反映 -->
              <!-- <a class="carousel__link" href=""> -->
                <img
                  class="carousel__image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/eyebrow-lift@2x.jpg')); ?>"
                  alt="ブロウリフト施術後写真"
                />
                <p class="carousel__text">ハリウッドブロウリフト</p>
              <!-- </a> -->
            </div>
            <div class="carousel__item">
                <!-- TODO:詳細ページ完成し次第反映 -->
              <!-- <a class="carousel__link" href=""> -->
                <img
                  class="carousel__image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/eyebrow-styling@2x.jpg')); ?>"
                  alt="フェイシャル施術後写真"
                />
                <p class="carousel__text">アイブロウスタイリング</p>
              <!-- </a> -->
            </div>
          </div>
        </div>
      </section>
      <section id="prices" class="prices">
        <div class="prices__title-wrapper">
          <h2 class="title prices__title">料金表</h2>
          <p class="subtitle prices__subtitle">prices</p>
        </div>
        <div class="price-table prices__contents">
          <!-- 料金表内左 -->
          <div class="price-table__left">
            <!-- 料金名カテゴリ -->
            <div class="price-table__text-container">
              <div class="price-table__row">
                <p class="price-table__row-title price-table__row-title--lash-icon">lash extentions</p>
                <p class="price-table__item">上まつげシングルラッシュ　10本毎</p>
                <p class="price-table__item">下まつげシングルラッシュ　10本毎</p>
                <p class="price-table__item">上まつげボリュームラッシュ　10束毎</p>
              </div>
              <div class="price-table__row">
                <p class="price-table__row-title price-table__row-title--lash-icon">lash lift</p>
                <p class="price-table__item">ラッシュリフト</p>
                <p class="price-table__item">パリジェンヌラッシュリフト</p>
                <p class="price-table__item">下まつげラッシュリフト</p>
                <p class="price-table__item">上下セットラッシュリフト</p>
              </div>
              <div class="price-table__row">
                <p class="price-table__row-title price-table__row-title--brow-icon">eyebrow</p>
                <p class="price-table__item">ハリウッドブロウリフト</p>
                <p class="price-table__item">アイブロウスタイリング</p>
                <p class="price-table__item lh15-sp">ラッシュリフト &<br class="sp-only"> ハリウッドブロウリフト</p>
                <p class="price-table__item lh15-sp">アイブロウスタイリング &<br class="sp-only"> ラッシュリフト</p>
              </div>
            </div>
            <div class=price-table__line></div>
            <!-- 料金カテゴリ -->
            <div class="price-table__price-container">
               <div class="price-table__price-row">
                <p class="price-table__price">¥900</p>
                <p class="price-table__price">¥1200</p>
                <p class="price-table__price">¥1200</p>
              </div>
               <div class="price-table__price-row">
                <p class="price-table__price">¥7,000</p>
                <p class="price-table__price">¥7,000</p>
                <p class="price-table__price">¥4,000</p>
                <p class="price-table__price">¥10,000</p>
              </div>
               <div class="price-table__price-row">
                <p class="price-table__price">¥7,500</p>
                <p class="price-table__price">¥5,500</p>
                <p class="price-table__price">¥13,500</p>
                <p class="price-table__price">¥12,500</p>
              </div>
            </div>
          </div>
          <!-- 料金表内右 -->
          <div class="price-table__right">
            <!-- 料金名カテゴリ -->
            <div class="price-table__text-container">
              <div class="price-table__row">
                <p class="price-table__row-title price-table__row-title--facials-icon">facials</p>
                <p class="price-table__item">マリムーブフェイスワックス</p>
                <p class="price-table__item lh15-sp">パーツワックス<br class="sp-only">【鼻・おでこ・もみあげ】</p>
                <p class="price-table__item lh15-sp">パーツワックス<br class="sp-only">【鼻下（人中）・あご】</p>
              </div>
              <div class="price-table__row">
                <p class="price-table__row-title price-table__row-title--lash-icon">others</p>
                <p class="price-table__item">アイシャンプー</p>
                <p class="price-table__item lh15-sp">高濃度ケラチントリートメント&<br class="sp-only">アイパック</p>
                <p class="price-table__item">ハリウッドブロウリフト</p>
              </div>
              <div class="price-table__row">
                <p class="price-table__row-title price-table__row-title--lash-icon">removal</p>
                <p class="price-table__item">初回オフ</p>
                <p class="price-table__item">マツエク他店オフ</p>
                <p class="price-table__item">マツエク当店オフ</p>
                <p class="price-table__item">マスカラオフ</p>
              </div>
            </div>
            <div class=price-table__line></div>
            <!-- 料金カテゴリ -->
            <div class="price-table__price-container">
               <div class="price-table__price-row">
                <p class="price-table__price">¥8,800</p>
                <p class="price-table__price">¥1,500</p>
                <p class="price-table__price">¥1,000</p>
              </div>
               <div class="price-table__price-row">
                <p class="price-table__price">¥2,000</p>
                <p class="price-table__price">¥500</p>
                <p class="price-table__price">¥300</p>
              </div>
               <div class="price-table__price-row">
                <p class="price-table__price">¥0</p>
                <p class="price-table__price">¥1,500</p>
                <p class="price-table__price">¥1,000</p>
                <p class="price-table__price">¥500</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="introduction" class="introduction">
        <div class="introduction__title-wrapper">
          <h2 class="title introduction__title">スタッフ紹介</h2>
          <p class="subtitle introduction__subtitle">introduction</p>
        </div>
        <div class="introduction__contents">
          <div class="introduction__left">
            <figure class="introduction__image">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/owner-image@2x.png')); ?>" alt="店舗オーナー写真" />
            </figure>
            <p class="introduction__name-en">eri miratsu</p>
            <p class="introduction__name-jp">見良津 恵理</p>
          </div>
          <div class="introduction__right">
            <p class="introduction__text">
              美容がとても大好きでアイリストの仕事に就きました<br />
              人の印象は8割以上が“目”で決まる！<br class="sp-only">と言われているほど<br />
              お目元の分野はとても奥が深いので日々“かわいい”研究を重ねています<br />
              まつ毛、まゆ毛はもちろんのこと、<br />
              スキンケア〜メイクまでの資格も取得しております<br />
              安心してお任せ下さい
            </p>
            <p class="introduction__subtext">
              2011年からアイリストとして働き経歴12年、<br class="sp-only">有名店などで修行<br />
              数々の著名人を担当していた経験も<br />
              この経験を経て2018年11月1日に eyeroom mira を設立<br />
              第1回、第2回パリジェンヌ認定ベストサロン100に選ばれた
            </p>
          </div>
        </div>
      </section>
      <section id="recruitment" class="recruitment">
        <div class="recruitment__title-wrapper">
          <h2 class="title recruitment__title">採用</h2>
          <p class="subtitle recruitment__subtitle">recruitment</p>
          <!-- TODO: -->
          <p class="recruitment__text">
            一緒に働いてくださるスタッフを募集しています<br />
            <a href="https://work.salonboard.com/kr/slnH000599265/" class="recruitment__link">こちらから</a>お気軽にお問い合わせください
          </p>
        </div>
        <ul class="recruitment__image-container--pc">
          <li class="recruitment__image">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/slon-img1@2x.png')); ?>" alt="サロン内受付写真" />
          </li>
          <li class="recruitment__image">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/slon-img2@2x.png')); ?>" alt="サロン内施術室前写真" />
          </li>
          <li class="recruitment__image">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/slon-img3@2x.png')); ?>" alt="サロン内化粧室写真" />
          </li>
        </ul>
        <!-- TODO: -->
        <!-- <div class="recruitment__carousel-wrapper--sp">
          <div class="carousel recruitment__carousel">
            <div class="carousel__item recruitment__carousel-item">
                <img
                  class="carousel__image recruitment__carousel-image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/slon-img1.jpg')); ?>"
                  alt="サロン内受付写真"
                />
            </div>
            <div class="carousel__item recruitment__carousel-item">
                <img
                  class="carousel__image recruitment__carousel-image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/slon-img2@2x.png')); ?>"
                  alt="サロン内施術室前写真"
                />
            </div>
            <div class="carousel__item recruitment__carousel-item">
                <img
                  class="carousel__image recruitment__carousel-image"
                  src="<?php echo esc_url(get_theme_file_uri('./assets/slon-img3@2x.png')); ?>"
                  alt="サロン内化粧室写真"
                />
            </div>
          </div>
        </div> -->
        <figure class="recruitment__image-container--sp">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/slon-img1@2x.png')); ?>" alt="サロン内受付写真">
        </figure>
      </section>
      </main>

      <?php get_footer(); ?>
