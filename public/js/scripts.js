/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/navbar.js ***!
  \********************************/
$(document).ready(function () {
  /* ANIMATIOÀN OF LINES UNDER THE LINK HOME&CAT&EVENTS .... **/
  var PATH = window.location.pathname;
  /* disable the animation from /home URL */

  if (!PATH.startsWith('/home')) {
    $(".main-nav .UserNav .sub-nav-links .part1 #it1").mouseenter(function () {
      $(".main-nav .UserNav .sub-nav-links .part1 #it1 a .line").animate({
        width: '100%'
      });
    });
    $(".main-nav .UserNav .sub-nav-links .part1 #it1 ").mouseleave(function () {
      $(".main-nav .UserNav .sub-nav-links .part1 #it1 a .line").animate({
        width: '0%'
      });
    });
  }

  if (!PATH.startsWith('/news')) {
    $(".main-nav .UserNav .sub-nav-links .part1 #it2").hover(function () {
      if (!$(".main-nav .UserNav .sub-nav-links .part1 #it2").hasClass('running')) {
        $(".main-nav .UserNav .sub-nav-links .part1 #it2").addClass('running');
        $(".main-nav .UserNav .sub-nav-links .part1 #it2 a .line").animate({
          width: '100%'
        });
      } else {
        return true;
      }
    }, function () {
      $(".main-nav .UserNav .sub-nav-links .part1 #it2 a .line").animate({
        width: '0%'
      });
      $(".main-nav .UserNav .sub-nav-links .part1 #it2").removeClass('running');
    });
  }

  if (!PATH.startsWith('/events')) {
    $(".main-nav .UserNav .sub-nav-links .part1 #it3").hover(function () {
      if (!$(".main-nav .UserNav .sub-nav-links .part1 #it3").hasClass('running')) {
        $(".main-nav .UserNav .sub-nav-links .part1 #it3").addClass('running');
        $(".main-nav .UserNav .sub-nav-links .part1 #it3 a .line").animate({
          width: '100%'
        });
      } else {
        return true;
      }
    }, function () {
      $(".main-nav .UserNav .sub-nav-links .part1 #it3 a .line").animate({
        width: '0%'
      });
      $(".main-nav .UserNav .sub-nav-links .part1 #it3").removeClass('running');
    });
  }

  if (!PATH.startsWith('/rules')) {
    $(".main-nav .UserNav .sub-nav-links .part1 #it4").hover(function () {
      if (!$(".main-nav .UserNav .sub-nav-links .part1 #it4").hasClass('running')) {
        $(".main-nav .UserNav .sub-nav-links .part1 #it4").addClass('running');
        $(".main-nav .UserNav .sub-nav-links .part1 #it4 a .line").animate({
          width: '100%'
        });
      } else {
        return true;
      }
    }, function () {
      $(".main-nav .UserNav .sub-nav-links .part1 #it4 a .line").animate({
        width: '0%'
      });
      $(".main-nav .UserNav .sub-nav-links .part1 #it4").removeClass('running');
    });
  }

  if (!PATH.startsWith('/catalogue')) {
    $(".main-nav .UserNav .sub-nav-links .part1 #it5").hover(function () {
      if (!$(".main-nav .UserNav .sub-nav-links .part1 #it5").hasClass('running')) {
        $(".main-nav .UserNav .sub-nav-links .part1 #it5").addClass('running');
        $(".main-nav .UserNav .sub-nav-links .part1 #it5 a .line").animate({
          width: '100%'
        });
      } else {
        return true;
      }
    }, function () {
      $(".main-nav .UserNav .sub-nav-links .part1 #it5 a .line").animate({
        width: '0%'
      });
      $(".main-nav .UserNav .sub-nav-links .part1 #it5").removeClass('running');
    });
  }
  /* ANIMATIOÀN OF dOWNLOAD BUton .... **/


  $(".main-nav .UserNav .sub-nav-links .part2 .btn").hover(function () {
    $(".main-nav .UserNav .sub-nav-links .part2 .btn").css({
      'background': "linear-gradient(50deg, #be12c7 10.81%, rgba(230, 37, 240, 0.78) 100%)",
      'box-shadow': "inset 0px 0px 5px 0px #7d2382",
      'transition-duration': "1s"
    });
    $(".main-nav .UserNav .sub-nav-links .part2 .btn .txt").css({
      'line-height': "25px",
      'font-size': "26px",
      'transition-duration': "0.5s",
      'font-weight': 'lighter'
    });
  }, function () {
    $(".main-nav .UserNav .sub-nav-links .part2 .btn").css({
      'background': "linear-gradient(180deg, #E407F0 0%, #B242BB 100%)",
      'box-shadow': "none",
      'transition-duration': "0.5s"
    });
    $(".main-nav .UserNav .sub-nav-links .part2 .btn .txt").css({
      'line-height': "22px",
      'font-size': "20px",
      'transition-duration': "0.5s",
      'font-weight': 'bold'
    });
  });
  /* ANIMATIOÀN OF Setiigns  BUton in the Guest Nav .... **/

  $(".sub-navGuest .settings-space .ico").hover(function () {
    if (!$(".sub-navGuest .settings-space .ico img").hasClass('running')) {
      $(".sub-navGuest .settings-space .ico img").addClass('running');
      $(".sub-navGuest .settings-space .ico img").css({
        'animation': 'settings-rotate 2s ease-in-out'
      });
      setTimeout(function () {
        $(".sub-navGuest .settings-space .ico img").css({
          'animation': 'none'
        });
        $(".sub-navGuest .settings-space .ico img").removeClass('running');
      }, 2000);
    }
  });
  /* ANIMATIOÀN OF Notification BUton .... **/

  $(".main-nav .UserNav .sub-nav-notiprof .part1").hover(function () {
    if (!$(".main-nav .UserNav .sub-nav-notiprof .part1 img").hasClass('running')) {
      $(".main-nav .UserNav .sub-nav-notiprof .part1 img").addClass('running');
      $(".main-nav .UserNav .sub-nav-notiprof .part1 img").css({
        'animation': 'bell-anim 1s ease'
      });
      setTimeout(function () {
        $(".main-nav .UserNav .sub-nav-notiprof .part1 img").css({
          'animation': 'none'
        });
        $(".main-nav .UserNav .sub-nav-notiprof .part1 img").removeClass('running');
      }, 1100);
    }
  });
  /* ANIMATIOÀN OF Profile Button .... **/

  $(".main-nav .UserNav .sub-nav-notiprof .part2 img").hover(function () {
    if (!$('.main-nav .UserNav .sub-nav-notiprof .part2 img').hasClass('running')) {
      $(".main-nav .UserNav .sub-nav-notiprof .part2 img").css({
        //'animation' : 'profile-shine 1.2s ease',
        'box-shadow': '#b10dc9 0px 0px 2px 4px',
        'transition-duration': '1s'
      });
    }
  }, function () {
    if (!PATH.startsWith('/profile')) {
      $(".main-nav .UserNav .sub-nav-notiprof .part2 img").css({
        //   'animation' : 'none'
        'box-shadow': 'none',
        'transition-duration': '2s'
      });
    }
  });
});
/******* Script of showing the nav-bar in guest menu */

/***** script of opening the the mobile drop */

$('.ph-sub-navGuest').on('click', function () {
  $('.drop-mobile').css({
    'display': 'flex',
    'width': '100%',
    'height': '100%',
    'background': 'url(/assets/img/bg-mobile-drop.png)',
    'position': 'fixed',
    'bottom': '0',
    'visibility': 'visible',
    'justify-content': 'space-evenly'
  });
  $('.drop-mobile ul li').css({});
});
/******** script to open the drop user menu into the drop phone  */

$('.drop-mobile #BLC1 .part2 img').on('click', function () {
  if (!$('.drop-mobile #BLC1 .part2 img').hasClass('opened')) {
    $('.drop-mobile #BLC1 .part2 img').addClass('opened');
    $('.drop-mobile #BLC1').css({
      'height': '60%'
    });
    $('.drop-mobile #BLC1 .box').css({
      'display': 'flex',
      'visibility': 'visible'
    });
    $('.drop-mobile #BLC2').css({
      'display': 'none',
      'visibility': 'hidden'
    });
  } else {
    $('.drop-mobile #BLC1 .part2 img').removeClass('opened');
    $('.drop-mobile #BLC1').css({
      'height': '16%'
    });
    $('.drop-mobile #BLC1 .box').css({
      'display': 'none',
      'visibility': 'hidden'
    });
    $('.drop-mobile #BLC2').css({
      'display': 'flex',
      'visibility': 'visible'
    });
  }
});
/**** scripot of X in the drop down of the phone view */

$('.drop-mobile #BLC1 .part1').on('click', function () {
  $('.drop-mobile').css({
    'display': 'none',
    'visibility': 'hidden'
  });

  if ($('.drop-mobile #BLC1 .part2 img').hasClass('opened')) {
    $('.drop-mobile #BLC1 .part2 img').removeClass('opened');
    $('.drop-mobile #BLC1').css({
      'height': '16%'
    });
    $('.drop-mobile #BLC1 .box').css({
      'display': 'none',
      'visibility': 'hidden'
    });
    $('.drop-mobile #BLC2').css({
      'display': 'flex',
      'visibility': 'visible'
    });
  }
});
/***** script of opening the the pc drop */

$('.main-nav .UserNav .sub-nav-notiprof .part2 img').on('click', function () {
  if (!$('.drop-pc').hasClass('running')) {
    $('.drop-pc').css({
      'display': 'flex',
      'visibility': 'visible'
    });
    setTimeout(function () {
      $('.drop-pc').addClass('running');
    }, 200);
  } else {
    $('.drop-pc').css({
      'display': 'none',
      'visibility': 'hidden'
    });
    $('.drop-pc').removeClass('running');
  }
});
$('body').on('click', function () {
  if ($('.drop-pc').hasClass('running')) {
    $('.drop-pc').css({
      'display': 'none',
      'visibility': 'hidden'
    });
    $('.drop-pc').removeClass('running');
  }
});
/***** script of opening the the pc drop NOTIFICATION*/

$('.main-nav .UserNav .sub-nav-notiprof .part1').on('click', function () {
  if (!$('.drop-pc-notif').hasClass('running')) {
    $('.drop-pc-notif').css({
      'display': 'flex',
      'flex-direction': 'column',
      'visibility': 'visible'
    });
    setTimeout(function () {
      $('.drop-pc-notif').addClass('running');
    }, 200);
  } else {
    $('.drop-pc-notif').css({
      'display': 'none',
      'visibility': 'hidden'
    });
    $('.drop-pc-notif').removeClass('running');
  }
});
$('body').on('click', function () {
  if ($('.drop-pc-notif').hasClass('running')) {
    $('.drop-pc-notif').css({
      'display': 'none',
      'visibility': 'hidden'
    });
    $('.drop-pc-notif').removeClass('running');
  }
});
/******/ })()
;