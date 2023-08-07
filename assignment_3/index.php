<?php
// $name = $_POST["Name"];
// setcookie("name", $name, time()+10, "/");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
// setting up the cookies
$name = $_POST["Name"];
setcookie("name", $name, time()+10);
header("Location:cookies.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- header class -->
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY</div>
    <div class="screen">
    </div>
    <form action="" method="post">
    <div class="footer">SUBSCRIBE TO OUR NEWSLETTER<br>
   <!-- inputting the values in the form -->
        <input type="text" name="Name"  placeholder="NAME" id ="button3">
        <input type ="email" name="email"placeholder="EMAIL" id="button3">
        <input type="submit" value="SUBMIT" id="button2">

    </div>
</form>
</body>
</html>