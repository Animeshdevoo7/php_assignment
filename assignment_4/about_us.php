<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY <span class="profbar"><img src="pbar.png"></span>
<form action="logout.php" method="POST">
<input type="Submit" value="LOG OUT" id="button3">
</form>
</div>
    <div class="screen">

        <div class ="bodytext">
        <?php   
        // about us
           echo "About us: <br> The developer community in India comprises information technology servicesand business
           process outsourcing.";
           require "connection.php";
           // $sno =$_POST["sno"];
        //    inserting into the database
                   $interest=$_POST["interest"];
                   $education=$_POST["education"];
                   $profession=$_POST["profession"];
                   $hobbies=$_POST["hobbies"];
                //    echo '<br>'.$firstname.$lastname.$email.'<br>'
           // $sql="INSERT INTO `crud`.`cruds`(`firstname`,`lastname`,`email`) VALUES (`$firstname`,`$lastname`,`$email`)";
                   $sql="INSERT INTO profdetails (interest,education,profession,hobbies) VALUES ('$interest','$education','$profession','$hobbies')";
           
           // echo  $sql;
           $result= mysqli_query($connt,$sql);

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