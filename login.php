<?php 

require_once './config/connection.php';

if(ISSET($_POST['btnLogin'])){
    
   if($_POST['username'] != "" || $_POST['password'] != ""){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $sql = "SELECT * FROM `users` WHERE `username`=? AND `password`=?";
    $query = $conn->prepare($sql);
    $query->execute(array($username,$password));
    $row = $query->rowCount();
    $fetch = $query->fetch();
    if($row > 0){
        header("location: http://localhost/register-app/welcome.php");
        }else{
            echo "Unsuccessful login.";
        }
    }
    
}
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
<div class="row mt-5 ml-5">
    <div class="col-md-6">
    <div class="card">
  <div class="card-header">
    login form
  </div>
  <div class="card-body">
  <form method="post">
  
  <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="username">    
  </div>
  
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary" id="btnLogin" name="btnLogin">log In</button>
</form>
  </div>
</div>
    </div>
</div>    

    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<?php include('ajax.js');?>    
</body> 
</div>
</html>