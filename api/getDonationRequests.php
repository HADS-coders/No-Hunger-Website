<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../connection.php');

#get vol id from GET request
$vol_id = isset($_GET['vol_id']) ? $_GET['vol_id'] : die();

#fetch lat, lang, range from db of vol
$query = "SELECT longitude,latitude,rangeKm from vol where vol_id=".$vol_id;
$result = mysqli_query($conn,$query);
while($row = $result->fetch_assoc()){
    $vol_latitude = $row['latitude'];
    $vol_longitude = $row['longitude'];
    $range = $row['rangeKm'];
}

//get all donation req lat lab from db
$query = 'SELECT donation_id,longitude,latitude,vol_id from donation order by time desc';

$result = mysqli_query($conn,$query);

$filtered_id = array();

while($row = $result->fetch_assoc()){
    $donation_id = $row['donation_id'];
    $latitude = $row['latitude'];
    $longitude = $row['longitude'];
    $donation_vol_id = $row['vol_id'];

    if($donation_vol_id==null or $vol_id==$donation_vol_id){
        $distance = getDistanceBetweenPointsNew($latitude,$longitude,$vol_latitude,$vol_longitude,'kilometers');
        if($distance <= $range){
            array_push($filtered_id,$donation_id);
        }
    }
}

$filtered_data = array();
$filtered_data['data'] = array();

//for each id in filtered_id , get and save data to list
foreach($filtered_id as $id){

    $request = array();
    $donation = array();
    $food=array();
    $foodItems = array();

    //get donation detail 
    $query = 'select * from donation where donation_id = '.$id;
    $result = mysqli_query($conn,$query);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach($rows as $row){
        $donation = array(
            'donation_id'=>$row['donation_id'],
            'name'=>$row['name'],
            'email'=>$row['email'],
            'number'=>$row['number'],
            'time'=>$row['time'],
            'latitude'=>$row['latitude'],
            'longitude'=>$row['longitude'],
            'accepted'=>$row['accepted'],
        );
        $donation_id = $row['donation_id'];

        //get food detail
        $query = 'select * from food where donation_id = '.$id;
        $result = $conn->query($query);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $food_id = 0;
        foreach($rows as $row){
            $food = array(
                'food_id'=>$row['food_id'],
                'type'=>$row['type'],
                'havePackets'=>$row['havePackets'],
                'time'=>$row['time'],
            );
            $food_id = $row['food_id'];
        }

        //get foodItems detail
        $query = 'select * from foodItem where food_id = '.$food_id;
        $result = $conn->query($query);
        $rows = $result->fetch_all(MYSQLI_ASSOC);

        foreach($rows as $row){
            $foodItem = array(
                'food_id'=>$row['food_id'],
                'name'=>$row['name'],
                'amount'=>$row['amount'],
            );
            #adding individual food item to foodItems array
            array_push($foodItems,$foodItem);
        }

    }
    $request['donation'] = $donation;
    $request['food'] = $food;
    $request['foodItems'] = $foodItems;
    array_push($filtered_data['data'],$request);
}

echo json_encode($filtered_data);


function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'miles') {
    $theta = $longitude1 - $longitude2; 
    $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta))); 
    $distance = acos($distance); 
    $distance = rad2deg($distance); 
    $distance = $distance * 60 * 1.1515; 
    switch($unit) { 
      case 'miles': 
        break; 
      case 'kilometers' : 
        $distance = $distance * 1.609344;
    } 
    return (round($distance,2)); 
  }

?>