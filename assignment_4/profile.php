<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php">
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY
    <input type="Submit" value="LOGOUT" id="button4">
</form>
</div>
    <div class="screen">
        <!-- inputing profile details from the user -->
        <form action="about_us.php" method="POST" autocomplete="off">
        <div class ="bodytext">YOUR PROFILE DETAILS</div>
        <input type="text" name="interest" id="box1" placeholder="TOPICS OF INTEREST" required><br>
        <input type="text" name="education" id="box2" placeholder="EDUCATION" required   ><br>
        <input type="text" name="profession" id="box3" placeholder="PROFESSION" required><br>
        <input type="text" name="hobbies" id="box3" placeholder="HOBBIES" required><br>
        <input type="Submit" value="SUBMIT" id="button1">
        </form>
        <?php
        // Starting and closing the session
        session_start();
//         require "connection.php";
// // $sno =$_POST["sno"];
//         $interest=$_POST["interest"];
//         $education=$_POST["education"];
//         $profession=$_POST["profession"];
//         $hobbies=$_POST["hobbies"];
//         echo '<br>'.$firstname.$lastname.$email.'<br>';
// // $sql="INSERT INTO `crud`.`cruds`(`firstname`,`lastname`,`email`) VALUES (`$firstname`,`$lastname`,`$email`)";
//         $sql="INSERT INTO profdetails (interest,education,profession,hobbies) VALUES ('$interest','$education','$profession','$hobbies')";

// // echo  $sql;
// $result= mysqli_query($connt,$sql);
// echo 'succsss';




           ?>
    </div> 
    <!-- displaying message after subscribing to the newsletter -->
    <div class="footer">SUBSCRIBE TO OUR NEWSLETTER<br>
        <input type="email"  placeholder="EMAIL">
        <input type="button" value="SUBMIT" id="button2">

    </div>
    
</body>
</html>