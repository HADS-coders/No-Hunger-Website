<?php
#get data from login page
session_start();
$vol_id = $_SESSION['vol_id'];

#get response fron api
// $response = file_get_contents('https://pure-mountain-72218.herokuapp.com/api/getDonationRequests?longitude=73.106938&latitude=18.986312&range=5');
$response = file_get_contents('https://pure-mountain-72218.herokuapp.com/api/getDonationRequests?vol_id='.$vol_id);
$data_arr = json_decode($response)->data;
?>

<html>
    <body>
        <p style="font-size: 30px;">Food Donation Request Detail</p>

        <?php
        #loop through each donation request display data
        if($data_arr!=null) {
            
            foreach ($data_arr as $data) {
                $foodItems = $data->foodItems; ?>

                <!-- html here for building single food request  -->

                <div class="request-box">
                    <p>Name: <?php echo $data->donation->name; ?></p>
                    <p>Email: <?php echo $data->donation->email; ?></p>
                    <p>Number: <?php echo $data->donation->number; ?></p>
                    <p>Food Type: <?php echo $data->food->type; ?></p>

                    <?php
                        #inner for loop to loop through each food Items
                    foreach ($foodItems as $foodItem) { ?>
                        <p>Food Name: <?php echo $foodItem->name; ?></p>
                        <p>Amount: <?php echo $foodItem->amount; ?></p>
                    <?php } ?>
                </div>

                <?php
                #closing of for loop
                }
        }
        else {  ?>
            <p>No food donation request now!</p>
        <?php    } ?>
    </body>
</html>
<style>

.request-box{
    background-color: greenyellow;
    padding: 10px 10px;
    margin: 10px 0px;
}
</style>