<?php
$con=mysqli_connect("localhost","root","","webnodites");
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Webnodites mission is to provide you the best services like web design and development (which are user friendly, fully responsive, optimized), search engine optimization (SEO), Digital Marketing, Email Marketing, Content Marketing, Graphic Design. And many other dynamic features for websites which helps to increase traffic. Easy, Fast, Customisable & 24/7 hrs Support.">
    <meta name="keywords" content="webnodites, webnodite, web developer, graphic design, website creator,  best web developer, best web solution, web design, best web solutions, best website maker, best website maker in jaipur, best website maker in India, best web developer in jaipur, best web developer in bhilwara, best website for ecommerce, best website for small business, top 10 web developers, web developers, web developers in jaipur, web developer in bhilwara, best website for a wedding, digital marketing, ecommerce website, website builder,website design services, responsive web design, web development company, software development company, website development company, website creator, website templates, how to make a website">
    <link rel="shortcut icon" href="images/fav1.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    
    <script src="https://use.fontawesome.com/1c4a01632f.js"></script>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
   <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-4 col-lg-2">
            <div class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">
              <img src="images/logo/logo.png" alt="logo"></a></div>
          </div>

          <div class="col-12 col-md-8 col-lg-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link nrl">Home</a></li>
                <li><a href="who_we_are.html" class="nav-link nrl">Who We Are</a></li>
                <li><a href="services.html" class="nav-link nrl">Services</a></li>
                <li><a href="portfolio.html" class="nav-link nrl active">Portfolio</a></li>
                <li><a href="blog.html" class="nav-link nrl">Blogs</a></li>
                <li><a href="contact.html" class="nav-link cnt">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-md-8 col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
    <section class="site-blocks-cover overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">

            <div class="row all">
              <div class="col-lg-12">

                <h1>Portfolio</h1>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </section> 


    <section class="site-section" id="gallery-section">
      <div class="container">
         <div class="col-12 mb-3">
            <h3 class="text-head">Our Recent Work</h3>
        </div>
      
        <div class="row">
          
            <div class="col-12 col-md-6 gal-item d-block simg"  >
              <div style="background: url(images/recent_work/tes.jpg);background-repeat: no-repeat;background-size: contain;" class="ssubimg"></div>
              <a href="https://www.tesventures.in/" target="_blank" class="visit-btn1">Visit</a>
            </div>

            <div class="col-12 col-md-6 gal-item d-block simg">
              <div style="background: url(images/recent_work/rvs.jpg);background-repeat: no-repeat;background-size: contain;" class="ssubimg"></div>
             <a href="https://ranavikramsingh.com/" target="_blank" class="visit-btn1">Visit</a>
           </div>
          
            <div class="col-12 col-md-6 gal-item d-block simg" >
              <div style="background: url(images/recent_work/a1.jpg);background-repeat: no-repeat;background-size: contain;" class="ssubimg"></div>
             <a href="https://www.a1photography.in/" target="_blank" class="visit-btn1">Visit</a>
           </div>

            <div class="col-12 col-md-6 gal-item d-block simg"  >
              <div style="background: url(images/recent_work/educatonist.jpg);background-repeat: no-repeat;background-size: contain;" class="ssubimg"></div>
             <a href="https://www.theeducationist.in/" target="_blank" class="visit-btn1">Visit</a>
           </div>
          
           
         </div>
        </div>
    </section>
    
    <div  class="main-head">
      <h2>All Categories</h2>
    </div>

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">Education</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-gym no-owl-nav">
           
              <div class="Rectangle">
                <img src="images/portfolio/education/brain_masters.jpg" alt="Brain Masters">
                <div>
                  <h2 class="Name-of-Project">Brain Masters</h2>
                  <a href="https://webnodites.github.io/education1/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/education/edualpha.jpg" alt="Edu Alpha">
                <div>
                  <h2 class="Name-of-Project">Edu Alpha</h2>
                  <a href="https://webnodites.github.io/education2/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/education/education_hub.jpg" alt="Education Hub">
                <div>
                  <h2 class="Name-of-Project">Education Hub</h2>
                  <a href="https://webnodites.github.io/eduaction3/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/education/exam_snap.jpg" alt="Exam Snap">
                <div>
                  <h2 class="Name-of-Project">Exam Snap</h2>
                  <a href="https://webnodites.github.io/education4/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/education/eduaction.jpg" alt="Education">
                <div>
                  <h2 class="Name-of-Project">Education</h2>
                  <a href="https://webnodites.github.io/education5/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <!--<div class=" Rectangle1">
                <img src="images/portfolio/Education_hub.png" >
                <div>
                  <h2 class="Name-of-Project">Name Of Project</h2>
                  <a href="" class="live-btn">Live Preview</a>
                </div>
              </div>-->

            </div>

        </div>
      </div>
    </section>

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">Personal Portfolio</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-event no-owl-nav" >
           
              <div class="Rectangle">
                <img src="images/portfolio/personal_portfolio/alex_martin.jpg" alt="Alex Martin">
                <div>
                  <h2 class="Name-of-Project">Alex Martin</h2>
                 <a href="https://webnodites.github.io/portfolio1/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/personal_portfolio/company.jpg" alt="Company">
                <div>
                  <h2 class="Name-of-Project">Company</h2>
                  <a href="https://webnodites.github.io/portfolio2/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/personal_portfolio/Phineas.jpg" alt="Phineas">
                <div>
                  <h2 class="Name-of-Project">Phineas</h2>
                  <a href="https://webnodites.github.io/portfolio3/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/personal_portfolio/Ninja.jpg" alt="Ninja">
                <div>
                  <h2 class="Name-of-Project">Ninja</h2>
                  <a href="https://webnodites.github.io/portfolio4/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/personal_portfolio/umbrella_corp.jpg" alt="Umbrella Corporation">
                <div>
                  <h2 class="Name-of-Project">Umbrella Corporation</h2>
                  <a href="https://webnodites.github.io/portfolio5/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

            </div>

        </div>
      </div>
    </section>

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">Events</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-event no-owl-nav" >
           
              <div class="Rectangle">
                <img src="images/portfolio/event/e_confrence.jpg" alt="E-Conference">
                <div>
                  <h2 class="Name-of-Project">E-Conference</h2>
                 <a href="https://webnodites.github.io/Event1/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/event/thebigevent.jpg" alt="The Big Event">
                <div>
                  <h2 class="Name-of-Project">The Big Event</h2>
                  <a href="https://webnodites.github.io/Event2/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/event/band.jpg" alt="Band">
                <div>
                  <h2 class="Name-of-Project">Band</h2>
                  <a href="https://webnodites.github.io/Event3/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/event/event.jpg" alt="Event">
                <div>
                  <h2 class="Name-of-Project">Event</h2>
                  <a href="https://webnodites.github.io/Event4/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/event/djs.jpg" alt="DJs">
                <div>
                  <h2 class="Name-of-Project">DJs</h2>
                  <a href="https://webnodites.github.io/Event5/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

            </div>

        </div>
      </div>
    </section>
   

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">e-Commerce</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-wed no-owl-nav">
           
              <div class="Rectangle">
                <img src="images/portfolio/ecommerce/fashion_show.jpg" alt="Fashion Store" >
                <div>
                  <h2 class="Name-of-Project">Fashion Store</h2>
                  <a href="https://webnodites.github.io/ecommerce1/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>
              
              <div class="Rectangle">
                <img src="images/portfolio/ecommerce/food_baazar.jpg" alt="Food Bazaar">
                <div>
                  <h2 class="Name-of-Project">Food Bazaar</h2>
                  <a href="https://webnodites.github.io/ecommerce2/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/ecommerce/liquior_store.jpg" alt="Liquior Store">
                <div>
                  <h2 class="Name-of-Project">Liquior Store</h2>
                  <a href="https://webnodites.github.io/ecommerce3/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/ecommerce/footwear.jpg" alt="Footwear">
                <div>
                  <h2 class="Name-of-Project">Footwear</h2>
                  <a href="https://webnodites.github.io/ecommerce4/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/ecommerce/cellucity.jpg"  alt="Cellucity">
                <div>
                  <h2 class="Name-of-Project">Cellucity</h2>
                  <a href="https://webnodites.github.io/ecommerce5/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

            </div>

        </div>
      </div>
    </section>

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">Wedding</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-wed no-owl-nav">
           
              <div class="Rectangle">
                <img src="images/portfolio/wedding/kane.jpg" alt="Kane &amp; Oriana">
                <div>
                  <h2 class="Name-of-Project">Kane &amp; Oriana</h2>
                  <a href="https://webnodites.github.io/Wedding1/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/wedding/wedding_1.jpg" alt="Wedding Portfolio">
                <div>
                  <h2 class="Name-of-Project">Wedding Portfolio</h2>
                  <a href="https://webnodites.github.io/Wedding2/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/wedding/peter_2.jpg" alt="Peter &amp; Marry">
                <div>
                  <h2 class="Name-of-Project">Peter &amp; Marry</h2>
                  <a href="https://webnodites.github.io/Wedding3/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>
              
              <div class="Rectangle">
                <img src="images/portfolio/wedding/dennis.jpg" alt="Dennis &amp; Judith">
                <div>
                  <h2 class="Name-of-Project">Dennis &amp; Judith</h2>
                  <a href="https://webnodites.github.io/Wedding4/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/wedding/wedding_2.jpg" alt="Wedding Portfolio">
                <div>
                  <h2 class="Name-of-Project">Wedding Portfolio</h2>
                  <a href="https://webnodites.github.io/Wedding5/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

            </div>

        </div>
      </div>
    </section>

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">Photography</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-wed no-owl-nav">
           
              <div class="Rectangle">
                <img src="images/portfolio/photography/wildlifephotography.jpg" alt="Wild Life Photography">
                <div>
                  <h2 class="Name-of-Project">Wild Life Photography</h2>
                  <a href="https://webnodites.github.io/photography1/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/photography/Digital_studio.jpg" alt="Digital Studio">
                <div>
                  <h2 class="Name-of-Project">Digital Studio</h2>
                  <a href="https://webnodites.github.io/photography2/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

      
              <div class="Rectangle">
                <img src="images/portfolio/photography/Amazing_pixels.jpg" alt="Amazing Pixels">
                <div>
                  <h2 class="Name-of-Project">Amazing Pixels</h2>
                  <a href="https://webnodites.github.io/photography3/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/photography/Quality_pixels.jpg" alt="Quality Pixels">
                <div>
                  <h2 class="Name-of-Project"> Quality Pixels</h2>
                  <a href="https://webnodites.github.io/photography4/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>
              
              <div class="Rectangle">
                <img src="images/portfolio/photography/Perfect_click.jpg" alt="Perfect Click">
                <div>
                  <h2 class="Name-of-Project">Perfect Click</h2>
                  <a href="https://webnodites.github.io/photography5/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>


            </div>

        </div>
      </div>
    </section>

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">Hotels</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-rest no-owl-nav">
           
              <div class="Rectangle">
                <img src="images/portfolio/hotel/udaivilas.jpg" alt="Udaivilas">
                <div>
                  <h2 class="Name-of-Project">Udaivilas</h2>
                  <a href="https://webnodites.github.io/Hotel1/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>


              <div class="Rectangle">
                <img src="images/portfolio/hotel/luxury.jpg" alt="Luxury Hotel">
                <div>
                  <h2 class="Name-of-Project">Luxury Hotel</h2>
                  <a href="https://webnodites.github.io/Hotel2/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/hotel/deluxe.jpg" alt="Deluxe">
                <div>
                  <h2 class="Name-of-Project">Deluxe</h2>
                  <a href="https://webnodites.github.io/Hotel3/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/hotel/jaisamand.jpg" alt="Jaisamand Resort" >
                <div>
                  <h2 class="Name-of-Project">Jaisamand</h2>
                 <a href="https://webnodites.github.io/Hotel4/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/hotel/hotelace.jpg" alt="HotelAce">
                <div>
                  <h2 class="Name-of-Project">HotelAce</h2>
                  <a href="https://webnodites.github.io/Hotel5/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

            </div>

        </div>
      </div>
    </section>

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">Restaurant</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-rest no-owl-nav">
           
              <div class="Rectangle">
                <img src="images/portfolio/restaurant/foodie.jpg" alt="Foodie">
                <div>
                  <h2 class="Name-of-Project">Foodie</h2>
                  <a href="https://webnodites.github.io/Restaurant1/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/restaurant/good_food.jpg" alt="Good Food">
                <div>
                  <h2 class="Name-of-Project">Good Food</h2>
                  <a href="https://webnodites.github.io/Restaurant2/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/restaurant/delicious.jpg" alt="Delicious">
                <div>
                  <h2 class="Name-of-Project">Delicious</h2>
                  <a href="https://webnodites.github.io/Restaurant3/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/restaurant/amazingfood.jpg" alt="Amazing Food">
                <div>
                  <h2 class="Name-of-Project">Amazing Food</h2>
                  <a href="https://webnodites.github.io/Restaurant5/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/restaurant/chinesefood.jpg"  alt="Chinese Food">
                <div>
                  <h2 class="Name-of-Project">Chinese Food</h2>
                  <a href="https://webnodites.github.io/Restaurant4/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

            </div>

        </div>
      </div>
    </section>

    <section class="cat-slider">
      <div class="container">
        <h3 class="textcat-head">Gym</h3>
          <div class="row">
            <div class="owl-carousel owl-style owl-carousel-rest no-owl-nav">
           
              <div class="Rectangle">
                <img src="images/portfolio/gym/fit-for-life.jpg" alt="Fit-for-Life">
                <div>
                  <h2 class="Name-of-Project">Fit-for-Life</h2>
                  <a href="https://webnodites.github.io/Gym1/" target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/gym/gymholic.jpg" alt="Gymholic">
                <div>
                  <h2 class="Name-of-Project">Gymholic</h2>
                  <a href="https://webnodites.github.io/Gym2/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/gym/gym_world.jpg" alt="Gym World">
                <div>
                  <h2 class="Name-of-Project">Gym World</h2>
                  <a href="https://webnodites.github.io/Gym3/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/gym/jungle_fitness.jpg" alt="Jungle Fitness">
                <div>
                  <h2 class="Name-of-Project">Jungle Fitness</h2>
                  <a href="https://webnodites.github.io/Gym4/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

              <div class="Rectangle">
                <img src="images/portfolio/gym/fitness_365.jpg"  alt="Fitness 365">
                <div>
                  <h2 class="Name-of-Project">Fitness 365</h2>
                  <a href="https://webnodites.github.io/Gym5/"  target="_blank" class="live-btn">Live Preview</a>
                </div>
              </div>

            </div>

        </div>
      </div>
    </section>

   

   <footer >
      <div class="site-footer" >
        <div class="container">
          <div class="row main-row">
            <div class="col-lg-4 col-md-4 col-12">
              <h2 class="footer-heading ">Recent Blogs</h2>
              <ul class="list-unstyled ulc blg">
                <?php
                $qy = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 3";
                $rs = mysqli_query($con,$qy);
                foreach ($rs as $blg) {
                ?>
                <li>
                  <a href="blogdetail.php?id=<?php echo $blg['id'];?>">
                    <div class="row">
                      <div class="col-3"><div class="img" style="background: url(images/blog/<?php echo $blg['img'];?>);
                          background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                      </div>
                        <div class="col-9"><h3><?php echo $blg['title'];?></h3></div>
                      </div>
                    </a>
                  </li>
                  <?php

                  }
                 ?>
                  
                  
                
            </div>


            <div class="col-lg-3 col-md-3 ml-auto col-12">
              <h2 class="footer-heading ">Connect With Us</h2>
              <ul class="list-unstyled ulc social">
                <li><a href="https://www.linkedin.com/in/webnodites/" class="smoothscroll">Linkedin</a></li>

                <li><a href="https://www.facebook.com/Webnodites-110977740623699" class="smoothscroll">Facebook</a></li>

                <li><a href="https://www.instagram.com/webnodites/" class="smoothscroll">Instagram</a></li>
                
                <li><a href="https://twitter.com/webnodites" class="smoothscroll">Twitter</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-4 col-10">
              <div class="mb-5">
                <h2 class="footer-heading1">Contact Info</h2>
                <div>
                  <ul class="list-unstyled sc">
                    <li>
                      <a href="mailto:contact@webnodites.com"><img src="images/gmail.png" alt="gmail">contact@webnodites.com</a>
                    </li>
                    <li>
                      <a href="https://api.whatsapp.com/send?phone=+91-8500792188">
                        <img src="images/whatsapp.png" alt="whatsapp">+91-8500792188</a>
                    </li>
                    <li>
                      <a href="tel:+918500792188"><img src="images/call.png" alt="phone">+91-8500792188</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-1 col-2">
              <a id="backtotop">
              <div class="lntop">
                <i class="fa fa-angle-up"></i>
                <div >
                  <div class="vl"></div>
                </div>
              </div>
              </a>

            </div>

          </div>
        </div>
      </div>
      
      <div class=" text-right">
        <div class="container">
          <div class="col-md-12">
            <div class="border-top ">
              <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Webnodites - All Rights Reserved 
              </p>
        
            </div>
          </div>
          
        </div>
      </div>
      </div>
    </footer>

</div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  
  <script src="js/typed.js"></script>
  <script src="js/main.js"></script>
  <script src="js/portfolio.js"></script>

  </body>
</html>