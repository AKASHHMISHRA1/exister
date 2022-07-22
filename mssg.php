<?php 
  session_start();
?>
<!DOCTYPE html>
<html>

<body>


<?php
    require 'mail/PHPMailerAutoload.php';
    
    $mail = new PHPMailer;
    
    $to = $_GET['email'];
    
    //$mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'akashnarayanmishra78@gmail.com';
    $mail->Password = '';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    
    $mail->setFrom('rafawins@gmail.com', 'Rafael');
    
    $mail->addAddress($to);
    
    $mail->isHTML(true);
    
    $mail->Subject = 'Subject';
    $contents = ob_get_contents();
    $mail->Body    = "ao!";
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    print_r(error_get_last());
    

?>

</body>

</html>