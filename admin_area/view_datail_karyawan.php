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
            <div class="col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Profile</h4>
                  <div class=" text-center">

                    <img src="../assets/images/medi.jpg" width="150" height="150" class="rounded-circle" alt="" srcset="">
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-4">
                      <span>Nama</span>
                    </div>
                    <div class="col-md-8">
                      <span> : Karyawan A</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <span>address</span>
                    </div>
                    <div class="col-md-8">
                      <span> : Jalan raya Tanjung Bayan</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <span>Phone Number</span>
                    </div>
                    <div class="col-md-8">
                      <span> : +6287-xxxx-xxxx</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <span>Jabatan </span>
                    </div>
                    <div class="col-md-8">
                      <span> : </span><label class="badge badge-info">Direktor</label>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Progress Pekerjaan</h4>
                  <p class="card-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, eos?</p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th style="width: 100px;"> Nama Kerjaan </th>
                        <th style="width: 100px;"> Start Work </th>
                        <th style="width: 100px;"> Deadline </th>
                        <th style="width: 400px;"> Progress </th>
                        <th style="width: 100px;"> Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> Pekerjaan A </td>
                        <td> Des, 12 2019</td>
                        <td> Jan, 01 2020</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          <label class="badge badge-warning">inprogres</label>
                        </td>
                        
                      </tr>
                      <tr>
                        <td> Pekerjaan B </td>
                        <td> Des, 12 2019</td>
                        <td> Jan, 01 2020</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          <label class="badge badge-danger">pending</label>
                        </td>
                        
                      </tr>
                      <tr>
                        <td> Pekerjaan A </td>
                        <td> Des, 12 2019</td>
                        <td> Jan, 01 2020</td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          <label class="badge badge-success">completed</label>
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