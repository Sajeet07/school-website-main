<?php
require('../../connection/config.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $query = "DELETE FROM students WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo header('Location: ../managestudent.php?msg=dsuccess');
    } else {
        echo header("Location: ../managestudent.php?msg=derror");
    }
}
    // echo $id;
// }
