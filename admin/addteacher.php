<?php
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->

                    <?php
                    require('../connection/config.php');

                    // Check if the form is submitted
                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                        // Fetch the form data
                        $name = $_POST["name"];
                        $gender = $_POST["gender"];
                        $contact = $_POST["contact"];
                        $email = $_POST["email"];
                        $address = $_POST["address"];
                        $qualification = $_POST["qualification"];
                        $img = $_FILES["img"]["name"];


                        // Prepare the SQL statement
                        $sql = "INSERT INTO teachers (name, gender, contact, email, address, qualification, img)
                                VALUES (?, ?, ?, ?, ?, ?, ?)";

                        // Create a prepared statement
                        $stmt = $conn->prepare($sql);

                        // Bind the parameters with the form data
                        $stmt->bind_param(
                            "sssssss",
                            $name,
                            $gender,
                            $contact,
                            $email,
                            $address,
                            $qualification,
                            $img,
                        );

                        if ($stmt->execute()) {


                            // header("Location:../index.php");
                        } else {
                            echo $stmt->error;
                            /*  echo "Error: " . $sql . "<br>" . $conn->error; */
                        }
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Teachers</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="gender" placeholder=""> -->
                                    <input type="radio" name="gender" value="male" id="male">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" value="female" id="female">
                                    <label for="female">Female</label>

                                    <input type="radio" name="gender" value="other" id="other">
                                    <label for="other">Other</label>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="contact" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Qualification</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="qualification" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="img" placeholder="">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
require('inc/footer.php');
?>