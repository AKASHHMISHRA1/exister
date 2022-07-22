<?php  
  session_start();
?>
<!DOCTYPE html>
<html>

<body>

<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $verf_number=$_POST["verf"];
    $email=$_SESSION["email"];
    $number=$_SESSION["random"];
    $servername = "localhost";
    $username = "root";
    $password = "akashiitian@2001A";
    $dbname="user_database";
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql="SELECT email from login_page
    where email=$email";
    
    
    if($verf_number==$number){
          $sql="UPDATE login_page set verification=true where email='$email' ";
          $conn->query($sql);
          echo '<script>location.replace("Home.php")</script>';
          
    }
    else{
            echo '<script>alert("Verification number is not correct")</script>';
            echo '<script>location.replace("wrong_verification.php")</script>';
            
    }

    
    

}

?>


</body>

</html>