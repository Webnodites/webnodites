<?php
$con=mysqli_connect("localhost","root","","webnodites");
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Webnodites mission is to provide you the best services like web design and development (which are user friendly, fully responsive, optimized), search engine optimization (SEO), Digital Marketing, Email Marketing, Content Marketing, Graphic Design. And many other dynamic features for websites which helps to increase traffic. Easy, Fast, Customisable & 24/7 hrs Support.">
<meta name="keywords" content="webnodites, webnodite, web developer, graphic design, website creator,  best web developer, best web solution, web design, best web solutions, best website maker, best website maker in jaipur, best website maker in India, best web developer in jaipur, best web developer in bhilwara, best website for ecommerce, best website for small business, top 10 web developers, web developers, web developers in jaipur, web developer in bhilwara, best website for a wedding, digital marketing, ecommerce website, website builder,website design services, responsive web design, web development company, software development company, website development company, website creator, website templates, how to make a website">
<link rel="shortcut icon" href="Images/logo/favicon.png">
<title>Blog</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css"> 
<link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css">
<script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/blog.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/blog.js"></script>

<link rel="stylesheet" href="css/pre-loader.css">
</head>
<body>
   <!--- This Two Divs are used for Pre-Loader Screen-->
    <div class="loader_bg"><div class="loader"><h3>Loading...</h3></div></div>
          
    <header>
		<div class="logo"><a href="index"><img id="img1" src="Images/logo/wlogo.png" alt="LOGO"></a></div>
		<nav>
			   <ul>
                        <li><a href="index"  > Home</a></li>
                        <li><a href="about"  > Who We Are</a></li>
                        <li><a href="services" > Services</a></li>
                        <li><a href="portfolio" > Portfolio </a></li>
                        <li><a href="blog"  > Blog </a></li>
                        <li><a href="contact" > Contact </a></li>
                    </ul> 

		</nav>
		<div class="menu-toggle"><i class="fa fa-bars"></i></div>
    </header>


<div class="page ng-scope" id="top"> <!-- For Sticky Contact Section-->

<div class="page-section bg-dark-alfa-50 parallax-3 port-banner">
   <div class="relative container align-left">
      <div class="row">
         <div class="col-md-8">
            <h1 class="allpagetitle font-alt mb-20 mb-xs-0 ng-binding">Blog</h1>
         </div>
         <div class="col-md-4 mt-30">
           
         </div>
      </div>
   </div>
</div>

<section class="blog">  

  <div class="page-wrapper">
    <div class="post-slider">
      <i class="fa fa-chevron-left prev"></i>
      <i class="fa fa-chevron-right next"></i>
      <div class="int_heading slider-title">
        <h4><span></span>Trending Posts </h4>                    
      </div>
      <div class="post-wrapper">
        <?php
           $q = "select * from blog Limit 5";
           $res = mysqli_query($con, $q);
           foreach ($res as $blog) {
                         
           ?>
        <div class="post">
          <img src="Images/blog/<?php echo $blog['img'];?>" class="slider-image">
          <div class="post-info">
            <h4>
              <a href="blogdetail?id=<?php echo $blog['id'];?>"><?php echo substr($blog['title'],0,25);?>...</a>
            </h4>
            <i class="fa fa-user"> <?php echo $blog['user'];?></i>
                &nbsp;
            <i class="fa fa-calendar"> <?php echo $blog['date'];?></i>
          </div>
        </div>

         <?php
              } 
          ?>
        <div class="post"><img src="Images/coming.jpg" class="slider-image">
          <div class="post-info">
            <h4>
              <a href="s.html">lorem ipsum</a>
            </h4>
            <i class="fa fa-user"> lorem ipsum</i>
              &nbsp;
            <i class="fa fa-calendar"> may 18,2020</i>
          </div>
        </div>
          
        <div class="post"><img src="Images/coming.jpg" class="slider-image">
          <div class="post-info">
            <h4>
              <a href="s.html">lorem ipsum</a>
            </h4>
            <i class="fa fa-user"> lorem ipsum</i>
              &nbsp;
            <i class="fa fa-calendar"> may 18,2020</i>
          </div>
        </div>
        
        <div class="post"><img src="Images/coming.jpg" class="slider-image">
          <div class="post-info">
            <h4>
              <a href="s.html">lorem ipsum</a>
            </h4>
            <i class="fa fa-user"> lorem ipsum</i>
              &nbsp;
            <i class="fa fa-calendar"> may 18,2020</i><
          </div>
        </div>
      </div>
    </div>


      
    <div class="content clearfix">
      <div class="main-content">
        <div class="int_heading slider-title">
          <h4><span></span>All Posts </h4>                    
        </div>
        <div id="dynamic_content">
        </div>
      
      </div>
        
      <div class="side-bar">

        <div class="section search">
          <div class="int_heading ">
          <h4><span></span>Search</h4>                    
        </div>
          <form action="blog.php" method="post">
            <input type="text" name="searchval" id="search_box" class="text-input" placeholder="Search">
           
          </form>
        </div>

        <div class="section topics">
          <div class="int_heading slider-title">
          <h4><span></span>Topics</h4>                    
        </div>
            <ul>
              <li><button  id ="app" value ="app">App</button></li>
              <li><button  id="education" value="education">Education</button></li>
              <li><button  id="web" value="web">Web</button></li>
              <li><button  id="software" value="software">Software</button></li>
              <li><button  id="cloud" value="cloud">Cloud</button></li>
             
            
            </ul>
        </div>
      </div>
    </div>
  </div>  
  <!-- page wrapper -->
  <!-- footer -->
  </section>
</div>


</div>

    <div class="sidebar-contact">
        <div class="toggle"></div>
        <h2>REQUEST A CALL BACK</h2>
        <form action="contactmail" method="post" class="">
            <input type="text" class="only-alpha" name="name" placeholder="Name" required>
            <input type="email" class="" name="email" placeholder="Email" required>
            <input type="text" class="only-numeric" name="mobile" maxlength="10" placeholder="Phone Number" required>
            <textarea placeholder="Message" name="msg" required></textarea>
            <input type="submit" value="Send" name="requestcall">
        </form>
    </div>
  <section id="contact">
    <div class="page-section1 footer pb-60" style="background: #111111;">
        <section class="small-section">
            <div class="container relative">
                <div class="text-left">
                    <h2 style="color: #808080;font-size:100px;line-height:100px;margin: 0px; cursor: pointer; font-family: 'Montserrat', sans-serif;">Don't be shy<br>
                        <a href="mailto:webnodites@gmail.com"><strong style="color: #98afc3;">Say </strong> <strong style="color: #00e6e6;">Hi.</strong></a>
                    </h2>
                    <br>
                </div>
                    <h6 class="footerp" style="font-size: 30px;margin-top: 0px;">We'd love to hear from you </h6>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <img src="Images/icons/Call.png">
                    </div>
                    <h3 class="benefit-title font-alt">give us a call</h3>
                    <div class="benefits-descr">
                        <a href="tel:+918500792188"> +91-8500792188</a>
                    </div>
                </div>
                     
                <div class="benefit-item">
                    <div class="benefit-icon">
                       <img src="Images/icons/email.png">
                    </div>
                    <h3 class="benefit-title font-alt">Send us Email</h3>
                    <div class="benefits-descr">
                        <a href="mailto:webnodites@gmail.com" target="_blank">webnodites@gmail.com</a>
                    </div>
                </div>
                     
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <img src="Images/icons/instagram.png">
                    </div>
                    <h3 class="benefit-title font-alt">Find us</h3>
                    <div class="benefits-descr">
                        <a href="https://www.instagram.com/webnodites/" target="_blank">webnodites</a>
                    </div>
                </div>
                     
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <img src="Images/icons/whatsapp.png">
                    </div>
                    <h3 class="benefit-title font-alt">whatsapp</h3>
                    <div class="benefits-descr">
                        <a href="https://api.whatsapp.com/send?phone=+91-8500792188"  target="_blank">+91-8500792188</a>
                    </div>
                </div>
                     
            </div>
        </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footerlist">
                               <ul>
                        <li><a href="index"  > Home</a></li>
                        <li><a href="about"  > Who We Are</a></li>
                        <li><a href="services" > Services</a></li>
                        <li><a href="portfolio" > Portfolio </a></li>
                        <li><a href="blog"  > Blog </a></li>
                        <li><a href="contact" > Contact </a></li>
                    </ul> 
                        </div>
    
                    </div>
    
                    <div class="col-md-4" style="padding-top:10px ;">
                            <!-- Social Links -->
                        <div class="social-links mb-110 mb-xs-60" >
                            <a href="https://twitter.com/webnodites" title="Twitter" target="_blank"><img src="Images/icons/twitter_32.png"></a>
                            <a href="https://www.linkedin.com/in/webnodites/" title="LinkedIn+" target="_blank"><img src="Images/icons/linkedin_32.png"></a>
                            <a href="https://www.facebook.com/Webnodites-110977740623699" title="Facebook" target="_blank"><img src="Images/icons/facebook_32.png"></a>
                            <a href="https://github.com/Webnodites/webnodites" title="GitHub" target="_blank"><img src="Images/icons/github_32.png"></i></a>
                        </div>
                            <!-- End Social Links -->
                    </div>
                     <!-- Top Link -->
                        <div class="local-scroll" style="float: right; padding-top:10px;">
                            <a href="#top" class="link-to-top" title="Top of the Page"><img src="Images/icons/up2.png"></a>
                        </div>
                </div>
                <div class="footer-text">
                        <h4 class="foot">Copyright &copy; 2020 <a href="index.html"><strong style="color: #00e6e6 "> Webnodites </strong></a> Designed By <a href="index .html"><strong style="color: #00e6e6 "> Webnodites </strong></a>
                        </h4>
                </div>

            </div>

        <!--- Side Bar --->
  
    
    </div>
 
  </section>
</div>  


 <script src="js/validate.js"></script>
   <script src="js/pre-loader.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });
    
     $(document).on('click', '#app', function(){
      var query = $('#app').val();
      console.log(query);
      load_data(1, query);
     });

     $(document).on('click', '#education', function(){
      var query = $('#education').val();
      console.log(query);
      load_data(1, query);
     });
     $(document).on('click', '#web', function(){
      var query = $('#web').val();
      console.log(query);
      load_data(1, query);
     });
     $(document).on('click', '#cloud', function(){
      var query = $('#cloud').val();
      console.log(query);
      load_data(1, query);
     });
     $(document).on('click', '#software', function(){
      var query = $('#software').val();
      console.log(query);
      load_data(1, query);
     });

  });
</script>
</body>
</html>