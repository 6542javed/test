$(window).scroll(function(){
  parallex();
})

function parallex(){
var wScroll = $(window).scrollTop();
$('.index-home').css('background-position', 'center '+(-wScroll * 0.1)+'px');
$('.text').css('top', (-wScroll*0.6)+'px');
}
