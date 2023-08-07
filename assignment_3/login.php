<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- inputing the values in the form -->
    <div class="header"><span class="logo"><img src="logo.png" alt="logo"></span>  DEV COMMUNITY</div>
    <div class="screen">
        <form action="login.php" method="POST" autocomplete="off">
        <div class ="bodytext">LOGIN</div>
        <input type="text" name="username" id="box1" placeholder="Username" required><br>
        <input type="email" name="email" id="box2" placeholder="E-mail" required   ><br>
        <input type="password" name="password" id="box3" placeholder="Password" required><br>
        <input type="Submit" value="SUBMIT" id="button1">
        </form>
        <?php
        // Starting and closing the session
        session_start();
        session_destroy();
           ?>
    </div>
    <div class="footer">SUBSCRIBE TO OUR NEWSLETTER<br>
        <input type="email"  placeholder="EMAIL">
        <input type="button" value="SUBMIT" id="button2">

    </div>
    
</body>
</html>