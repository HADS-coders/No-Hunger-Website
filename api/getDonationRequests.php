<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../connection.php');



$query = 'SELECT longitude,latitude from donation ';

$donation_id = isset($_GET['donation_id']) ? $_GET['donation_id'] : die();
echo $donation_id;
$stmt = $conn->prepare($query);
// $stmt->bind_param(1,$donation_id);\
$stmt->execute();
/* bind result variables */
$stmt->bind_result($longitude, $latitude);


while( $stmt->fetch()){
    echo $longitude;
}
// while ($row){
//     echo $longitude.'  '.$latitude;
// }

// $result = mysqli_query($conn,$query);
// $rows = $result->fetch_all(MYSQLI_ASSOC);
// foreach ($rows as $row) {
//     echo $row['longitude'];
// }

?>