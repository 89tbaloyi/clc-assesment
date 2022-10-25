<?php

require './config/connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>
    Register
</title>
</head>
<body>
    
    <!-- <i class="fa-solid fa-user"></i> -->
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6">


      <div class="card">
  <div class="card-header">
    Registration Form
  </div>
  <div class="card-body">
  <form method="post" id="myForm">
  <div class="form-group">
    <label >First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" id="lastname"  name="lastname" aria-describedby="last name">
    
  </div>
  <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control" id="username" name="username" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary" id="btnSubmit" >Submit</button>
</form>
  </div>
</div>
    
      </div>
    
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<?php include('ajax.js');?>    
</body> 
</html>