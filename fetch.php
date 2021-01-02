
<?php
include('connect.php');


$limit = '4';
$page = 1;

if($_POST['page'] > 1)
{
  $start = (($_POST['page'] - 1) * $limit);
  $page = $_POST['page'];
}
else
{
  $start = 0;
}

$query = "
SELECT * FROM blog where status = 'Active'
";



$query .= 'ORDER BY id DESC ';

$filter_query = $query . 'LIMIT '.$start.', '.$limit.'';

$res = mysqli_query($con,$query);

$total_data = mysqli_num_rows($res);

$res = mysqli_query($con,$filter_query);

$total_filter_data =mysqli_num_rows($res);

$output = '';
if($total_data > 0)
{
  foreach($res as $blog)
  {
    $output .= '

            <div class="blog_section" id="blog" >
              <div class="blog-inner">
                <div class="row">
                    <div class="col-lg-5 img-area-2">
                        <div class="img-area">
                            <div class="img" style="background:url(images/blog/'.$blog['img'].');background-size: cover;background-repeat: no-repeat;    background-position: center;"></div>
                        </div>
                    </div>
                    <div class="col-lg-7" style="padding-top:20px;">
                        <div class="text-area">
                            <p class="date"><i class="fa fa-calendar"></i> '.$blog['date'].'</p>
                            <p class="authore"><i class="fa fa-user"></i> '.$blog['user'].'</p>
                            <a href="blogdetail.php?id='.$blog['id'].'"><h1>'. $blog['title'].'</h1></a>
                            <p class="detial" id="_detial">
                                      '.$blog['shortdes'].'
                                      </p>
                            <a class="btn read-more-btn" href="blogdetail.php?id='.$blog['id'].'">Read More
                            </a>

                        </div>
                    </div>
                </div>
              </div>
            </div>
            ';
  }
}
else
{
  $output .= '
  <div class="int_blog_box">
  <p>No Data Found</p>
  </div>
  ';
}

$output .= '
<br />
<div class="page_link_div" id="pagging">
  <ul class="pagination justify-content-center  md-5">
              
';
$page_array[] = '';
$total_links = ceil($total_data/$limit);
$previous_link = '';
$next_link = '';
$page_link = '';

//echo $total_links;

if($total_links > 4)
{
  if($page < 5)
  {
    for($count = 1; $count <= 5; $count++)
    {
      $page_array[] = $count;
    }
    $page_array[] = '...';
    $page_array[] = $total_links;
  }
  else
  {
    $end_limit = $total_links - 5;
    if($page > $end_limit)
    {
      $page_array[] = 1;
      $page_array[] = '...';
      for($count = $end_limit; $count <= $total_links; $count++)
      {
        $page_array[] = $count;
      }
    }
    else
    {
      $page_array[] = 1;
      $page_array[] = '...';
      for($count = $page - 1; $count <= $page + 1; $count++)
      {
        $page_array[] = $count;
      }
      $page_array[] = '...';
      $page_array[] = $total_links;
    }
  }
}
else
{
  for($count = 1; $count <= $total_links; $count++)
  {
    $page_array[] = $count;
  }
}

for($count = 1; $count < count($page_array); $count++)
{
  if($page == $page_array[$count])
  {
     $page_link .= '
     <li class="page-item active" title="Previous">
        <a class="page-link" href="" >'.$page_array[$count].' <span class="sr-only">(current)</span></a>
      </li>

    ';


    $previous_id = $page_array[$count] - 1;
    if($previous_id > 0)
    {
      $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'"><i class="fa fa-chevron-left"></i></a></li>';

    }
    else
    {
      $previous_link = '
      <li class="page-item disabled">
        <a class="page-link" ><i class="fa fa-chevron-left"></i></a>
      </li>
      ';
    }
    $next_id = $page_array[$count] + 1;
    if($next_id > $total_links)
    {
      $next_link = '
      <li class="page-item disabled">
        <a class="page-link" ><i class="fa fa-chevron-right"></i></a>
      </li>
        ';
    }
    else
    {
       $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'"><i class="fa fa-chevron-right"></i></a></li>';

     
    }
  }
  else
  {
    if($page_array[$count] == '...')
    {
      $page_link .= '
      <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
      </li>
      ';
    }
    else
    {
      $page_link .= '
      <li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>
      ';
    }
  }
}

$output .= $previous_link . $page_link . $next_link;
$output .= '
  </ul>

</div>
';

echo $output;

?>
