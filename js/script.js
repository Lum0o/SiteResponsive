$(document).ready(function(){
  $('.dropdown-trigger').dropdown();
  $('.parallax').parallax();
  $('.collapsible').collapsible();
  $('.modal').modal();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  $("#secret").click(function() {
    var elem1 = $("#alderiate");
    var audio = new Audio('audio/alderiate-uwu.m4a');

    elem1.show();

    elem1.animate({top: '-=200px'}, 4000);
    elem1.animate({top: '-=290px'}, 300);
    elem1.animate({left: '+=1500px'}, 1500);
    audio.play();
    elem1.animate({top: '+=490px'}, 0);
    elem1.animate({left: '-=1500px'}, 0);
  });
});
