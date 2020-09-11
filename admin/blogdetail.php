<?php

include('connect.php');
$blogid = $_GET['blogid'];

$data = "select * from blog where id = $blogid";
$res = mysqli_query($con,$data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
     <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>

   <script src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  			<a class="navbar-brand" href="#">Webnodites Admin</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse justify-content-center text-center" id="navbarSupportedContent">
    			<ul class="navbar-nav ml-auto ">
      			
      				<li class="nav-item active">
        			<a class="nav-link text-light" href="addblog.php">Add Blog</a>
      				</li>

      				<li class="nav-item active">
        			<a class="nav-link text-light" href="allblogs.php">All Blogs</a>
      				</li>
      			</ul>
      			<ul class="nav navbar-nav ml-auto">
			     
			      <li  class="nav-item ">
			      	<a class="nav-link text-light" href="logout.php"><span class="fa fa-sign-out"></span> Logout</a></li>
			    </ul>	
      		</div>
		</nav>
	</header>
<?php
  foreach ($res as $blog)
   {
  
?>
<div class="blogdetail">
  <div class="container">
    <h2 class="text-center"><?php echo $blog['title']?></h2>
    <div class="row">
      <div class="col-lg-3 col-sm-12 col-md-3">
        <h4><?php echo $blog['user']?></h4>
        <h4><?php echo $blog['date']?></h4>
      </div>
      <div class="col-lg-9 col-sm-12 col-md-9">
        <img src="../Images/blog/<?php echo $blog['img']?>">
        <?php echo $blog['longdes']?>

      </div>
    </div>
  </div>  

</div>
<?php } ?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</body>
</html>