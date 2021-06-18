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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="#">
      <img src="../Logo/Logo.png" alt="Logo" class="rounded-circle"width="50px;">

  </a>
  <ul class="navbar-nav">
      <li>
         <a class="nav-link" href="../Home_page/Home.php">Home</a> 
      </li>
      <li>
         <a class="nav-link active" href="../Create job/create_job.php">Create a Job</a> 
      </li>
      <li>
         <a class="nav-link" href="../Search job/search_job.php">Search a Job</a>
      </li>
  
  
  </ul>

</nav>
<div class="container p-3">
<form action="add_job_to_database.php" method="POST" class="was-validated">
   <div class="form-group">
     <label for="job_description">Job Description:</label>
     <input type="text" class="form-control" id="job_description" name="job_description" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>
   <div class="form-group">
     <label for="city">City:</label>
     <input type="text" class="form-control" id="city" name="city" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>
   <div class="form-group">
     <label for="country">Country:</label>
     <input type="text" class="form-control" id="country" name="country" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>

   <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>


</html>