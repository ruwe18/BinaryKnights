<?php
  $json = file_get_contents('database.json');
  $json_data_all = json_decode($json, true);
  $username = $_POST['user'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  $interesses = $_POST['interests'];

  session_start();

  $_SESSION['user'] = $username;
  $json_data_all["logins"][$username] = ["user"=>$username, "password"=>$password,"personname"=>$name,"interesses"=>$interesses];
  
  file_put_contents('database.json',json_encode($json_data_all));
  header('Location: projects.php');
  exit();
?>