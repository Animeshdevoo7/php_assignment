<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY</div>
    <div class="screen">
        <form action="save.php" method="get" autocomplete="off">
        <div class ="bodytext">LOGIN</div>
        <input type="text"  name="username" id="box1" placeholder="Username" ><br>
        <select  name="country" id="box2" placeholder="country" >
            <option value="">SELECT COUNTRY</option>
            <option >India</option>
        </select><br>
        <select  name="state" id="box3" placeholder="state" >
            <option value="">SELECT STATE</option>
            <option>mp</option>
        </select><br>
        <select  name="city" id="box3" placeholder="city" >
            <option value="">SELECT CITY</option>
            <option>rewa</option>
        </select><br>
        <input type="Submit" value="SUBMIT" id="button1">
        
         <?php
        require "connection.php";
        $username=$_POST["username"];
        $country=$_POST["country"];
        $state=$_POST["state"];
        $city=$_POST["city"];
     //    echo '<br>'.$firstname.$lastname.$email.'<br>'
// $sql="INSERT INTO `crud`.`cruds`(`firstname`,`lastname`,`email`) VALUES (`$firstname`,`$lastname`,`$email`)";
        $sql="INSERT INTO u_add (`username`,`country`,`state`,`city`) VALUES ('$username','$country','$state','$city')";

// echo  $sql;
$result= mysqli_query($connt,$sql);

        
           ?> 
        </form>
    </div>
    <div class="footer">SUBSCRIBE TO OUR NEWSLETTER<br>
        <input type="email"  placeholder="EMAIL">
        <input type="button" value="SUBMIT" id="button2">

    </div>
    
</body>
</html>