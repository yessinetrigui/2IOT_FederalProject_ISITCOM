/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*******************************!*\
  !*** ./resources/js/rules.js ***!
  \*******************************/
function resetAll() {
  $('#R1').removeClass('runnig');
  $('#R2').removeClass('runnig');
  $('#R3').removeClass('runnig');
  $('#R4').removeClass('runnig');
  $('#R5').removeClass('runnig');
  $('#R6').removeClass('runnig');
  $('#R7').removeClass('runnig');
  $('.rules .rcontent').css({
    height: '0px',
    'overflow': 'hiden',
    'animation': 'none'
  });
  $('.rules').css({
    height: '0%'
  });
  $('.rules .rcontent .txt').css({
    'animation': 'none'
  });
}

$(document).ready(function () {
  $('#R1 .rtitle ').on('click', function () {
    if (!$('#R1').hasClass('runnig')) {
      resetAll();
      $('#R1').addClass('runnig');
      $('#R1 .rcontent').css({
        height: 'auto',
        'overflow': 'auto',
        'animation': 'opa 1s'
      });
      $('.rules .rcontent .txt').css({
        'animation': 'opa 2.6s'
      });
      $('.rules').css({
        height: 'auto'
      });
    } else {
      $('#R1').removeClass('runnig');
      $('#R1 .rcontent').css({
        height: '0px',
        'overflow': 'hiden',
        'animation': 'none'
      });
      $('.rules').css({
        height: '0%'
      });
    }
  });
  $('#R2 .rtitle ').on('click', function () {
    if (!$('#R2').hasClass('runnig')) {
      resetAll();
      $('#R2').addClass('runnig');
      $('#R2 .rcontent').css({
        height: 'auto',
        'overflow': 'auto',
        'animation': 'opa 1s'
      });
      $('.rules .rcontent .txt').css({
        'animation': 'opa 2.6s'
      });
      $('.rules').css({
        height: 'auto'
      });
    } else {
      $('#R2').removeClass('runnig');
      $('#R2 .rcontent').css({
        height: '0px',
        'overflow': 'hiden',
        'animation': 'none'
      });
      $('.rules').css({
        height: '0%'
      });
    }
  });
  $('#R3 .rtitle ').on('click', function () {
    if (!$('#R3').hasClass('runnig')) {
      resetAll();
      $('#R3').addClass('runnig');
      $('#R3 .rcontent').css({
        height: 'auto',
        'overflow': 'auto',
        'animation': 'opa 1s'
      });
      $('.rules .rcontent .txt').css({
        'animation': 'opa 2.6s'
      });
      $('.rules').css({
        height: 'auto'
      });
    } else {
      $('#R3').removeClass('runnig');
      $('#R3 .rcontent').css({
        height: '0px',
        'overflow': 'hiden',
        'animation': 'none'
      });
      $('.rules').css({
        height: '0%'
      });
    }
  });
  $('#R4 .rtitle ').on('click', function () {
    if (!$('#R4').hasClass('runnig')) {
      resetAll();
      $('#R4').addClass('runnig');
      $('#R4 .rcontent').css({
        height: 'auto',
        'overflow': 'auto',
        'animation': 'opa 1s'
      });
      $('.rules .rcontent .txt').css({
        'animation': 'opa 2.6s'
      });
      $('.rules').css({
        height: 'auto'
      });
    } else {
      $('#R4').removeClass('runnig');
      $('#R4 .rcontent').css({
        height: '0px',
        'overflow': 'hiden',
        'animation': 'none'
      });
      $('.rules').css({
        height: '0%'
      });
    }
  });
  $('#R5 .rtitle ').on('click', function () {
    if (!$('#R5').hasClass('runnig')) {
      resetAll();
      $('#R5').addClass('runnig');
      $('#R5 .rcontent').css({
        height: 'auto',
        'overflow': 'auto',
        'animation': 'opa 1s'
      });
      $('.rules .rcontent .txt').css({
        'animation': 'opa 2.6s'
      });
      $('.rules').css({
        height: 'auto'
      });
    } else {
      $('#R5').removeClass('runnig');
      $('#R5 .rcontent').css({
        height: '0px',
        'overflow': 'hiden',
        'animation': 'none'
      });
      $('.rules').css({
        height: '0%'
      });
    }
  });
  $('#R6 .rtitle ').on('click', function () {
    if (!$('#R6').hasClass('runnig')) {
      resetAll();
      $('#R6').addClass('runnig');
      $('#R6 .rcontent').css({
        height: 'auto',
        'overflow': 'auto',
        'animation': 'opa 1s'
      });
      $('.rules .rcontent .txt').css({
        'animation': 'opa 2.6s'
      });
      $('.rules').css({
        height: 'auto'
      });
    } else {
      $('#R6').removeClass('runnig');
      $('#R6 .rcontent').css({
        height: '0px',
        'overflow': 'hiden',
        'animation': 'none'
      });
      $('.rules').css({
        height: '0%'
      });
    }
  });
  $('#R7 .rtitle ').on('click', function () {
    if (!$('#R7').hasClass('runnig')) {
      resetAll();
      $('#R7').addClass('runnig');
      $('#R7 .rcontent').css({
        height: 'auto',
        'overflow': 'auto',
        'animation': 'opa 1s'
      });
      $('.rules .rcontent .txt').css({
        'animation': 'opa 2.6s'
      });
      $('.rules').css({
        height: 'auto'
      });
    } else {
      $('#R7').removeClass('runnig');
      $('#R7 .rcontent').css({
        height: '0px',
        'overflow': 'hiden',
        'animation': 'none'
      });
      $('.rules').css({
        height: '0%'
      });
    }
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!***********************************!*\
  !*** ./resources/js/catalogue.js ***!
  \***********************************/
$(document).ready(function () {
  $('body').on('click', function () {
    if ($('#opt1').hasClass('running')) {
      $('#opt1').removeClass('running');
      $('#AVC1 .opt-choice').css({
        'display': 'none'
      });
    }

    if ($('#opt2').hasClass('running')) {
      $('#opt2').removeClass('running');
      $('#AVC2 .opt-choice').css({
        'display': 'none'
      });
    }

    if ($('#opt3').hasClass('running')) {
      $('#opt3').removeClass('running');
      $('#AVC3 .opt-choice').css({
        'display': 'none'
      });
    }
  });
  $('#opt1').on('click', function () {
    if (!$('#opt1').hasClass('running')) {
      //  $('#opt1').addClass('running')
      $('#AVC1 .opt-choice').css({
        'display': 'flex'
      });
      setTimeout(function () {
        $('#opt1').addClass('running');
      }, 200);
    } else {
      $('#opt1').removeClass('running');
      $('#AVC1 .opt-choice').css({
        'display': 'none'
      });
    }
  });
  $('#opt2').on('click', function () {
    if (!$('#opt2').hasClass('running')) {
      //  $('#opt1').addClass('running')
      $('#AVC2 .opt-choice').css({
        'display': 'flex'
      });
      setTimeout(function () {
        $('#opt2').addClass('running');
      }, 200);
    } else {
      $('#opt2').removeClass('running');
      $('#AVC2 .opt-choice').css({
        'display': 'none'
      });
    }
  });
  $('#opt3').on('click', function () {
    if (!$('#opt3').hasClass('running')) {
      //  $('#opt1').addClass('running')
      $('#AVC3 .opt-choice').css({
        'display': 'flex'
      });
      setTimeout(function () {
        $('#opt3').addClass('running');
      }, 200);
    } else {
      $('#opt3').removeClass('running');
      $('#AVC3 .opt-choice').css({
        'display': 'none'
      });
    }
  });
});
})();

/******/ })()
;