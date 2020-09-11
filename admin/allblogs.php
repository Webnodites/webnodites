<?php

include('connect.php');
$data = "select * from blog";
$res = mysqli_query($con,$data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>All Blogs</title>
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

<div class="allblogs">
  <table class="table table-responsive">
    <thead class="thead-light">
      <tr>
        <th scope="col">#SR.NO</th>
        <th scope="col">BLOG NAME</th>
        <th scope="col">BLOG Category</th>
        <th scope="col">BLOG IMAGE</th>
        <th scope="col">LAST UPDATE</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $index = 0;
          foreach ($res as $blog) 
          {
            $index++;
        ?>
        <tr>
          <td scope="row"><?php echo $index;?></td>
          <td><a href="blogdetail.php?blogid=<?php echo $blog['id'];?>"><?php echo $blog['title'];?></a></td>
          <td><?php echo $blog['category'];?></td>
          <td><img src="../Images/blog/<?php echo $blog['img'];?>"></td>
          <td>On <?php echo $blog['date'];?> </td>
          <?php
             if($blog['status'] == 'Active')
             {
                echo "<td><a href='editblog.php?blogid=".$blog['id']."'><i class='fa fa-pencil-square-o'></i></a> <a href='control.php?nm=deactivate&blogid=".$blog['id']."'>Deactivate</a></td>";
              }
              else
              {
                 echo "<td><a href='editblog.php?blogid=".$blog['id']."'><i class='fa fa-pencil-square-o'></i></a> <a href='control.php?nm=activate&blogid=".$blog['id']."'>Activate</a></td>";
              }
          ?>
        </tr>
        <?php
      }
        ?>
   
    </tbody>
  </table>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</body>
</html>