<?php

//initialising our api
include_once('../core/initialise.php');

$vol = new Volunteer($db);

//get raw posted data
$data = json_decode(file_get_contents('php://input'));

$vol->email = $data->email;
$vol->password = $data->password;

if($vol->login()){
    echo json_encode(
        array('message'=>'Login Success')
    );
}else{
    echo json_encode(
        array('message'=>'Login Failed')
    );
}

?>