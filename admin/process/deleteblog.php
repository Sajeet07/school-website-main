<?php
require('../../connection/config.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $query = "DELETE FROM blogs WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo header('Location: ../manageblog.php?msg=dsuccess');
    } else {
        echo header("Location: ../manageblog.php?msg=derror");
    }
}
    // echo $id;
// }
