<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Assignment 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <div class="wrapper">
    <h2>Registration</h2>
    <form action="insert.php" method = "POST">
      <div class="input-box">
        <!-- // adding fields for inpu;t -->
        <input type="text" id="firstname" name="firstname" placeholder="Firstname" required> 
      </div>
      <div class="input-box">
        <input type="text" name="lastname" placeholder="Lastname" required>
      </div>
      <div class="input-box">
        <input type="text"  name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
    </form>
  </div>



</form>


    <?php
        //include "insert.php";
        //$query = "SELECT * FROM `crud`";
        //$rest = mysqli_query($connt, $query);
        //while ($data = mysqli_fetch_array($rest)) {
        // ?>
        <tr>

        
    </tr>
        <?php
        //}
        ?>
</table>

    
</body>
</html>
