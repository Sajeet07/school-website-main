<?php
require('../connection/config.php');
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $h1 = $_POST['h1'];
  $p = $_POST['p'];
  $btn_txt = $_POST['btn_txt'];
  $btn_link = $_POST['btn_link'];
  $imgName = $_FILES["img"]["name"];
  $imgfolder = 'assets/images/';
  $img = $imgfolder . $imgName;

  /*   $filename=$_FILES["choosefile"]["name"];
  $tempfile=$_FILES["choosefile"]["tmp_name"]; */

  if ($name != "" && $h1 != "" && $p != "" && $btn_txt != "" && $img != "") {

    // $query2 ="INSERT INTO sliders (name,h1,p,btn_txt,btn_link,img) VALUES('$name','$h1','$p','$btn_txt','$btn_link','$img')";
    $query2 = "INSERT INTO sliders( name, h1, p, btn_txt, btn_link, img) VALUES ('$name','$h1','$p','$btn_txt','$btn_link','$img')";

    $myresult = mysqli_query($conn, $query2);
    if ($myresult) {

      header("location:manageslider.php");
    } else {



      echo "Slider couldn't add successfully.", $query2;
    }
  }
}
