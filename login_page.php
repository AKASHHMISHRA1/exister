<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="login_page.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img src="login_page.jpg" alt="Cinque Terre" width="100%" height="1000">
<form method="post" action="verification.php" target="_self" class="align">
        
        Verfication: <input type="number" name="verf" required><br><br>
        <input type="submit">
</form>

<p>image source:google</p>
<?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
      $Name=$_POST["name"];
      $Email=$_POST["email"];
      $user_password=$_POST["password"];
      $random=rand(10000,1000000);
      $servername = "localhost";
      $username = "root";
      $password = "akashiitian@2001A";
      $dbname="user_database";
      echo $Name ."hi<br>";
      $conn = new mysqli($servername, $username, $password,$dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql="CREATE TABLE login_page(
        username  VARCHAR(100),
        email VARCHAR(50),
        user_password VARCHAR(50),
        mobile_number INT(20),
        verfication BOOLEAN,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
          )";
      
      $conn->query($sql);

      $sql="SELECT email FROM login_page
            where email='$Email'";
      $check=$conn->query($sql); 
      //echo $check->num_rows . "<br>";
      if($check->num_rows==0){
          
          $sql="INSERT INTO login_page (username,email,user_password,verfication)
          VALUES('$Name','$Email','$user_password',false)";
          $conn->query($sql);
          
          $mssg="Your verification password is ".$random;
          echo $mssg;
          if(mail($Email,"Exister",$mssg)){
            echo "mail sent.<br>";
          }
          $_SESSION["email"]=$Email;
          $_SESSION["random"]=$random;

      }
      else{

        echo '<script>alert("Email address is already taken")</script>';
        echo '<script>location.replace("login_page.html")</script>';
        

        

      }



      

    

   }

?>


</body>

</html>