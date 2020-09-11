<?php
$con=mysqli_connect("localhost","root","","webnodites");
session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
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
            <div class="mb-0 site-logo"><a href="index.html" class="h2 mb-0"><img src="images/logo/logo.png"></a></div>
          </div>

          <div class="col-12 col-md-8 col-lg-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link nrl">Home</a></li>
                <li><a href="who_we_are.html" class="nav-link nrl">Who We Are</a></li>
                <li><a href="services.html" class="nav-link nrl">Services</a></li>
                <li><a href="portfolio.html" class="nav-link nrl">Portfolio</a></li>
                <li><a href="blog.html" class="nav-link nrl">Blogs</a></li>
                <li><a href="contact.html" class="nav-link cnt">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
    <section class="site-blocks-cover overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">

            <div class="row all">
              <div class="col-lg-12">

                <h1>Our Blogs</h1>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </section> 
      </div> 
      
      <section class="blog_slider_" id="blog_slider" >
      <div class="container">
            <div class="blog_slider_1">
                <div class="owl-carousel owl-style owl-carousel-blog no-owl-nav">
                    <?php
                       $q = "select * from blog Limit 5";
                       $res = mysqli_query($con, $q);
                       foreach ($res as $blog) {
                                     
                       ?>
                          <div class="blogbox">
                            <a href="blogdetail.html?id=<?php echo $blog['id'];?>">
                              <img src="images/blog/<?php echo $blog['img'];?>" alt="Image" class="img-fluid">
                              <div>
                                <h2 class="tl"><?php echo substr($blog['title'],0,25);?>...</h2>
                                <p class="dt"><i class="fa fa-calendar"></i><?php echo $blog['date'];?></p>
                                <p class="dt"><i class="fa fa-user"></i><?php echo $blog['user'];?></p>
                              </div>
                            </a>
                          </div>
                    <?php
                      } 
                  ?>
                     
              </div>
          </div>
        </div>
    </section>


    <section class="blg_section">
      <div class="container">
        <div class="heading">
            <h2>All Blogs</h2>
        </div>

        <div id="dynamic_content">
            <div class="blog_section" id="blog" >
              <div class="blog-inner">
                <div class="row">
                    <div class="col-lg-4 img-area-2">
                        <div class="img-area">
                            <img src="images/t.jpg" >
                        </div>
                    </div>
                    <div class="col-lg-8" style="padding-top:20px;">
                        <div class="text-area">
                            <p  class="date">11-07-2020 <span class="time"> 11:27:05pm</span></p>
                            <p class="authore">Shahab Hashmi</p>
                            <p><h1>How To Use CodePen Components Inside Your Webpage?</h1></p>
                            <p class="detial" id="_detial">
                                      With the world rapidly evolving by the minute, staying on top of the in-demand skills’ curve is a voluminous task. Web Development is one such skill that is almost essential to the modern developer.  </p>
                            <a class="btn read-more-btn" href="single.html">Read More</a></center>

                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>


<footer >
      <div class="site-footer" >
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-3 col-12">
              <h2 class="footer-heading ">Quick Links</h2>
              <ul class="list-unstyled ulc">
                <li><a href="index.html" class="smoothscroll">Home</a></li>
                <li><a href="who_we_are.html" class="smoothscroll">Who We Are</a></li>
                <li><a href="services.html" class="smoothscroll">Services</a></li>
                <li><a href="portfolio.html" class="smoothscroll">Portfolio</a></li>
                <li><a href="blog.html" class="smoothscroll">Blogs</a></li>
                <li><a href="contact.html" class="smoothscroll">Contact Us</a></li>
              </ul>
            </div>


            <div class="col-md-3 ml-auto col-12">
              <h2 class="footer-heading ">Social Links</h2>
              <ul class="list-unstyled ulc">
                <li><a href="#" class="smoothscroll">Facebook</a></li>
                <li><a href="#" class="smoothscroll">Instagram</a></li>
                <li><a href="#" class="smoothscroll">LinkedIn</a></li>
                <li><a href="#" class="smoothscroll">Twitter</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-5 col-10">
              <div class="mb-5">
                <h2 class="footer-heading1">Contact Us</h2>
                <div>
                  <ul class="list-unstyled sc">
                    <li>
                      <a href="#"><img src="images/gmail.png">contact@webnodites.com</a>
                    </li>
                    <li>
                      <a href="#"><img src="images/whatsapp.png">+91-8500792188</a>
                    </li>
                    <li>
                      <a href="#"><img src="images/call.png">+91-8500792188</a>
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
              <p class="copyright">Copyright &copy; 2020 | All Rights Reserved | Webnodites
            </p>
        
            </div>
          </div>
          
        </div>
      </div>
      </div>
    </footer>


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

  
  <script src="js/blog.js"></script>
  <script src="js/main.js"></script>
<script>
  $(document).ready(function(){

   

    function load_data(page, query = '')
    {
      $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{page:page, query:query},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });


    }
    load_data(1);

    

  });
</script>
  </body>
</html>