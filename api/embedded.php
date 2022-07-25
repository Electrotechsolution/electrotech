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

$sql = "SELECT * FROM `embedded`";
$result = mysqli_query($con, $sql) or die ("SQL  Query Faild");
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
    
  } else {
    echo json_encode(array('message:' => 'No Recode Found', 'Status' => 'False'));
  }
?>
