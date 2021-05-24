<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../connection.php');

#get vol id from GET request
$vol_id = isset($_GET['vol_id']) ? $_GET['vol_id'] : die();

#fetch lat, lang, range from db of vol
$query = "SELECT * from vol where vol_id=".$vol_id;
$result = mysqli_query($conn,$query);

if($result){
    $data = $result->fetch_assoc();
    echo json_encode(array("data"=>$data));
}
?>