<?php

//headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,DELETE,PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once('../connection.php');

#get donation id from request body
$input = json_decode(file_get_contents('php://input'));

$donation_id = $input->donation_id;

$select_query = 'SELECT donation_id, name,number,email,latitude,longitude,time,vol_id from donation where donation_id='.$donation_id;
$select_result = mysqli_query($conn,$select_query);
while($row=$select_result->fetch_assoc()){
    $insert_query = 'INSERT into completed_donation values ('.$donation_id.',"'.$row['name'].'",'.$row['number'].',"'.$row['email'].'",'.$row['latitude'].','.$row['longitude'].',"'.$row['time'].'",'.$row['vol_id'].')';
    $insert_result = mysqli_query($conn,$insert_query);
}
if($insert_result){
    $delete_query = 'DELETE from donation where donation_id='.$donation_id;
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_query){
        echo json_encode(array('message'=>'success'));
    }else{
        echo json_encode(array('message'=>'failed'));
    }
}else{
    echo json_encode(array('message'=>'failed'));
}
?>