<?php
require('../../connection/config.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $query = "DELETE FROM teachers WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo header('Location: ../manageteacher.php?msg=dsuccess');
    } else {
        echo header("Location: ../manageteacher.php?msg=derror");
    }
}
    // echo $id;
// }
