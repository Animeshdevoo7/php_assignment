<?php
require "connection.php";
// fetching details from post method
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
echo '<br>'.$firstname.$lastname.$email.'<br>';
// inserting details in the database
$sql="INSERT INTO crud (firstname,lastname,email) VALUES ('$firstname','$lastname','$email')";

// echoing connection;
$result= mysqli_query($connt,$sql);
echo 'succsss';

?>