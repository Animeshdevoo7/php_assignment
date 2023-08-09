<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    $status="";
    $msg="";
    $city="";
    if(!isset($_POST['submit'])){
        $city=$_POST['city'];
        $url="https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid=8bf40a54d211530aef3dd96cde6b89ef";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        curl_close($ch);
        $res=json_decode($result,true);
        //  var_dump($res['coord']);
        $status="yes";
        if ($res['cod']==200){
            $status="yes";
        }
        else {
            $msg=$res['message'];
        }
    }else {
        echo "error in displaying weather details";
    }
}
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header"><span class="logo"><img src="logo.jpg" alt="logo"></span>  Weather Report</div>
<!-- <form action="logout.php" method="POST">
<input type="Submit" value="LOG OUT" id="button3">
</form> -->
    <div class="screen">

        <div class ="bodytext">
        <?php   
        
         // Session starts
         session_start();   
        $name = $_POST["username"];
        if (empty($name)){
            echo "the name is empty";
        }
            // Validate email
            // if(filter_var(!$email, FILTER_VALIDATE_EMAIL)) {
            //     echo("$email is not a valid email address");
        
            else{
        echo  "The temperature is ". ($res['main']['temp']). " K<br>" ;
        echo  "The pressure is ". ($res['main']['pressure'])." atm<br>";
        echo  "The humidity is ". ($res['main']['humidity']). " %<br>";

            }
         
 
        ?>
        
        
        </div>
     
        
    </div>
    <div class="footer">
       

    </div>
    
</body>
</html>     