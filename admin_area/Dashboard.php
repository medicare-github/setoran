<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/shared/style.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo_1/style.css">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="#">
          <img src="../assets/images/logo.svg" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="../assets/images/logo-mini.svg" alt="logo" /> </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <form class="ml-auto search-form d-none d-md-block" action="#">
          <div class="form-group">
            <input type="search" class="form-control" placeholder="Search Here">
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../assets/images/medi.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../assets/images/medi.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Medicare</p>
                <p class="font-weight-light text-muted mb-0">mcare@gmail.com</p>
              </div>
              <a class="dropdown-item">My Profile<i class="dropdown-item-icon ti-dashboard"></i></a>
              <a class="dropdown-item">admin area<i class="dropdown-item-icon ti-power-off"></i></a>
              <a class="dropdown-item">Logout<i class="dropdown-item-icon ti-power-off"></i></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <div class="container-fluid">
        <div class="content-wrapper">
          <!-- Page Title Header Starts-->
         <?php include '../includes/_menu.php' ?>
          <!-- Page Title Header Ends-->
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card mx-auto">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Progress Karyawan</h4>
                  <p class="card-description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, incidunt.
                  </p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th> profile </th>
                        <th> Nama lengkap </th>
                        <th> Pekerjaan </th>
                        <th> Start work </th>
                        <th> Deadline </th>
                        <th style="width: 200px;"> progress </th>
                        <th> Status</th>
                        <th> user History </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-1">
                          <img src="../assets/images/faces-clipart/pic-1.png" alt="image"> </td>
                        <td> Karyawan A </td>
                        <td> example work A </td>
                        <td> Des 12, 2019 </td>
                        <td> Jan 15, 2020 </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%"
                              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          <label class="badge badge-warning">inprogres</label>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm btn-fw">
                            <i class="fa fa-eye"></i>view</button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../assets/images/faces-clipart/pic-2.png" alt="image"> </td>
                        <td> Karyawan B </td>
                        <td> example work B </td>
                        <td> Des 12, 2019 </td>
                        <td> Jan 15, 2020 </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          <label class="badge badge-warning">inprogres</label>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm btn-fw">
                            <i class="fa fa-eye"></i>view</button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../assets/images/faces-clipart/pic-3.png" alt="image"> </td>
                        <td> Karyawan C </td>
                        <td> example work C </td>
                        <td> Des 12, 2019 </td>
                        <td> Jan 15, 2020 </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"
                              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          <label class="badge badge-danger">pending</label>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm btn-fw">
                            <i class="fa fa-eye"></i>view</button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../assets/images/faces-clipart/pic-4.png" alt="image"> </td>
                        <td> Karyawan D </td>
                        <td> example work D </td>
                        <td> Des 12, 2019 </td>
                        <td> Jan 15, 2020 </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          <label class="badge badge-success">completed</label>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm btn-fw">
                            <i class="fa fa-eye"></i>view</button>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 All rights reserved.</span>

          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/shared/off-canvas.js"></script>
  <script src="assets/js/shared/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/js/demo_1/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
