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
              <h3 class="card-title">Manage Sliders</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>Action</th>
                    <th>Slider Name</th>
                    <th>Slider Image</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM sliders ORDER BY created_at DESC";
                  $result = mysqli_query($conn, $query);
                  $sn = 0;
                  while ($data = mysqli_fetch_array($result)) {
                    $sn += 1; //$sn = $sn+1
                  ?>
                    <tr>
                      <td><?php echo $sn; ?></td>
                      <td>
                        <a name="" id="" class="btn btn-primary btn-xs" href="editslider.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>

                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-danger btn-xs delete-buttons" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $data['id'] ?>">
                          <i class="fa fa-trash-o"></i>Delete
                        </button>
                        <script>
                          $('.delete-buttons').on('click', function() {
                            console.log("Clicked!");
                            var id = $(this).data('id');
                            $('#confirmDelete').attr('href', 'process/deleteslider.php?id=' + id);
                          });


                          // Get the ID value when the delete button is clicked
                        </script>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are You sure You want to delete the file?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                By clicking the confirm button the data stored in the database will be lost forever.
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a id="confirmDelete" href="#" class="btn btn-danger">Confirm</a>

                              </div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td><?php echo $data['name']; ?></td>
                      <td> <img src="../<?php echo $data['img']; ?>" alt="" height="80px;" width="80px;"></td>
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
  <!-- /.content -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php
require('inc/footer.php');
?>