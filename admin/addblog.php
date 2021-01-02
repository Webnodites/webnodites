<?php

include('connect.php');
date_default_timezone_set('Asia/Kolkata');
   
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}

if(isset($_POST['post']))
{

$a= $_POST["title"];
$b= $_POST["user"];
$c= $_POST["date"];
$d= $_POST["shortdesc"];
$u= $_POST["userdesc"];
$ul= $_POST["userlink"];
$ct= $_POST["category"];
$e= $_POST["editor_content"];
$file= $_FILES["image"]["name"];
$uimg= $_FILES["userimage"]["name"];
$mi1= $_FILES["blgimg1"]["name"];
$mi2= $_FILES["blgimg2"]["name"];
$mi3= $_FILES["blgimg3"]["name"];
$mi4= $_FILES["blgimg4"]["name"];


$z= "INSERT INTO `blog`(`title`,`user`,`userdes`,`category`,`userimg`,`user_link`, `date`, `shortdes`, `longdes`,`img`,`status`) VALUES('$a','$b','$u','$ct','$uimg','$ul','$c','$d', '$e','$file','Active')";

$res = mysqli_query($con,$z);
if($res)
{
$a5=move_uploaded_file($_FILES["image"]["tmp_name"],"../images/blog/".$_FILES["image"]["name"]);
$a6=move_uploaded_file($_FILES["userimage"]["tmp_name"],"../images/bloguser/".$_FILES["userimage"]["name"]);

$m1=move_uploaded_file($_FILES["blgimg1"]["tmp_name"],"../images/blog/".$_FILES["blgimg1"]["name"]);
$m2=move_uploaded_file($_FILES["blgimg2"]["tmp_name"],"../images/blog/".$_FILES["blgimg2"]["name"]);
$m3=move_uploaded_file($_FILES["blgimg3"]["tmp_name"],"../images/blog/".$_FILES["blgimg3"]["name"]);
$m4=move_uploaded_file($_FILES["blgimg4"]["tmp_name"],"../images/blog/".$_FILES["blgimg4"]["name"]);


echo "<script>
      alert('Blog Post Successfully')
      </script>";
}
else{
  echo "<script>
      alert('error')
      </script>";
}
mysqli_close($con);

}


?>


<html>
<head>
	<title></title>
	<link rel="shortcut icon" href="../images/fav1.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
     <link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
     <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
     <script src="ckeditor/ckeditor.js"></script>
     <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark">
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
<div class="container addblog">
  <h2 class="text-center">Add Blog</h2><hr>

    <form method="post" enctype="multipart/form-data" action="addblog.php" style="padding: 50px;">
  		
      <div class="form-group row">
    		<label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
    		  <input type="text" class="form-control" name="title" autocomplete="off" required>
  		  </div>
      </div>

      <div class="form-group row">
        <label for="category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="category" autocomplete="off" >
        </div>
      </div>
        
      

  		<div class="form-group row">
    		<label for="date" class="col-sm-2 col-form-label">Date</label>
    		<div class="col-sm-10">
          <input type="text" class="form-control" name="date" value="<?php echo date('d-m-Y')." "; echo date("h:i:sa"); ?>" readonly>
  		  </div>
      </div>  

		 <div class="form-group row">
		    <label for="shortdesc" class="col-sm-2 col-form-label">Short Description</label>
		     <div class="col-sm-10">
        <textarea class="form-control" id="shortdesc" name="shortdesc" rows="3" ></textarea>
		    </div>
      </div>  

      <div class="form-group row">
        <label for="pic" class="col-sm-2 col-form-label">Blog Image</label>
         <div class="col-sm-10">
            <input type="file" class="form-control-file" id="image" name="image" onchange="readURL1(this);">
             <img src="#" id="blah1" alt="Selected Image Here.." style="height: 100px; width: 100px;">
        </div>
     </div>

     <div class="form-group row">
        <label for="user" class="col-sm-2 col-form-label">Author Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="user" autocomplete="off" >
        </div>
      </div>

     <div class="form-group row">
        <label for="userpic" class="col-sm-2 col-form-label">Author Image</label>
         <div class="col-sm-10">
            <input type="file" class="form-control-file" id="userimage" name="userimage" onchange="readURL2(this);">
            <img src="#" id="blah2" alt="Selected Image Here.." style="height: 100px; width: 100px;">
        </div>
     </div>

     <div class="form-group row">
        <label for="userlink" class="col-sm-2 col-form-label">Author Link</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="userlink" name="userlink">
        </div>
     </div>

      <div class="form-group row">
        <label for="userdesc" class="col-sm-2 col-form-label">Author Description</label>
         <div class="col-sm-10">
        <textarea class="form-control" id="suthordesc" name="userdesc" rows="3" ></textarea>
        </div>
      </div>  


		 <div class="form-group row">
          <label for="des" class="col-sm-2 col-form-label">*Blog Description</label>
          <div class="col-sm-10">
            <textarea id="editor" name="editor_content" rows="15" ></textarea>
          
          </div>
      </div>

       <div class="form-group row">
        <label for="pic" class="col-sm-12 col-form-label">More Images</label>
        <div class="row">
          <div class="col-sm-3">
              <input type="file" class="form-control-file" id="blgimg1" name="blgimg1">
          </div>
          <div class="col-sm-3">
              <input type="file" class="form-control-file" id="blgimg2" name="blgimg2">
          </div>
          <div class="col-sm-3">
              <input type="file" class="form-control-file" id="blgimg3" name="blgimg3">
          </div>
          <div class="col-sm-3">
              <input type="file" class="form-control-file" id="blgimg4" name="blgimg4">
          </div>
        </div>
        
        </div>

	   <div class="form-group row text-center" style="display: block;">

    		 <button name="post" class="">Post</button>
      </div>
	  </form>
</div>


	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    CKEDITOR.replace('editor');

  });
</script>
<script type="text/javascript">
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
      function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>