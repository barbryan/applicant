<?php session_start(); ?>

<?php include('./includes/class.autoload.php'); ?>

<?php include('./pages/templates/header.php'); ?>


<?php

function loggedin()
{
  if (empty($_SESSION['key'])) {
    header('location: /accounts/login');
    exit();
  }
}

$url = explode("/", (string) $_SERVER['REQUEST_URI']);

if (!empty($url[1])) {
  switch ($url[1]) {
    case "applicants":
      loggedin();
      include('./pages/applicants/applicants.index.php');
      break;
    case "accounts":
      include('./pages/user/user.index.php');
      break;
    case "logout":
      include('./pages/logout.pages.php');
      break;

    default:
      header('location: /applicants');
      break;
  }
} else {
  header('location: /applicants');
}

?>



<?php include('./pages/templates/footer.php'); ?>