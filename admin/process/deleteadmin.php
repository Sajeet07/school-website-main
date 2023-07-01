<?php
require('../../connection/config.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['adminid'];
    $query = "DELETE FROM `users` WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo header('Location: ../manageadmin.php?msg=dsuccess');
    } else {
        // echo header("Location: ../manageadmin.php?msg=derror");
        echo mysqli_error($conn);
    }
}
