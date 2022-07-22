<!DOCTYPE html>
<html>


<body>


<?php 
  $Name=$_POST["name"];
  $Email=$_POST["email"];
  $user_password=$_POST["password"];
  $random=rand(10000,1000000);
  $servername = "localhost";
  $username = "root";
  $password = "akashiitian@2001A";
  $dbname="user_database";
  $conn = new mysqli($servername, $username, $password,$dbname);
  $ak="akash";
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql="INSERT INTO login_page (username,email,user_password,verfication)
  VALUES('$ak','akashmishra923427@gmail.com','akashiitian@2001A',false)";
  
  if($conn->query($sql)===True){
    echo "insert<br>";
  }
  else {
    echo "Error creating data: " . $conn->error."<br>";
  }



?>



</body>
</html>