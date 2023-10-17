export default function slider() {
  var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
  if (windowwidth > 768) {

    //PC用の画像
    var responsiveImage = [
      { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/mainview_01.jpg' },
      { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/mainview_02.jpg' },
      { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/mainview_03.jpg' },
      { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/mainview_04.jpg'},
    ];
  } else {
    //タブレットサイズ（768px）以下用の画像
    var responsiveImage = [
    { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/sp-mainview_01.jpg' },
    { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/sp-mainview_02.jpg' },
    { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/sp-mainview_03.jpg' },
    { src: '//localhost:3000/wp-content/themes/my_theme/images/slide/sp-mainview_04.jpg'},
    ];
  }

  //Vegas全体の設定
  jQuery(function ($) {
    $('#js-vegas').vegas({

    /* option
    https://tetsu029.web.fc2.com/vegas.html*/
      overlay: false,
      transition: 'blur2',
      transitionDuration: 2000,
      delay: 5000,
      animationDuration: 20000,
      slides: responsiveImage,
      cover: true,
      align: top,
    });
  });
};
