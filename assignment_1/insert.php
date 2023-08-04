<?php
require "connection.php";
// $sno =$_POST["sno"];
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
echo '<br>'.$firstname.$lastname.$email.'<br>';
// $sql="INSERT INTO `crud`.`cruds`(`firstname`,`lastname`,`email`) VALUES (`$firstname`,`$lastname`,`$email`)";
$sql="INSERT INTO crud (firstname,lastname,email) VALUES ('$firstname','$lastname','$email')";

// echo  $sql;
$result= mysqli_query($connt,$sql);
echo 'succsss';

?>