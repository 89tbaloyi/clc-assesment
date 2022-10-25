<?php
require './config/connection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = md5 ($_POST['password']);

$sql = "INSERT INTO `users` (`firstname`,`lastname`,`username`,`password`) VALUES ('$firstname','$lastname','$username','$password')";

$result = $conn->query($sql);

if ($result == TRUE){
//  header("location: http://localhost/register-app/login.php");

}else{
    echo "Error:".$sql ."<br>" .$conn->error;

}

?>

