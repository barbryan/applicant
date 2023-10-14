<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$url = explode("/", (string) $_SERVER['REQUEST_URI']);

if (!empty($url[2])) {
  switch ($url[2]) {
    case "create":
      loggedin();
      include('./pages/applicants/applicants.create.php');
      break;
    case "update":
      loggedin();
      include('./pages/applicants/applicants.update.php');
      break;

    default:
      loggedin();
      include('./pages/applicants/applicants.all.php');
      break;
  }
} else {
  loggedin();
  include('./pages/applicants/applicants.all.php');
}
