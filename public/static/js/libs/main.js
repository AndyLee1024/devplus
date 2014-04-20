$(function(){
  $('#menu > ul > li > a').hover(function(){
    var colorClass = 'nav-' + $(this).data('color');
    // console.log(colorClass);
    $('.wrap > header').attr('class',colorClass);
  });

  $('#menu > ul > li').hover(function(){
    // console.log($(this).find('.sub-menu'));
    $(this).find('.sub-menu').addClass('sub-menu-show');
  }, function(){
    $(this).find('.sub-menu').removeClass('sub-menu-show');
  });

  $('#menu > ul > li > a').addClass('animated fadeInDown');

  
});