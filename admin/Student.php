
<?php
require('../connection/config.php');
if (isset($_POST['submit'])) {
    $fileName = $_FILES["Picture"]["name"];
    $tmp_name = $_FILES["Picture"]["tmp_name"];

    $position = strpos($fileName, ".");
    $fileextension = substr($fileName, $position + 1);
    $fileextension = strtolower($fileextension);

    if (isset($fileName)) {
        $path = '../uploads/';
        if (!empty($fileName)) {

            $success = 1;
            if (move_uploaded_file($tmp_name, $path . $fileName)) {
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $contact = $row['contact'];
                $class = $row['class'];


                $sql = "INSERT INTO students(`name`, `img`,`gender`,`email`,`contact`,`class`)  VALUES('$name','$fileName','$gender','$email','$contact','$class')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    header("location:managestudent.php");
                }
            }
        }
    }
}
?>