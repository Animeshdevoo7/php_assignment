<!-- <?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    $status="";
    $msg="";
    $city="";
    if(isset($_POST['submit'])){echo "hello";
        $city=$_POST['city'];
        $url="https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid=8bf40a54d211530aef3dd96cde6b89ef";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        curl_close($ch);
        $result=json_decode($result,true);
        $status="yes";
        if ($result['cod']==200){
            $status="yes";
        }
        else {
            $msg=$result['message'];
        }
    }
    ?> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="header"><span class="logo"><img src="logo.jpg" alt="logo"></span> WEATHER APP</div>
    <div class="screen">
        <!-- inputing fields in the form -->
        <form action="report.php" method="POST" autocomplete="off">
      
        <input type="text" name="username" id="box1" placeholder="Username" ><br>
        <input type="text" name="city" id="box1" placeholder="City" ><br>
        
        <input type="Submit" value="SUBMIT" id="button1">
        </form>
        <?php
        // Starting and closing the session
        
       
           ?>
    </div>
    <div class="footer">
       

    </div>
    
</body>
</html>