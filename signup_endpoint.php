<?php

require 'connection.php';

session_start();

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = sha1($_POST['password']);


$sql = "INSERT INTO users (fullname,email,username,password,role) VALUES ('$fullname','$email','$username','$password','regular')";
mysqli_query($conn,$sql) or die(mysql_error($conn));

$_SESSION['username'] = $username;
$_SESSION['role'] = 'regular';
header('location: home.php');
// $string = file_get_contents("assets/users.json");
// $users = json_decode($string, true);
// echo "original users array: "; print_r($users);

// $users[$username] = $password;
// echo "<br> new users array: "; print_r($users);

// $file = fopen("assets/users.json","w"); //open the json file
// fwrite($file, json_encode($users, JSON_PRETTY_PRINT)); //rewrite the json file
// fclose($file); //close the json file

?>