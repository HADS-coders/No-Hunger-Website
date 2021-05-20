<?php

//headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once('../connection.php');

#get donation id from request body
$input = json_decode(file_get_contents('php://input'));

$donation_id = $input->donation_id;

$query = 'UPDATE donation set accepted = 1 where donation_id ='.$donation_id;
$result = mysqli_query($conn,$query);
if($result){
    echo json_encode(array('message'=>'success'));
}else{
    echo json_encode(array('message'=>'failed'));
}
?>