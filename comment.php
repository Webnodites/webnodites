<?php
$con = mysqli_connect('localhost','root','','webnodites');
if(!$con)
{
	echo "error";
}
extract($_POST);

if(isset($_POST['name']) && isset($_POST['msg']) && isset($_POST['email']) && isset($_POST['bid']))
{
$insq ="INSERT INTO `comment`(`blog_id`, `c_name`, `c_email`, `c_msg`,`time`) 
						VALUES ($bid,'$name','$email','$msg','$date')";

$res1 = mysqli_query($con,$insq); 
}

if(isset($_POST['readdt']))
{
	$data = '';
	$showq = "select * from comment where blog_id = $bid";
    $res2 = mysqli_query($con,$showq);
    foreach ($res2 as $cmt)
     {
   
   	$data = $data.'<li class="comment">
                   <div class="comment-body">
                      <h3>'.$cmt['c_name'].'</h3>
                      <div class="meta mb-3">'.$cmt['time'].'</div>
                      <p>'.$cmt['c_msg'].'</p>
                      
                    </div>
                  </li>';

	}
	echo $data;

}

if(isset($_POST['delid']))
{
	$delq= "DELETE FROM std_record WHERE sid= $delid";
	mysqli_query($con,$delq);
}



?>