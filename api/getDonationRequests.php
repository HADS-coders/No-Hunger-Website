<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../connection.php');

$query = 'SELECT longitude,latitude from donation';

$result = mysqli_query($conn,$query);
$data = $result->fetch_all(MYSQLI_ASSOC);
foreach ($data as $d) {
    echo $d['longitude'];
}

?>