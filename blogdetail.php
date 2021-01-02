<?php
include('connect.php');

$bid = $_GET['id'];
date_default_timezone_set('Asia/Kolkata');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Blog Detail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Webnodites mission is to provide you the best services like web design and development (which are user friendly, fully responsive, optimized), search engine optimization (SEO), Digital Marketing, Email Marketing, Content Marketing, Graphic Design. And many other dynamic features for websites which helps to increase traffic. Easy, Fast, Customisable & 24/7 hrs Support.">
    <meta name="keywords" content="webnodites, webnodite, web developer, graphic design, website creator,  best web developer, best web solution, web design, best web solutions, best website maker, best website maker in jaipur, best website maker in India, best web developer in jaipur, best web developer in bhilwara, best website for ecommerce, best website for small business, top 10 web developers, web developers, web developers in jaipur, web developer in bhilwara, best website for a wedding, digital marketing, ecommerce website, website builder,website design services, responsive web design, web development company, software development company, website development company, website creator, website templates, how to make a website">


 <meta property="fb:app_id" content="663774370909599" />
     <meta property="fb:admins" content="100021791163725"/>

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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">


  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
 
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=663774370909599&autoLogAppEvents=1" nonce="LCqT8P11"></script>

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
            <div class="mb-0 site-logo"><a href="index" class="h2 mb-0">
              <img src="images/logo/logo.png" alt="logo"></a></div>
          </div>

          <div class="col-12 col-md-8 col-lg-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index" class="nav-link nrl">Home</a></li>
                <li><a href="who_we_are" class="nav-link nrl">Who We Are</a></li>
                <li><a href="services" class="nav-link nrl">Services</a></li>
                <li><a href="portfolio" class="nav-link nrl">Portfolio</a></li>
                <li><a href="blog" class="nav-link nrl active">Blogs</a></li>
                <li><a href="contact?sub=For Enquiry" class="nav-link cnt">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-md-8 col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
 
  <?php
      $q = "select * from blog where id = $bid";
      $res = mysqli_query($con, $q);
      foreach ($res as $blog) {
                         
  ?>   

    <section class="site-blocks-cover overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">

            <div class="row all">
              <div class="col-lg-11">

                <h2 class="blogt"><?php echo $blog['title'];?></h2>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    <section class="site-section blog-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">

            <div class="row mb-5">
              <div class="col-lg-12">
                <img src="images/blog/<?php echo $blog['img'];?>" alt="Blog Image" class="img-fluid">
                  
              </div>
              
            </div>
            <div>
              <h1 class="mb-3"><?php echo $blog['title'];?></h1>
              <p><i class="fa fa-calendar"></i> <?php echo $blog['date'];?></p><br>
            </div>
            

            <?php echo $blog['longdes'];?>

            <div class="fb-like" data-href="http://localhost/webnodites/blogdetail?id=<?php echo $blog['id'];?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
            
            <div class="fb-comments" data-href="http://localhost/webnodites/blogdetail?id=<?php echo $blog['id'];?>" data-width="100%" data-numposts="5"></div>
           
           <!--  <div class="pt-5">
              <h3 class="mb-5">All Comments</h3>
              <ul class="comment-list" id="comments">
              </ul>
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <input type="hidden" class="form-control" id="bid" value="<?php echo $blog['id'];?>">
                <form >
                  <input type="hidden" class="form-control" id="date" value="<?php echo date('Y-m-d')." "; echo date("h:i:sa"); ?>" readonly>

                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" required>
                  </div>
                  

                  <div class="form-group">
                    <label for="message">Comment</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-primary" onclick="adddata()">Post Comment</button>
                  </div>

                </form>
              </div>
            </div> -->

          </div>
          <div class="col-md-4 sidebar">
            <div class="int_heading slider-title">
                <h4>About Author</h4>  
             </div>
            
            <div class="sidebar-box author">
              <div class="row">
                <div class="col-4">
                  <img src="images/bloguser/<?php echo $blog['userimg'];?>" alt="Athor Image" class="img-fluid mb-4">

                </div>
                <div class="col-8" style="padding-left: 0;">
                   <a href="<?php echo $blog['user_link'];?>" target="_blank"><h3><?php echo $blog['user'];?></h3></a>
                </div>
              </div>
              <p><?php echo $blog['userdes'];?></p>
             
            </div>
              
            <div class="int_heading slider-title">
                <h4>Recent Blogs</h4>  
             </div>
             <?php
                $qy = "SELECT * FROM `blog` where status = 'Active' ORDER BY id DESC LIMIT 3";
                $rs = mysqli_query($con,$qy);
                foreach ($rs as $blg) {
                ?>
                <div class="sidebar-box">
                 <a href="blogdetail?id=<?php echo $blg['id'];?>">
                  <img src="images/blog/<?php echo $blg['img'];?>" alt="blog" class="img-fluid mb-4">
                  <h3><?php echo $blg['title'];?></h3>
                  </a>
                  <p><i class="fa fa-calendar"></i> <?php echo $blg['date'];?></p>
                  <p><i class="fa fa-user"></i> <?php echo $blg['user'];?></p>
                </div>
               <?php

                  }
                 ?>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>

    <footer >
      <div class="site-footer" >
        <div class="container">
          <div class="row main-row">
            <div class="col-lg-4 col-md-4 col-12">
              <h2 class="footer-heading ">Recent Blogs</h2>
              <ul class="list-unstyled ulc blg">
                <?php
                $qy = "SELECT * FROM `blog` where status = 'Active' ORDER BY id DESC LIMIT 3";
                $rs = mysqli_query($con,$qy);
                foreach ($rs as $blg) {
                ?>
                <li>
                  <a href="blogdetail?id=<?php echo $blg['id'];?>">
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
                      <a href="mailto:contact@webnodites.in"><img src="images/gmail.png" alt="gmail">contact@webnodites.in</a>
                    </li>
                    <li>
                      <a href="https://api.whatsapp.com/send?phone=+91-8500792188">
                        <img src="images/whatsapp.png" alt="whatsapp">+91 850 079 2188</a>
                    </li>
                    <li>
                      <a href="tel:+918500792188"><img src="images/call.png" alt="phone">+91 850 079 2188</a>
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
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Motivational Speakers","Professional Speakers","Business Speakers", "Professional Life Coach"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
  <script type="text/javascript">
  $(document).ready(function(){
          readdata();
});

   function readdata(){
         var readdt = "readdt";
          var bid = $('#bid').val();
         $.ajax({
          url: 'comment.php',
          type: 'POST',
          data: {
            readdt : readdt,
             bid : bid
          },

          success : function(data,status){
            $('#comments').empty();
            console.log(data);
            $('#comments').html(data);
          }
         });


  }


  function adddata(){
    var name = $('#name').val();
    var msg = $('#message').val();
    var email = $('#email').val();
    var bid = $('#bid').val();
    var date = $('#date').val();
    
    console.log(name);
    console.log(msg);
    console.log(email);
    console.log(bid);
    console.log(date);

    $.ajax({
      url: 'comment.php',
      type: 'POST',
      data: {
        name :name,
        msg : msg,
        email : email,
        bid : bid,
        date : date,
      },

      success : function(data,status){
        $('#name').val('');
        $('#message').val('');
        $('#email').val('');
        readdata();
      }
    });
  }
</script>  
  <script src="js/main.js"></script>

  
  </body>
</html>