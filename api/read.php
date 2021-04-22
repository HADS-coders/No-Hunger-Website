<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initialising our api
include_once('../core/initialise.php');

try{

    //insantiate person
    $person = new Person($db);

    //get person
    $result = $person->read();

    //get row count
    $num = $result->rowCount();

    if($num > 0){
        $person_arr = array();
        $person_arr['data'] = array();
        
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            print_r($row);
            $person_item = array(
                'pid' => $PID,
                'fname' => $fname,
                'lname' => $lname,
                'email' => $email,
                'phone' => $phone,
                'username' => $username,
                'password' => $password,
            );
            array_push($person_arr['data'], $person_item);
        }

        //convert to json
        echo json_encode($person_arr);
    }else{
        echo json_encode(array('message' => 'No person found'));
    }
}
catch (PDOException $e){
    echo $e->getMessage();
}

?>