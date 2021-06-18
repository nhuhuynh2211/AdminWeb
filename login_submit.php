<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "themxoasuaadmin";
  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,'utf8');
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $tendnn=$_GET["tendn"];
    $passs=$_GET["pass"];

   
        // echo $tendn;
        // die();
    //$passs=md5($passs);
    $sql = "SELECT * from admin where tendn = '$tendnn' and pass = '$passs' ";
    
    $admin = mysqli_query($conn,$sql);
    if (mysqli_num_rows($admin) == 1)
    {
        
    }
     // $conn->close();
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trang Chủ - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand-logo" href="index.html"><img src="assets\img\logo bếp phượt.png" alt="Bếp Phượt" width="40" height="40" /></a>
      <a class="navbar-brand" href="index.html">Bếp Phượt</a>
      <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <td style="text-align: center;">
                <span class="badge bg-danger">
                    <a  style="color:white" href="login.html">Log in
                    </a>
                </span>
            </td>
      <!-- Navbar-->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <i class="fas fa-user fa-fw"></i>
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="edit-profile.html">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Thông tin
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>Cài đặt
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.html">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Đăng xuất
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div> Trang Chủ
              </a>
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-columns"></i>
                </div> Chuyên Mục
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div class="collapse" id="collapse1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="list-category.html">Danh Sách</a>
                  <a class="nav-link" href="add-category.html">Thêm</a>
                </nav>
              </div>
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-columns"></i>
                </div> Bài Viết
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div class="collapse" id="collapse2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="list-post.html">Danh Sách</a>
                  <a class="nav-link" href="add-post.html">Thêm</a>
                </nav>
              </div>
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-columns"></i>
                </div> Thành Viên
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div class="collapse" id="collapse3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="list-member.php">Danh Sách</a>
                </nav>
              </div>
            </div>
          </div>
          <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin Bếp Phượt
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Thông tin tài khoản</h1>
                <ol class="breadcrumb mb-g4">
                    <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active"><a href="profile.html">Tài khoản</a></li>
                    <li class="breadcrumb-item">Thông tin</li>
                </ol>
                <div class="content">
                  <div class="container-fluid">
                    <div class="row gutters-sm my-5">
                      <div class="col-md-4 mb-3">
                        <div class="card card-user">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"/>
                              <div class="mt-3">
                                <h4>Bếp Phượt</h4>
                                <p class="text-secondary mb-1"> Phát triển ứng dụng Web</p>
                                <p class="text-muted font-size-sm"> Đại học Công nghệ Thông tin - ĐHQG TPHCM </p>
                              </div>
                              <p class="description text-center"> "The key to success is <br />
                                to focus the conscious mind on things <br />
                                you desire not things you fear"</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php    
                      $sql = "SELECT * from admin where tendn='$tendnn' "; //câu lệnh SQL
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        ?>
                      <div class="col-md-8">
                        <div class="card mb-3">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Tên đăng nhập</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                  <?php echo $row["tendn"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Họ tên</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $row["tendd"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $row["email"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Số điện thoại</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                  <?php echo $row["dienthoai"]; ?></div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Địa chỉ</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $row["diachi"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Ngày sinh</h6>
                              </div>
                              <div class="col-sm-9 text-secondary"><?php echo $row["ngaysinh"]; ?></div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Giới tính</h6>
                              </div>
                              <div class="col-sm-9 text-secondary"><?php echo $row["gioitinh"]; ?></div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Dân tộc</h6>
                              </div>
                              <div class="col-sm-9 text-secondary"><?php echo $row["dantoc"]; ?></div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Giới thiệu</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $row["gioithieu"]; ?>
                              </div>
                            </div>

                         <?php } } ?>
                            <hr />
                            <div class="row">
                              <div class="col-sm-12">
                                <a class="btn btn-login" target="__blank" href="edit-profile.html"> Sửa thông tin</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Bếp Phượt 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
  </body>
</html>