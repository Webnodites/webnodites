
<html>
<head>
    <style>
        .swal-text {
            font-size: 18px;
            text-align:center;
        }
        .swal-title {
            color: #000c2d;
            font-size:28px;
        }
        .swal-button {
            background-color: #000c2d;
            font-size:16px;
        }
        .swal-button:hover {
            background-color: #000c2d;
        }
        .swal-button:focus {
            background-color: #000c2d;
        }
        .swal-button:not([disabled]):hover {
            background-color: #000c2d;
        }
    </style>
	<title></title>
	<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>   
     <script src="sweetalert2.min.js"></script>
</body>
</html>
<?php
echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

$mailcontent = file_get_contents("emailrec.php");

if(isset($_POST["submitbtn"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$pcode=$_POST["countrycode"];
	$phone=$_POST["phone"];
	$subject=$_POST["subject"];
	$msg=$_POST["msg"];
	
	if($subject != "For Enquiry")
	{
	    $sub = "Enquiry For ".$subject;
	}
	else{
	    $sub = $subject;
	}
	
    
    $variables = array(
        "{{name}}" => $name,
        "{{email}}" => $email,
        "{{mobile}}" => "+".$pcode." ".$phone,
        "{{sub}}" => $sub,
        "{{msg}}" => $msg
        );

	
	$to="contact@webnodites.in";
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:'.$email;
	
	
	
	foreach($variables as $key => $value)
	{
	    $mailcontent = str_replace($key, $value, $mailcontent);
	}
    
	$sendmail = mail($to,$sub,$mailcontent,$headers);
	if($sendmail){
		echo "<script>swal({
				  title: 'Thank You!',
				  text: 'We appreciate you for contacting Webnodites.We\'ll revert back to you soon!',
				  icon: 'success',
				  button: 'Ok!',
				}).then(function(){
			         window.location.href='index';
			         });
			   </script>";
	}
	else{
	
		echo "<script>
			swal({
				  title: 'Oops!',
				  text: 'Something Went Wrong! Try Again',
				  icon: 'error',
				  button: 'Ok!',
				}).then(function(){
			         window.location.href='contactdemo2?sub=For%20Enquiry';
			         });  
			</script>";

		}

}


?>