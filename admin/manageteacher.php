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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Manage Teachers</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Action</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>contact</th>
                                        <th>Address</th>
                                        <th>Qualification</th>
                                        <th>img</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM teachers ORDER BY created_at DESC";
                                    $result = mysqli_query($conn, $query);
                                    $sn = 0;
                                    while ($data = mysqli_fetch_array($result)) {
                                        $sn += 1; //$sn = $sn+1
                                    ?>
                                        <tr>
                                            <td><?php echo $sn; ?></td>
                                            <td>
                                                <a name="" id="" class="btn btn-primary btn-xs" href="editteacher.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                                                <button type="button" class="btn btn-danger btn-xs deleteButton" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $data['id'] ?>">
                                                    <i class="fa fa-trash-o"></i>Delete
                                                </button>
                                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Delete Students</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure you want to delete?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form id="deleteForm" action="process/deleteteacher.php" method="POST">
                                                                    <input type="hidden" id="id" name="id">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-danger">Yes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['gender']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['contact']; ?></td>
                                            <td><?php echo $data['address']; ?></td>
                                            <td><?php echo $data['qualification']; ?></td>
                                            <td> <img src="../uploads/<?php echo $data['img']; ?>" alt="" height="80px;" width="80px;"></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <script>
        var deleteButtons = document.getElementsByClassName("deleteButton");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener("click", function() {
                var id = this.getAttribute("data-id");
                document.getElementById("id").value = id;
            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- /.content -->
</div>

<?php
require('inc/footer.php');
?>