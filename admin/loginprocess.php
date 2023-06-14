<?php
require('../connection/config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM  users WHERE `email`='$email' && `password`='$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if ($result) {
    session_start();
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    header("location: dashboard.php");
  } else {
    echo "error";
  }
}
