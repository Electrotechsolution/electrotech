<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin" *');

$con = mysqli_connect("localhost", "root", "", "electrotech");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
    // echo "Connected to MySQL";
}

$sql = "SELECT * FROM `web`";
$sql1 =  "SELECT * FROM `embedded`";
$sql2 =  "SELECT * FROM `header`";

$result = mysqli_query($con, $sql) or die ("SQL  Query Faild");
$result1 = mysqli_query($con, $sql1) or die ("SQL  Query Faild");
$result2 = mysqli_query($con, $sql2) or die ("SQL  Query Faild");


$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result1);
$row2 = mysqli_fetch_array($result2);

if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0) {

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $output1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
    $output2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    $output = array_merge($output, $output1 , $output2);
    echo json_encode($output);
    
  } else {
    echo json_encode(array('message:' => 'No Recode Found', 'Status' => 'False'));
  }
?>
