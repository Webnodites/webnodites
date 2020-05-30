
$(document).ready(function(){
        $('.toggle').click(function(){
          $('.sidebar-contact').toggleClass('active')
          $('.toggle').toggleClass('active')

    });

          $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
      

    });

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
          var tags = jQuery(".line");
            for (var i = 0; i < tags.length; i++) {
              var tag = tags[i];
            
              /* If the object is visible in the window by the specified amount of pixels, fade it it */
              if (jQuery(tag).offset().top < window.pageBottom - verticalSpace) {
                  jQuery(tag).addClass("visible");
              } else {
                  
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
        }

        jQuery(document).ready(function(e) {
            fadeinSections(50);
        });

        jQuery(document).on("scroll", function () {
            fadeinSections(150);
        });
}); 


   