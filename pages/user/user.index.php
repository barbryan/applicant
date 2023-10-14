<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}



$url = explode("/", (string) $_SERVER['REQUEST_URI']);

if (!empty($url[2])) {
  switch ($url[2]) {
    case "create":
      loggedin();
      include('./pages/user/user.create.php');
      break;
    case "update":
      loggedin();
      include('./pages/user/user.update.php');
      break;
    case "login":
      include('./pages/user/user.login.php');
      break;

    default:
      loggedin();
      include('./pages/user/user.all.php');
      // header('location: /accounts');
      break;
  }
} else {
  loggedin();
  include('./pages/user/user.all.php');
  // header('location: /accounts');
}
