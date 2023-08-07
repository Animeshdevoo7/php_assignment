 
<?php
// setcookie('NAM','JAVAGV');
// echo $_COOKIE['NAM'];
// $name = $_POST["Name"];
// setcookie("name", $name, time()+30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY
    <input type="Submit" value="LOG IN" id="button4">
    </div>
    <div class="screen">
        <div class="bodytext">

        <?php
        session_start();
        // $cookie_name = 'name';
            // $name = $_POST["Name"];
        //    unset($_COOKIE['name']);
        //    setcookie('name',$name,time()+3,"/");
        //   setcookie("name", $name, time()+10, "/");
           echo "THANKS ";
           echo $_COOKIE['name']; 
           echo " ! <br> FOR SUBSCRIBING TO OUR NEWSLETTER";  
    
           header("refresh:10,url=login.php");
        session_destroy();
        // unset($_COOKIE['name']);

            // require "connection.php";
// $sno =$_POST["sno"];
        // $firstname=$_POST["name"];
      
//         echo '<br>'.$firstname.'<br>';
// // $sql="INSERT INTO `crud`.`cruds`(`firstname`,`lastname`,`email`) VALUES (`$firstname`,`$lastname`,`$email`)";
//     $sql="INSERT INTO `cookie`.`cookies` (firstname) VALUES ('$firstname')";

// echo  $sql;
// $result= mysqli_query($connt,$sql);
// echo 'succsss';


        //  $name = $_POST["Name"];
        // setcookie('name',$name,);
        // // session_start();
        // // echo $_COOKIE['NAM'];
        
        // // Starting  the session
        // // $_SESSION['start']=time();

        // echo "THANKS ". $_COOKIE['name']." ! <br> FOR SUBSCRIBING TO OUR NEWSLETTER";  
        
     ?>
        </div>   
    </div>
    <div class="footer">SUBSCRIBE TO OUR NEWSLETTER<br>
        <input type="text" name="username1"  placeholder="Name" id ="button3">
        <input type ="email" name="email"placeholder="EMAIL" id="button3">
        <input type="button" value="SUBMIT" id="button2">

    </div>
    
</body>
</html>