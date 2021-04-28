<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initialising our api
include_once('../core/initialise.php');

//insantiate person
$person = new Person($db);

$person->pid = isset($_GET['pid']) ? $_GET['pid'] : die();

//get person
$person->read_single();


$person_arr = array(
    'pid' => $person->pid,
    'fname' => $person->fname,
    'lname' => $person->lname,
    'email' => $person->email,
    'phone' => $person->phone,
    'username' => $person->username,
    'password' => $person->password,
);

//make json
print_r(json_encode($person_arr));

?>