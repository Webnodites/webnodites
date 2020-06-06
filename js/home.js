 $(document).ready(function(){
      $('.toggle').click(function(){
          $('.sidebar-contact').toggleClass('active')
              $('.toggle').toggleClass('active')
          });

          $('.menu-toggle').click(function(){
            $('nav').toggleClass('active')
          });
      
        fadeinSections();

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
            fadeinSections(100);
        });

        const slides = document.querySelector(".slider").children;
        const indicatorImages = document.querySelector(".slider-indicator").children;

        for (let i=0; i<indicatorImages.length; i++) {
          indicatorImages[i].addEventListener("click",function(){
            
            for (let j = 0; j < indicatorImages.length; j++) {
              indicatorImages[j].classList.remove("active");

            }

            this.classList.add("active");

            const id = this.getAttribute("data-id");
            for (let j = 0; j < slides.length; j++) {
              slides[j].classList.remove("active");

            }
            slides[id].classList.add("active");
          })
        }
});    