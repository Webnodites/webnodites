<?php
$con=mysqli_connect("localhost","root","","webnodites");
session_start();

if(isset($_POST["login-btn"]))
{
	$name = $_POST["username"];
	$psw = $_POST["pass"];

	$q="select * from admin where username='$name' and password ='$psw'";
	$rs = mysqli_query($con,$q);
	$a=0;
	
	while($r=mysqli_fetch_array($rs))
	{
		$a=1;
		$name=$r[1];
		$psw=$r[2];
	}
	
	if($a==1)
	{
		$_SESSION["username"]=$name;
		$_SESSION["password"]=$psw;
		header("location:addblog.php");
	}
    else
	{
		echo "<script> alert('Invalid user name or password') </script>";
		
    } 

}    
?>		

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	
	<div class="limiter">
		<div class="headbar">
			<h2><a href="../index.html" style="color: white;font-size:30px;text-decoration: none;font-weight: 600; ">Webnodites</a> Admin</h2>
		</div>
		<div class="container-login">

			<div class="wrap-login">
				<form class="login-100form validate-form" action="index.php" method="post">
					
					<span class="txt1 p-b-11">
						Username *
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Username is required" >
						<input class="input100" type="text" name="username" required>
						
					</div>
					
					<span class="txt1 p-b-11">
						Password *
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Password is required" >
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" required>
						
					</div>
					
					
					<div class="login-form-btn">
						<button class="form-btn" name="login-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	<script src="../js/jquery/jquery-3.2.1.min.js"></script>

	<script src="../js/login.js"></script>

</body>
</html>