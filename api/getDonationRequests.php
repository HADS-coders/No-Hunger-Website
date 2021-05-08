<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../connection.php');



$query = 'SELECT longitude,latitude from donation where donation_id=?';

$stmt = $conn->prepare($query);
$stmt->bind_param(1,1);

$result = mysqli_query($conn,$query);
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
    echo $row['longitude'];
}

?>