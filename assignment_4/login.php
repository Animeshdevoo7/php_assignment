<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY
<form action="profile.php" method="POST">
<input type="Submit" value="PROFILE" id="button4"><br>
</form>
<form action="index.php">
<input type="Submit" value="LOG OUT" id="button3">
</form>
</div>
    <div class="screen">

        <div class ="bodytext">
        <?php   
        // require "connection.php";
        // $username=$_POST["username"];
        // $sql="INSERT INTO profdetails (interest) VALUES ('$username')";
        // $result= mysqli_query($connt,$sql);
        //  // Session starts
        //  session_start();   
        $name = $_POST["username"];
        echo "HI ". $name. " ! <br> WE WELCOME YOU TO OUR <br>COMMUNITY";   
 
    //                     if(isset($_POST["Login"])) {
 
    // // Session Variables are created
    // $_SESSION["user"] = $username;  
 
    // // Login time is stored in a session variable
    // $_SESSION["login_time_stamp"] = time(); 
    // header("Location:logout.php");
    //                     }
        ?>
        
        
        </div>
        <!-- <input type="email" name="email" id="box1" placeholder="E-mail"><br> -->
        <!-- <input type="password" name="password" id="box2" placeholder="Password"><br>
        <input type="Submit" value="SUBMIT" id="button1"> -->
        <!-- </form> -->
        
    </div>
    <div class="footer">SUBSCRIBE TO OUR NEWSLETTER<br>
        <input type="email"  placeholder="EMAIL">
        <input type="button" value="SUBMIT" id="button2">

    </div>
    
</body>
</html>     