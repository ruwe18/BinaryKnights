<?php
  $json = file_get_contents('database.json');
  $json_data_all = json_decode($json, true);
  $name = $_POST['user'];
  $senha = $_POST['password'];
  $result = 0;


  foreach($json_data_all["logins"] as $conta){
    if ($name == $conta["user"] and $senha == $conta["password"]) {
      $result = 1;
    }
  }
  if ($result == 1) {
    session_start();
    $_SESSION['user'] = $name;
    header('Location: projects.php');
    exit();
  } else {
    header('Location: SignUP.php');
    exit();
  }
?>