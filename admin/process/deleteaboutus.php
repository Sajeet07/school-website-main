<?php 
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM aboutus WHERE id=$id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo header('Location: ../manageaboutus.php?msg=dsuccess');
    }
    else 
    {
        echo header("Location: ../manageaboutus.php?msg=derror");
    }
}
?>