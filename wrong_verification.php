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


</body>
</html>