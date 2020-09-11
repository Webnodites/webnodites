<?php

include('connect.php');

$blogid = $_GET['blogid'];
$action= $_GET['nm'];


if($action == 'activate')
{
	$b= "UPDATE `blog` SET `status`='Active' WHERE id = $blogid";
	$rs2 = mysqli_query($con,$b);
	header("location:allblogs.php");
}

if($action == 'deactivate')
{
	$b= "UPDATE `blog` SET `status`='Deactive' WHERE id = $blogid";
	$rs2 = mysqli_query($con,$b);
	header("location:allblogs.php");
}
?>