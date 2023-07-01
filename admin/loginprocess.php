<?php
session_start();
require('../connection/config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM  users WHERE `email`='$email' && `password`='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $noofrows = mysqli_num_rows($result);
    if ($noofrows == 1) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header("location: dashboard.php");
    } else {
    }
    /* if ($result) {
   
      
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    header("location: dashboard.php");
  } else {
    echo "error";
  } */
}
