jQuery(function ($) {
  $(".hamburger").click(function () {
    // TODO: IOSだと画面がおかしくなっているので後ほど検証
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
      bodyFixedOn();
    } else {
      bodyFixedOff();
    }
    $(".nav").toggleClass("active");
    $("body").toggleClass("active");
    $(".overlay").toggleClass("active");
  });

  $(".nav__link, .header__logo-link").click(function () {
    $(".hamburger").removeClass("active");
    $(".nav").removeClass("active");
    $("body").removeClass("active");
    $(".overlay").removeClass("active");
    bodyFixedOff();
  });

  //モーダルを開いた時のスクロール位置を保持
  let scrollPosition;
  //iOS（iPadOSを含む）かどうかのUA判定
  const ua = window.navigator.userAgent.toLowerCase();
  const isiOS =
    ua.indexOf("iphone") > -1 ||
    ua.indexOf("ipad") > -1 ||
    (ua.indexOf("macintosh") > -1 && "ontouchend" in document);

  //bodyのスクロール固定
  function bodyFixedOn() {
    // debugger;
    if (isiOS) {
      // iOSの場合
      scrollPosition = $(window).scrollTop();
      $("body").css("position", "fixed");
      $("body").css("top", "-" + scrollPosition + "px");
    } else {
      // それ以外
      $("body").css("overflow", "hidden");
    }
  }

  //bodyのスクロール固定を解除
  function bodyFixedOff() {
    // debugger;
    if (isiOS) {
      // iOSの場合
      $("body").css("position", "");
      $("body").css("top", "");
      $(window).scrollTop(scrollPosition);
    } else {
      // それ以外
      $("body").css("overflow", "");
    }
  }
});
