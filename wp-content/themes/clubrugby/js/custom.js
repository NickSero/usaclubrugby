jQuery(function($){

  $(document).ready(function(){
    
    removeComma($('#about .no-bullet > li:last-child > span'));

    if($('.home')){

      // MASONRY HOME NEWS FEED
      var $container = $('#container');
      $container.masonry({
        itemSelector: '.brick'
      });

    }

  });


  $('#mobile-menu-button').click(function(){
    $(this).addClass('active');
  });
  $('.exit-off-canvas').click(function(){
    $('#mobile-menu-button').removeClass('active');
  });

  $('#mobile-site-navigation #menu-item-70').remove();

  $('ul#site-menu ul.dropdown').css({'width':$('.top-bar-section').width()+'px'});
  $('.dropdown').hover(function(){
    $(this).toggleClass('open');
    $(this).siblings('a').toggleClass('hover');
  });

  $('.menu-item-divider, .menu-item-divider > a').css({'height':$('.before-divider').height()});

  $('.sub-nav > dd').click(function(){
    $(this).toggleClass('active');
    $(this).siblings().removeClass('active');
  });

  $('#news-menu').width($('#content').width());

  $('.news > a').attr('data-dropdown','news-drop');
  $('.news > .dropdown').attr('id','news-drop');

  $('#about li div.text-center').css({'width':$(this).siblings('strong').innerWidth()+'px'});


/*
  $('.has-dropdown').click(function(){
    $('div.meganav.f-dropdown.content.mega').toggleClass('open f-open-dropdown');
  });
  $('.has-dropdown').focusout(function(){
    $('div.meganav.f-dropdown.content.mega').removeClass('open f-open-dropdown');
  });
  !$('.has-dropdown').click(function(){
    $('.hover').removeClass('hover');
  });
*/
  // UTILITY FUNCTIONS
  function removeComma(el){
    var str = $(el).text();
    str = str.slice(0,str.length-1);
    console.log(str);
    $(el).text(str);
  }

  $(window).resize(function(){
    if($(window).width() < 1440) {
      
      // Home Page News Tweaks
      if($('#site-menu > .menu-item > a').innerWidth() >= 83){
        $('#site-menu > .menu-item > a').css('font-size','0.529999rem');
      }
      if($('.home h4.news-item-metadata').innerWidth() >= 270){
        $('.home h4.news-item-metadata').css('font-size','1.25rem');
      }
   
    } else {
      // smaller
      
    }
  }).resize();

// FITTEXT FOR HEADERS
  $('h1').fitText();
  
});