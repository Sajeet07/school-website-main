
<?php
require('../connection/config.php');
if (isset($_POST['submit'])) {
  $fileName = $_FILES["Picture"]["name"];
  $tmp_name = $_FILES["Picture"]["tmp_name"];

  $position = strpos($fileName, ".");
  $fileextension = substr($fileName, $position + 1);
  $fileextension = strtolower($fileextension);

  if (isset($fileName)) {
    $path = '../assets/images/';
    if (!empty($fileName)) {

      $success = 1;
      if (move_uploaded_file($tmp_name, $path . $fileName)) {
        $year = $_POST['year'];
        $h1 = $_POST['h1'];
        $p = $_POST['p'];


        $sql = "INSERT INTO aboutus(`year`, `img`,`h1`,`p`)  VALUES('$year','$fileName','$h1','$p')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          header("location:manageaboutus.php");
        }
      }
    }
  }
}
?>