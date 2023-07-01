<?php
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $show_query = "SELECT * FROM teachers WHERE id=$id";
    $show_result = mysqli_query($conn, $show_query);
    $row = $show_result->fetch_assoc();
    $name = $row['name'];
    $gender = $row['gender'];
    $email = $row['email'];
    $contact = $row['contact'];
    $address = $row['address'];
    $qualification = $row['qualification'];
    $img = $row['img'];
}
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
                    if (isset($_POST['submit'])) {
                        $id = $_GET['id'];
                        $name = $_POST['name'];
                        $gender = $_POST['gender'];
                        $email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $address = $_POST['address'];
                        $qualification = $_POST['qualification'];
                        $img = $_POST['img'];


                        if ($name != "" && $gender != "" && $email != "" && $contact != "" && $address != "" && $qualification != "" && $img != "") {
                            $query = "UPDATE teachers SET name='$name', gender='$gender', email='$email', contact='$contact', address='$address',qualification='$qualification',img='$img' WHERE id=$id";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                echo "Data is updated successfully.";
                    ?>
                                <meta http-equiv="refresh" content="0; URL=manageteacher.php?msg=csuccess" />
                    <?php

                            } else {
                                echo "Data couldn't updated successfully.";
                            }
                        }
                    }
                    ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Teachers</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="text" class="form-control" id="gender" name="gender" placeholder="" value="<?php echo $gender; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input type="tel" class="form-control" id="contact" name="contact" placeholder="" value="<?php echo $contact; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="" value="<?php echo $address; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="class">Qualification</label>
                                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="" value="<?php echo $qualification; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="img">Image Link</label>
                                    <input type="text" class="form-control" id="img" name="img" placeholder="" value="<?php echo $img; ?> ">
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