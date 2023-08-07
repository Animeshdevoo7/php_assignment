 <?php
$email=$_POST['email'];
// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   header("location:login.php");
}
else  {
   echo("$email is not a valid email address");
}
   ?> 