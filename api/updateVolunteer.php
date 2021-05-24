<?php

//headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once('../connection.php');

#get vol id from request body
$input = json_decode(file_get_contents('php://input'));

$vol_id = $input->vol_id;
$name = $input->name;
$email = $input->email;
$number = $input->number;
$rangeKm = $input->rangeKm;

$query = 'UPDATE vol set name = "'.$name.'",email = "'.$email.'",number = '.$number.',rangeKm = '.$rangeKm.' where vol_id ='.$vol_id;
$result = mysqli_query($conn,$query);

if($result){
    echo json_encode(array('message'=>'success'));
}else{
    echo json_encode(array('message'=>'failed'));
}
?>