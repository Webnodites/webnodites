$(document).ready(function(){
    $('.toggle').click(function(){
        $('.sidebar-contact').toggleClass('active')
        $('.toggle').toggleClass('active')

    })
})

$(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
      

    })
})


$(document).ready(function(){
    //fadeinSections();
    // $('.portfoliobox').waypoint(function(direction){
    //     $('.portfoliobox').addClass('visible')

    // },{
    // 	offset:'50%'
    // });


    function fadeinSections(verticalSpace) {
      var pageTop = jQuery(document).scrollTop();
      window.pageBottom = pageTop + jQuery(window).height();
      var tags = jQuery(".fadein");

      for (var i = 0; i < tags.length; i++) {
          var tag = tags[i];
        
          /* If the object is visible in the window by the specified amount of pixels, fade it it */
          if (jQuery(tag).offset().top < window.pageBottom - verticalSpace) {
              jQuery(tag).addClass("visible");
          } else {
              jQuery(tag).removeClass("visible");
          }
      }
      
      
        var tags = jQuery(".fadeinright");
        for (var i = 0; i < tags.length; i++) {
          var tag = tags[i];
        
          /* If the object is visible in the window by the specified amount of pixels, fade it it */
          if (jQuery(tag).offset().top < window.pageBottom - verticalSpace) {
              jQuery(tag).addClass("visible");
          } else {
              jQuery(tag).removeClass("visible");
          }
      }
      
      
        var tags = jQuery(".fadeinleft");
        for (var i = 0; i < tags.length; i++) {
          var tag = tags[i];
        
          /* If the object is visible in the window by the specified amount of pixels, fade it it */
          if (jQuery(tag).offset().top < window.pageBottom - verticalSpace) {
              jQuery(tag).addClass("visible");
          } else {
              jQuery(tag).removeClass("visible");
          }
      }
      
      
        var tags = jQuery(".fadeintop");
        for (var i = 0; i < tags.length; i++) {
          var tag = tags[i];
        
          /* If the object is visible in the window by the specified amount of pixels, fade it it */
          if (jQuery(tag).offset().top < window.pageBottom - verticalSpace) {
              jQuery(tag).addClass("visible");
          } else {
              jQuery(tag).removeClass("visible");
          }
      }
      
      
       var tags = jQuery(".fadeinbottom");
        for (var i = 0; i < tags.length; i++) {
          var tag = tags[i];
        
          /* If the object is visible in the window by the specified amount of pixels, fade it it */
          if (jQuery(tag).offset().top < window.pageBottom - verticalSpace) {
              jQuery(tag).addClass("visible");
          } else {
              jQuery(tag).removeClass("visible");
          }
      }  

      var tags = jQuery(".fadein-full");
      for (var i = 0; i < tags.length; i++) {
          var tag = tags[i];
        
          /* If the object is completely visible in the window, fade it it */
          var bottom_of_object = jQuery(tag).offset().top + jQuery(tag).outerHeight();
          if( window.pageBottom > bottom_of_object ){
              jQuery(tag).addClass("visible");
          } else {
              jQuery(tag).removeClass("visible");
          }
      }
    }

    jQuery(document).ready(function(e) {
        fadeinSections(50);
    });
    jQuery(document).on("scroll", function () {
        fadeinSections(150);
    });

    // stick to top show/hide
    function menuShowHide() {
        if (jQuery(window).width() >= 1024) {
            var lastScrollTop = 0;
            jQuery(window).bind("scroll", function () {
                st = jQuery(this).scrollTop();
                if (st < lastScrollTop) {
                    jQuery('.stickToTop').css('opacity','1');
                } else {
                    jQuery('.stickToTop').css('opacity','0');
                }
                lastScrollTop = st;
            });
        } else {
            jQuery(window).off('scroll');
            jQuery('.stickToTop').css('opacity','1');
        }
    }
});