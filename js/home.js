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


var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
  this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
  this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
  delta = this.period;
  this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
  this.isDeleting = false;
  this.loopNum++;
  delta = 500;
  }

  setTimeout(function() {
  that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('typewrite');
  for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
};





