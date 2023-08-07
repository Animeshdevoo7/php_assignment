<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY
<form action="logout.php" method="POST">
<input type="Submit" value="LOG OUT" id="button3">
</form>
</div>
    <div class="screen">

        <div class ="bodytext">
        <?php   
        
         // Session starts
         session_start();   
        $name = $_POST["username"];
        if (empty($name)){
            echo "the name is empty";
            $email=$_POST['email'];
        }
            // Validate email
            // if(filter_var(!$email, FILTER_VALIDATE_EMAIL)) {
            //     echo("$email is not a valid email address");
        
            else{
        echo "HI ". $name. " ! <br> WE WELCOME YOU TO OUR <br>COMMUNITY";  
            }
         
 
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