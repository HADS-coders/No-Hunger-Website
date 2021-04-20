<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type: application/json,Access-Control-Allow-Methods,Authorization,X-Requested-With');

//initialising our api
include_once('../core/initialise.php');

//insantiate person
$person = new Person($db);

//get raw posted data
$data = json_decode(file_get_contents('php://input'));

$person->fname = $data->fname;
$person->lname = $data->lname;
$person->email = $data->email;
$person->phone = $data->phone;
$person->username = $data->username;
$person->password = $data->password;

if($person->add()){
    echo json_encode(
        array('message'=>'Person added')
    );
}else{
    echo json_encode(
        array('message'=>'Person not added')
    );
}

?>