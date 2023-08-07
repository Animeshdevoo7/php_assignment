<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- inputing in fields -->
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY</div>
    <div class="screen">
        <form action="index.php" method="POST" >
        <input type="Submit" value="LOG IN" id="button3">
        <div class ="bodytext1">
            <?php
            session_start();
            echo "YOU'VE LOGGED OUT ";

            session_destroy();
                        
                            // Destroying All Sessions

                // header("Location:index.php"); // Redirecting To Home Page
  
            ?>
        </div>
        <!-- <input type="text" name="username" id="box1" placeholder="Username"><br>
        <input type="email" name="email" id="box2" placeholder="E-mail"><br>
        <input type="password" name="password" id="box3" placeholder="Password"><br>
          <input type="Submit" value="SUBMIT" id="button1">  -->
        </form>
        
    </div>
    <div class="footer">SUBSCRIBE TO OUR NEWSLETTER<br>
        <input type="email"  placeholder="EMAIL">
        <input type="button" value="SUBMIT" id="button2">

    </div>
    
</body>
</html> 