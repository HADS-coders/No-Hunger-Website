<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hunger";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    // echo "Connection OK";
}
else
{
    echo "Connection Failed".mysqli_connect_error();
}
?>