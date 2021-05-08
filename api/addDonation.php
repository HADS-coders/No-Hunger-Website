<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type: application/json,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once("../connection.php");

if($conn){
    include_once("../core/donation.php");

    $donation = new Donation($conn);
    
    $data = json_decode(file_get_contents('php://input'));

    $donation->name = $data->name;
    $donation->email = $data->email;
    $donation->number = $data->number;
    $donation->longitude = $data->longitude;
    $donation->latitude = $data->latitude;
    $donation->food = json_encode($data->food);
    $donation->time = $data->time;

    
    //add donation to db
    $result = $donation->add();

    if($result){
        echo json_encode(array('message'=>'Success'));
    }else {
        echo json_encode(array('message'=>'Failed'));
    }

}

?>