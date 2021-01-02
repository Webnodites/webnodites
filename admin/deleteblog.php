<?php
include('connect.php');

$blogid = $_GET['blogid'];
$q = "delete from blog where id = $blogid";
$res1 = mysqli_query($con,$q);

if($res1){
	echo "<script>
      alert('Blog delete Successfully')
      </script>";
     header("location:allblogs.php");
}
else{
	echo "<script>
      alert('error')
      </script>";
     header("location:allblogs.php");
}

?>