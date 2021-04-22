<?php
$servername = "remotemysql.com";
$username = "qW0jycIN5x";
$password = "Q3xqkQtsDA";
$dbname = "qW0jycIN5x";

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