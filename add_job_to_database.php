<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>


<body class="">

<?php

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $job_des=$_POST["job_description"];
    $city=$_POST["city"];
    $country=$_POST["country"];
    $email=$_SESSION["email"];
    $city=strtolower($city);
    $country=strtolower($country); 
    if($email==NULL){
      echo '<script>alert("You need to login again")</script>';
      echo '<script>location.replace("../signup_page/signup_page.html")</script>';
  
     }
    include '../add_job.php';
    
    $sql="INSERT INTO job(Email,Job_Description,City,Country)
           VALUES ('$email','$job_des','$city','$country')";
    $conn->query($sql);
    
    echo '<script>alert("Job Added Successfully")</script>'; 
    echo '<script>location.replace("../Home_page/Home.php")</script>';
  }


?>


</body>


</html>