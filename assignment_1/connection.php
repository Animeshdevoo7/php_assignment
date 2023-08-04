<?php
$servername = "localhost";
$username = "root";
$password = "Admin@123";
$dbname = "crud";

$connt = mysqli_connect($servername,$username, $password,"$dbname");
if ($connt->connect_error ) {
    die("Connection error:" .$connt->connect_error);
}
echo "Connected successfully";



?>