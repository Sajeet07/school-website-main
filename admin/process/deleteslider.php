<?php
require('../../connection/config.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['sliderid'];
    $query = "DELETE FROM sliders WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo header('Location: ../manageslider.php?msg=dsuccess');
    } else {
        echo header("Location: ../manageslider.php?msg=derror");
    }
}
