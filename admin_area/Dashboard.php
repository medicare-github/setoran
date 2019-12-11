<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
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
    <?php include '../includes/_navbar.php' ?>
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
                        <th style="width: 100px;"> profile </th>
                        <th style="width: 200px;"> Nama lengkap </th>
                        <th style="width: 400px;"> progress </th>
                        <th style="width: 50px;"> Status</th>
                        <th style="width: 50px;"> Pekerjaan Details </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-1">
                          <img src="../assets/images/faces-clipart/pic-1.png" alt="image"> </td>
                        <td> Karyawan A </td>
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
                          <a href="view_datail_karyawan.php" class="btn btn-primary btn-sm btn-fw">
                            <i class="fa fa-eye"></i>view</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../assets/images/faces-clipart/pic-2.png" alt="image"> </td>
                        <td> Karyawan B </td>
                       
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
        <?php include '../includes/_footer.php' ?>
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
