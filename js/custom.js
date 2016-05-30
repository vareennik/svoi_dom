(function($) {
"use strict";

// Tab Menu
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

// Accordion Toggle Items
    var iconOpen = 'fa fa-arrow-right',
        iconClose = 'fa fa-arrow-down';
        $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function (e) {
            var $target = $(e.target)
            $target.siblings('.accordion-heading')
            .find('em').toggleClass(iconOpen + ' ' + iconClose);
                if(e.type == 'show')
                    $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
            if(e.type == 'hide')
        $(this).find('.accordion-toggle').not($target).removeClass('active');
    }); 

// DM Top
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 1) {
            jQuery('.dmtop').css({bottom:"25px"});
        } else {
            jQuery('.dmtop').css({bottom:"-100px"});
        }
    });
    jQuery('.dmtop').click(function(){
        jQuery('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

// DM Fixed
    (function ($, window, delay) {
        var theTimer = 0;
        var theElement = null;
        var theLastPosition = {x:0,y:0};
        $('[data-toggle]')
            .closest('li')
            .on('mouseenter', function (inEvent) {
            if (theElement) theElement.removeClass('open');
            window.clearTimeout(theTimer);
            theElement = $(this);
            theTimer = window.setTimeout(function () {
        theElement.addClass('open');
    }, delay);
  })
    .on('mousemove', function (inEvent) {
        if(Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 || 
           Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
        {
            theLastPosition.x = inEvent.ScreenX;
            theLastPosition.y = inEvent.ScreenY;
            return;
        }
        
    if (theElement.hasClass('open')) return;
    window.clearTimeout(theTimer);
    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mouseleave', function (inEvent) {
    window.clearTimeout(theTimer);
    theElement = $(this);
    theTimer = window.setTimeout(function () {
      theElement.removeClass('open');
    }, delay);
  });
})(jQuery, window, 200); 

// DM Affix
    $(".header").affix({
        offset: {
            top: 200, 
            bottom: function () {
            return (this.bottom = $('.copyrights').outerHeight(true))
            }
        }
    })

// DM Lightbox
    jQuery('a[data-gal]').each(function() {
        jQuery(this).attr('rel', jQuery(this).data('gal')); });     
    jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});

})(jQuery);




    

