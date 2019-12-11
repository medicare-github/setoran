<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List Pekerjaan</title>
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
                        <div class="col-lg-11 grid-margin stretch-card mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right mb-3">
                                        <a href="Pekerjaan_add.php" class="btn btn-primary btn-sm btn-fw">
                                            <i class="fa fa-plus"></i>add Pekerjaan</a>
                                    </div>
                                    <h4 class="card-title">Data Pekerjaan</h4>
                                    <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Pekerjaan</th>
                                                <th>Start work </th>
                                                <th>Deadline</th>
                                                <th>Status</th>
                                                <th>View details</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Work A</td>
                                                <td>Des, 12 2019</td>
                                                <td>jan, 01 2020</td>
                                                <td><label class="badge badge-success">completed</label></td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm btn-fw"><i class="fa fa-eye"></i>view</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Work B</td>
                                                <td>Des, 12 2019</td>
                                                <td>jan, 01 2020</td>
                                                <td><label class="badge badge-danger">pending</label></td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm btn-fw"><i class="fa fa-eye"></i>view</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Work C</td>
                                                <td>Des, 12 2019</td>
                                                <td>jan, 01 2020</td>
                                                <td><label class="badge badge-warning">inprogress</label></td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm btn-fw"><i class="fa fa-eye"></i>view</button>
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