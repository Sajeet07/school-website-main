<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="http://localhost/school-website-main/admin/dashboard.php" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminPanel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!--  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="http://localhost/school-website-main/admin/dashboard.php" class="d-block">Team-One</a>
      </div>
    </div> -->



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              File Manager
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="uploadfile.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upload File</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="managefile.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage File</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Administrator
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addadmin.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manageadmin.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Admin</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Slider
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addslider.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Slider</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manageslider.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Slider</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Students
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="managestudent.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Students</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              About Us
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addaboutus.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add AboutUs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manageaboutus.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage AboutUs</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Awards
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addaward.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Awards</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manageaward.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Awards</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Teachers
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addteacher.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Teachers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manageteacher.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Teachers</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="blog.php" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Blog
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addblog.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Blogs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="manageblog.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Blogs</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Notice
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addnotice.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Notice</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="managenotice.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Notice</p>
              </a>
            </li>
          </ul>
        </li>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>