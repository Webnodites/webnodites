<?php

$con=mysqli_connect("localhost","root","","webnodites");
session_start();
   
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
?>