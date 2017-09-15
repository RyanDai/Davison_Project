<?php

echo "here";
$connect = mysqli_connect("127.0.0.1","root","","sq_davison");




$output = "";

if(isset($_POST["query"])){
  $query = "
    Select * from company
  ";

  $result = mysqli_query($connect,$query);

  if(mysqli_num_rows($result) > 0){
    $output .="ok successful";
    echo $output;
  }

  //while($row = mysqli_fetch_array($result)){}
}



 ?>
