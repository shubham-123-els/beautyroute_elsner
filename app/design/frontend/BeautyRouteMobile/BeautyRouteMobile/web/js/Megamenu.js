require(['jquery'], function($) {
    
    $('nav.navigation ul  li.megamenu.level1 > a').click(function(e){
        e.preventDefault();
        // e.stopPropagation();
        e.stopImmediatePropagation();
        $(this).parents().find('.columns-group').find('ul').removeClass('active');
        $(this).parents().find('.columns-group').find('a').removeClass('active');
        $(this).toggleClass('active').siblings('ul').toggleClass('active');
    })
    
    
    $('.megamenu.level2 > a').click(function(e){
      e.preventDefault();
      // e.stopPropagation();
      e.stopImmediatePropagation();
      $(this).parents().siblings().find('ul').removeClass('active').hide(250);
      $(this).parents().siblings().find('a').removeClass('active');
      $(this).toggleClass('active').siblings('ul').toggleClass('active').fadeToggle(250);
    });

    $('.megamenu.level0 > a').click(function(e){
      e.preventDefault();
      e.stopImmediatePropagation();
      $(this).parents().toggleClass('active-lovelo').siblings('ul').toggleClass('active-lovelo');
    });

});