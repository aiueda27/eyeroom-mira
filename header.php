<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- 自動リンクを無効にする -->
    <meta name="format-detection" content="telephone=no" />
    <!-- <title>eyeroom mira 一人ひとりが羨望の的になる大人上品な華やかさを</title> -->
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- <link href="https://fonts.cdnfonts.com/css/rosemarine" rel="stylesheet" /> -->
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <?php if(is_front_page()){ ;?>
        <h1 id="header__title" class="header__title">
        一人ひとりが羨望の的になる<br />大人上品な華やかさを
        </h1>
        <?php } ;?>
        <div class="header__menu">
        <!-- <a href="#" class="header__logo-link"> -->
        <a href="<?php echo home_url( '/' ); ?>" class="header__logo-link">
            <figure class="header__logo">
            <!-- <img
                src="./assets/eyeroom-mira-logo-white.svg"
                alt="アイルームミラのロゴ"
            /> -->
            <img
                src="<?php echo esc_url(get_theme_file_uri('./assets/eyeroom-mira-logo-white.svg')); ?>"
                alt="アイルームミラのロゴ"
            />
            </figure>
        </a>
        <a
            href="https://instagram.com/eyeroom_mira?igshid=YmMyMTA2M2Y="
            target="_blank"
            class="header__insta-link"
            ><figure class="header__instagram">
            <!-- <img
                src="./assets/instaicon.svg"
                alt="インスタグラムアイコン"
            /> -->
            <img
                src="<?php echo esc_url(get_theme_file_uri('./assets/instaicon.svg')); ?>"
                alt="インスタグラムアイコン"
            />
            </figure
        ></a>
        <button
            class="hamburger header__hamburger"
            type="button"
            aria-lebel="メニュー"
        >
            <span class="hamburger__parts"></span>
            <span class="hamburger__parts"></span>
            <span class="hamburger__parts"></span>
        </button>
        </div>
        <div class="nav">
        <nav class="nav-container" aria-lebel="サイト内メニュー">
            <div class="nav__image-wrapper--pc">
            <figure class="nav__image">
                <img src="<?php echo esc_url(get_theme_file_uri('./assets/nav-open.jpg')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('./assets/nav-open@2x.jpg')); ?> 1674w, <?php echo esc_url(get_theme_file_uri('./assets/nav-open@3x.jpg')); ?> 2511w" sizes="58vw" alt="サロン内受付写真" />
            </figure>
            </div>
            <div class="nav__contents">
            <ul class="nav__list">
                <!-- TODO:LInk -->
                <li><a href="<?php echo home_url( '/#menu' ); ?>" class="nav__link">施術メニュー</a></li>
                <li><a href="<?php echo home_url( '/#prices' ); ?>" class="nav__link">料金表</a></li>
                <li>
                <a href="<?php echo home_url( '/#introduction' ); ?>" class="nav__link">スタッフ紹介</a>
                </li>
                <li><a href="<?php echo home_url( '/#recruitment' ); ?>" class="nav__link">採用</a></li>
                <li><a href="<?php echo home_url( '/#footer' ); ?>" class="nav__link">サロン情報</a></li>
                <li class="sp-tab-only">
                <a
                    href="https://instagram.com/eyeroom_mira?igshid=YmMyMTA2M2Y="
                    target="_blank"
                    class="nav__link"
                >
                    <figure class="nav__insta-logo">
                    <!-- <img src="./assets/instaicon.svg" alt="" /> -->
                    <img src="<?php echo esc_url(get_theme_file_uri('./assets/instaicon.svg')); ?>" alt="" />
                    </figure>
                </a>
                </li>
            </ul>
            <!-- <button
                onclick="location.href='./booking.html'"
                class="book nav__book"
            > -->
            <!-- TODO -->
            <button
                onclick="location.href='<?php echo esc_url(home_url('/booking/')); ?>'"
                class="book nav__book"
            >
                ホットペッパーから予約する
            </button>
            </div>
        </nav>
        </div>
    </header>