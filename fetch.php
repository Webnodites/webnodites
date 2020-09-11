
<?php
$connect=mysqli_connect("localhost","root","","webnodites");

$limit = '3';
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
SELECT * FROM blog 
";

if($_POST['query'] != '')
{
  $query .= '
  WHERE title LIKE "%'.str_replace(' ', '%', $_POST['query']).'%" or category LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"
  ';
}

$query .= 'ORDER BY id DESC ';

$filter_query = $query . 'LIMIT '.$start.', '.$limit.'';

$res = mysqli_query($connect,$query);

$total_data = mysqli_num_rows($res);

$res = mysqli_query($connect,$filter_query);

$total_filter_data =mysqli_num_rows($res);

$output = '';
if($total_data > 0)
{
  foreach($res as $blog)
  {
    $output .= '
            <div class="post row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="Images/blog/'.$blog['img'].'" class="post-image">
              </div>  
              <div class="post-preview col-lg-8 col-md-8 col-sm-12">
                <h1><a href="blogdetail?id='.$blog['id'].'">'. $blog['title'].'</a></h1>
                <i class="fa fa-user">'.$blog['user'].'</i>
                  &nbsp;
                <i class="fa fa-calendar">'.$blog['date'].'</i>
                <p class="preview-text">
                    '.$blog['shortdes'].'
                  
                </p>
                <div class="read-more text-right">
                  <a href="blogdetail?id='.$blog['id'].'" class="int_btn ">Read More</a>
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
<div class="int_blog_pagination">
  <ul class="pagination">
              
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
    <li class="page-item active">
      <a class="page-link" href="">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
    </li>
    ';


    $previous_id = $page_array[$count] - 1;
    if($previous_id > 0)
    {
      $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'"><i class="fa fa-chevron-left"></i>Previous</a></li>';

    }
    else
    {
      $previous_link = '
      <li class="page-item disabled">
        <a class="page-link" >Previous</a>
      </li>
      ';
    }
    $next_id = $page_array[$count] + 1;
    if($next_id > $total_links)
    {
      $next_link = '
      <li class="page-item disabled">
        <a class="page-link" >Next</a>
      </li>
        ';
    }
    else
    {
       $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">Next<i class="fa fa-chevron-right"></i></a></li>';

     
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
