<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "wheel2rent";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
?>