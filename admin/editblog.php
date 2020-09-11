<?php
include('connect.php');

$blogid = $_GET['blogid'];
$q = "select * from blog where id = $blogid";
$res1 = mysqli_query($con,$q);


if(isset($_POST['updateblog']))
{


$a= $_POST["title"];
$b= $_POST["user"];
$c= $_POST["date"];
$d= $_POST["shortdesc"];
$e= $_POST["editor_content"];
$file= $_FILES["image"]["name"];
$uimg= $_FILES["userimage"]["name"];

 if($file != '' )
    {
		move_uploaded_file($_FILES["image"]["tmp_name"],"../Images/blog/".$_FILES["image"]["name"]);
      $updtimg = "UPDATE `blog` SET `img`='$file' WHERE id =$blogid ";

      $rs=mysqli_query($con,$updtimg);
    }
 if($uimg != '' )
    {
		move_uploaded_file($_FILES["userimage"]["tmp_name"],"../Images/bloguser/".$_FILES["userimage"]["name"]);
      $updtimg = "UPDATE `blog` SET `userimg`='$uimg' WHERE id =$blogid ";

      $rs=mysqli_query($con,$updtimg);
    } 

$z= "UPDATE `blog` SET `title`='$a',`user`='$b',`date`='$c',`shortdes`='$d',`longdes`='$e' WHERE id= $blogid";


$res = mysqli_query($con,$z);
if($res)
{

echo "<script>
      alert('Blog Update Successfully')
      </script>";
 header("location:allblogs.php");
}
else{
	
echo "<script>
      alert('error')
      </script>";
}
mysqli_close($con);

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Blog</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
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
      			
      				<li class="nav-item ">
        			<a class="nav-link text-light" href="addblog.php">Add Blog</a>
      				</li>

      				<li class="nav-item">
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
foreach ($res1 as $blog) {
 
?>
<section class="addblog">
	<div class="container">
		<h2>Update Blog</h2><hr>


	<form method="post" enctype="multipart/form-data" action="editblog.php?blogid=<?php echo $blog['id'];?>" style="padding: 50px;">
  		
      <div class="form-group row">
    		<label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
    		  <input type="text" class="form-control" name="title" autocomplete="off"
    		   value="<?php echo $blog['title']; ?>">
  		  </div>
      </div>
        
      <div class="form-group row">
    		<label for="user" class="col-sm-2 col-form-label">User</label>
    		<div class="col-sm-10">
          <input type="text" class="form-control" name="user" autocomplete="off" value="<?php echo $blog['user']; ?>">
  		  </div>
      </div>

  		<div class="form-group row">
    		<label for="date" class="col-sm-2 col-form-label">Date</label>
    		<div class="col-sm-10">
          <input type="text" class="form-control" name="date" value="<?php echo date('Y-m-d')." "; echo date("h:i:sa"); ?>" readonly>
  		  </div>
      </div>  

        <div class="form-group row">
            <label for="pic" class="col-sm-2 col-form-label">Blog Image</label>
         <div class="col-sm-10">
            <input type="file" class="form-control-file" id="image" name="image">
             <img src="../Images/blog/<?php echo $blog['img'];?>" style="height: 100px; width: 100px;">
        </div>
     </div>

       <div class="form-group row">
            <label for="pic" class="col-sm-2 col-form-label">User Image</label>
         <div class="col-sm-10">
            <input type="file" class="form-control-file" id="userimage" name="userimage">
             <img src="../Images/bloguser/<?php echo $blog['userimg'];?>" style="height: 100px; width: 100px;">
        </div>
     </div>

	 <div class="form-group row">
		    <label for="shortdesc" class="col-sm-2 col-form-label">Short Description</label>
		     <div class="col-sm-10">
        <textarea class="form-control" id="shortdesc" name="shortdesc"><?php echo $blog['shortdes']; ?></textarea>
		   </div>
      </div>

    

		 <div class="form-group row">
          <label for="des" class="col-sm-2 col-form-label">*Blog Description</label>
          <div class="col-sm-10">
            <textarea id="editor" name="editor_content" rows="15" ><?php echo $blog['longdes']; ?></textarea>
          
          </div>
      </div>

	   <div class="form-group row text-center" style="display: block;">

    		 <input type="submit" class="btn btn-info" name="updateblog" value="Update">
      </div>
	  </form>
	</div>
</section>
<?php
}
 
?>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
		<script src="../assets/js/jquery/jquery-3.2.1.min.js"></script>
       <script src="https://cdn.quilljs.com/1.1.6/quill.js"></script>

<script type="text/javascript">
	$( document ).ready(function() {
		CKEDITOR.replace('editor');

	});
</script>
</body>
</html>