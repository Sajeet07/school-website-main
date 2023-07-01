<?php

require('../connection/config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Fetch the form data
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $class = $_POST["class"];
    $img = $_FILES["img"]["name"];
    $f_name = $_POST["f_name"];
    $f_profession = $_POST["f_profession"];
    $f_contact = $_POST["f_contact"];
    $m_name = $_POST["m_name"];
    $m_profession = $_POST["m_profession"];
    $m_contact = $_POST["m_contact"];
    $address = $_POST["address"];
    $province = $_POST["province"];
    $district = $_POST["district"];
    $doc_type = $_POST["doc_type"];
    $file_link = $_FILES["file_link"]["name"];
    $description = $_POST["description"];

    // Prepare the SQL statement
    $sql = "INSERT INTO students (name, gender, dob, contact, email, class, img, f_name, f_profession, f_contact, m_name, m_profession, m_contact, address, province, district, doc_type, file_link, description)
            VALUES ('$name', '$gender', '$dob', '$contact', '$email', '$class', '$img', '$f_name', '$f_profession', '$f_contact', '$m_name', '$m_profession', '$m_contact', '$address', '$province', '$district', '$doc_type', '$file_link', '$description')";

    if ($conn->query($sql) === TRUE) {
        // File upload handling
        $targetDir = "../uploads/"; // Directory where you want to store the uploaded files
        $targetimg = $targetDir . basename($img);
        $targetfile_link = $targetDir . basename($file_link);

        // Move uploaded files to the target directory
        move_uploaded_file($_FILES["img"]["tmp_name"], $targetimg);
        move_uploaded_file($_FILES["file_link"]["tmp_name"], $targetfile_link);

        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
