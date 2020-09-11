<?php
$con=mysqli_connect("localhost","root","","webnodites");
session_start();
$bid = $_GET['id'];
date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Webnodites mission is to provide you the best services like web design and development (which are user friendly, fully responsive, optimized), search engine optimization (SEO), Digital Marketing, Email Marketing, Content Marketing, Graphic Design. And many other dynamic features for websites which helps to increase traffic. Easy, Fast, Customisable & 24/7 hrs Support.">
<meta name="keywords" content="webnodites, webnodite, web developer, graphic design, website creator,  best web developer, best web solution, web design, best web solutions, best website maker, best website maker in jaipur, best website maker in India, best web developer in jaipur, best web developer in bhilwara, best website for ecommerce, best website for small business, top 10 web developers, web developers, web developers in jaipur, web developer in bhilwara, best website for a wedding, digital marketing, ecommerce website, website builder,website design services, responsive web design, web development company, software development company, website development company, website creator, website templates, how to make a website">
<link rel="shortcut icon" href="Images/logo/favicon.png">
<title>Blog Detail</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
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
 
  <?php
           $q = "select * from blog where id = $bid";
           $res = mysqli_query($con, $q);
           foreach ($res as $blog) {
                         
           ?>   
<div class="page ng-scope" id="top"> 
        
    <div class="page-section bg-dark-alfa-50 parallax-3 port-banner">
        <div class="relative container align-left">
           <div class="row">
              <div class="col-md-8">
                 <h1 class="allpagetitle font-alt mb-20 mb-xs-0 ng-binding"><?php echo $blog['title'];?></h1>
              </div>
              <div class="col-md-4 mt-30">
                
              </div>
           </div>
        </div>
     </div>

     <section class="blogdetail section">
        <div class="container">
          <div class="row">

            <div class="col-lg-8 blogdet">
                <p class="mb-5">
                 <img src="Images/blog/<?php echo $blog['img'];?>" alt="blog image" class="img-fluid blogimg">
                </p>
              <h2 class="mb-3"><?php echo $blog['title'];?></h2>
              <p><i class="fa fa-calendar"></i> <?php echo $blog['date'];?></p><br>
              <p><i class="fa fa-circle"></i> <?php echo $blog['category'];?></p><br>

              <?php echo $blog['longdes'];?>
          
              
              <div class="about-author d-flex p-4 row">
                <div class="bio mr-5 col-lg-3 col-md-3">
                   <img src="Images/bloguser/<?php echo $blog['userimg'];?>" alt="user image" class="img-fluid">
                </div>
                <div class="desc col-lg-9 col-md-9">
                  <h3><?php echo $blog['user'];?></h3>
                  <p><?php echo $blog['userdes'];?></p>
                </div>
              </div>
  
  
              <div class="pt-5 mt-5">

                <div class="int_heading text-left ">
                  <h4><span></span>All Comments</h4>                    
                </div>
                <ul class="comment-list" id="comments">
                 
                 
                  
                </ul>
                <!-- END comment-list -->
                <input type="hidden" class="form-control" id="bid" value="<?php echo $blog['id'];?>">
                <div class="comment-form ">
                  <div class="int_heading text-left ">
                  <h4><span></span>Leave A comment</h4>                    
                </div>
                  <form>
                     <input type="hidden" class="form-control" id="date" value="<?php echo date('Y-m-d')." "; echo date("h:i:sa"); ?>" readonly>
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                      <label for="emai">Email *</label>
                      <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                      <label for="message">Comment</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                   
                    <div class="form-group text-left">
                          <button type="button" class="int_btn" onclick="adddata()">Post</button>
                      </div>
  
                  </form>
                </div>
              </div>
           



            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 side-bar pl-lg-5 ftco-animate">
              
      
  
              <div class=" section recent ftco-animate">
               <div class="int_heading slider-title">
                  <h4><span></span>Recent Blogs</h4>  

                </div>
                <?php
                $qy = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 3";
                $rs = mysqli_query($con,$qy);
                foreach ($rs as $blg) {
                ?>
                <div class="singleblog">
                  <a href="blogdetail.php?id=<?php echo $blg['id'];?>"> <img class="blogimg" 
                      src="Images/blog/<?php echo $blg['img'];?>"></a>
                  <div class="text">
                    <h3 class="heading"><a href="blogdetail?id=<?php echo $blg['id'];?>"><?php echo $blg['title'];?></a></h3>
                    <div class="meta">
                      <div><span class="fa fa-calendar"></span> <?php echo $blog['date'];?></div>
                      <div><span class="fa fa-user"></span> <?php echo $blog['user'];?></div>
                      
                    </div>
                  </div>
                </div>

                 <?php

                  }
                 ?>

               
              </div>
  
            </div>
  
          </div>
        </div>
      </section> 
<?php } ?>



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

    <section id="contact" style="padding: 0;">
        <div class="page-section1 footer pb-60" style="background: #111111;">
            <section class="small-section bg-dark">
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
                            <h4 class="foot">Copyright &copy; 2020 <a href="index.html"><strong style="color: #00e6e6 "> Webnodites </strong></a> Designed By <a href="index.html"><strong style="color: #00e6e6 "> Webnodites </strong></a>
                            </h4>
                    </div>
    
                </div>
    
            <!--- Side Bar --->
      
        
        </div>



     
      </section>
       <script src="js/validate.js"></script>
       <script src="js/jquery.min.js"></script>
       <script src="js/jquery-migrate-3.0.1.min.js"></script>
      
       
      
       <script src="js/jquery.waypoints.min.js"></script>
       <script src="js/jquery.stellar.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
       <script src="js/aos.js"></script>
       
       <script src="js/scrollax.min.js"></script>
     
       <script src="js/main.js"></script>
         <script src="js/pre-loader.js"></script>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
</body>
</html>