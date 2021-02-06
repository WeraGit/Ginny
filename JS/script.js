$(window).on('load', function () {
  if ($('#preloader').length) {
  $('#preloader').delay(100).fadeOut('slow', function () {
  $(this).remove();
  });
  }
  });


$(document).ready(() => {
  //flags:
  // const $polishFlagIcon = $('.polish');
  // const $englishFlagIcon = $('.english');
  // $polishFlagIcon.on('click', () => {
  //     this.window.location='indexPL.html';
  // })
  // $englishFlagIcon.on('click', () => {
  //     this.window.location='index.html';
  // })

  // $('#vid1').on('click', () => {
  //     this.window.location='./portfolio/work.html';
  // });

  // $('#vid2').on('click', () => {
  //     this.window.location='about.html';
  // });

  // $('#vid3').on('click', () => {
  //     this.window.location='contact.html';
  // });

  // $('.landscapes').hover( () => {
  //   $('.landscapeFilm').css("display", "inline-block");
  // }
  // )
   
})

