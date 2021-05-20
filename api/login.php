<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type: application/json,Access-Control-Allow-Methods,Authorization,X-Requested-With');


//initialising our api
include_once('../connection.php');
include_once('../core/volunteer.php');

if($conn)
{
    $vol = new Volunteer($conn);
    //get raw posted data
    $data = json_decode(file_get_contents('php://input'));

    $vol->email = $data->email;
    $vol->password = $data->password;

    $result = $vol->login();

    if($result!=null){

        echo json_encode(
            array('message'=>'Login Success','data'=>$result)
        );

    }else{

        echo json_encode(
            array('message'=>'Login Failed')
        );

    }
}
else
{
    echo "Connection Failed".mysqli_connect_error();
}

?>