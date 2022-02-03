<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Invoice</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('template/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('template/header'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">User</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduser">Add User</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#export">Export</button>
                        <button type="button" class="btn btn-primary" name="print" id="print" value="Print">Print</button>
                        <table class="table" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">HP</th>
                                    <th scope="col">Akses</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin</td>
                                    <td>Admin Invoice</td>
                                    <td>L</td>
                                    <td>111111</td>
                                    <td>admin</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail">Detail</button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </main>


                <!-- Modal Add User -->
                <div class="modal" id="adduser">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <!-- CARD UTAMA -->
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <i class="bi bi-person-workspace">Manajemen User</i>
                                    </div>
                                    <div class="card-body">

                                        <!-- CARD DROPDOWN -->
                                        <div class="btn btn-primary text-white d-flex justify-content-between" id="btn-adduser">
                                            <span><i class="bi bi-person-plus-fill"></i>Add User</span>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>

                                        <div class="container border-end border-start border-bottom p-4 d-none" id="content-adduser">
                                            <!-- FORM START -->
                                            <form>
                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input type="username" class="form-control" id="username" placeholder="" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input type="password" class="form-control" id="password" placeholder="" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input type="text" class="form-control" id="nama" placeholder="" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="gender" class="form-label">Gender</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <select class="form-select" aria-label="" id="gender">
                                                            <option selected>Select</option>
                                                            <option value="0">Laki - laki</option>
                                                            <option value="1">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input type="text" class="form-control" id="alamat" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="hp" class="form-label">HP</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input type="tel" class="form-control" id="hp" placeholder="" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="akses" class="form-label">Akses <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <select class="form-select" aria-label="" id="akses" required>
                                                            <option selected>Select</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="is-aktif" class="form-label">Is Aktif <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <select class="form-select" aria-label="" id="is-aktif" required>
                                                            <option selected>Select</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <button type="submit" class="d-block ms-auto btn btn-primary mt-4">Submit</button>
                                            </form>
                                            <!--FORM END-->
                                        </div>
                                        <!-- CARD DROPDOWN END-->
                                    </div>
                                </div>
                                <!--CARD END-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Detail -->
                <div class="modal" id="detail">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title"> Heading</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <!-- CARD UTAMA -->
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <i class="bi bi-person-workspace">Detail</i>
                                    </div>
                                    <div class="card-body">

                                        <!-- CARD DROPDOWN -->
                                        <div class="btn btn-primary text-white d-flex justify-content-between" id="btn-detail">
                                            <span><i class="bi bi-person-plus-fill"></i>Detail</span>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>

                                        <div class="container border-end border-start border-bottom p-4 d-none" id="content-detail">
                                            <!-- FORM START -->
                                            <form>
                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="admin" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="12345" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="Admin Invoice" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="gender" class="form-label">Gender</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="L" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="Perum Jenggolo Indah 2" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="hp" class="form-label">HP</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="081235858189" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="akses" class="form-label">Akses <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="admin" disabled>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-2 col-12">
                                                            <label for="is-aktif" class="form-label">Is Aktif <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <input class="form-control" id="disabledInput" type="text" placeholder="Yes" disabled>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="d-block ms-auto btn btn-primary mt-4">Back</button>
                                            </form>
                                            <!--FORM END-->
                                        </div>
                                        <!-- CARD DROPDOWN END-->
                                    </div>
                                </div>
                                <!--CARD END-->
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal Edit -->
                <div class="modal" id="edit">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title"> Heading</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <!-- CARD UTAMA -->
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <i class="bi bi-person-workspace">Manajemen User</i>
                                    </div>
                                    <div class="card-body">

                                        <!-- CARD DROPDOWN -->
                                        <div class="btn btn-primary text-white d-flex justify-content-between" id="btn-edit">
                                            <span><i class="bi bi-person-plus-fill"></i>Add User</span>
                                            <i class="bi bi-caret-down-fill"></i>
                                        </div>

                                        <div class="container border-end border-start border-bottom p-4 d-none" id="content-edit">
                                            <!-- FORM START -->
                                            <form>
                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="admin" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="12345" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="Admin Invoice" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="gender" class="form-label">Gender</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="L" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="Perum Jenggolo Indah 2" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="hp" class="form-label">HP</label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="081235858189" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 col-12">
                                                        <label for="akses" class="form-label">Akses <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10 col-12">
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="admin" disabled>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-2 col-12">
                                                            <label for="is-aktif" class="form-label">Is Aktif <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <input class="form-control" id="disabledInput" type="text" placeholder="Yes" disabled>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="d-block ms-auto btn btn-primary mt-4">Back</button>
                                            </form>
                                            <!--FORM END-->
                                        </div>
                                        <!-- CARD DROPDOWN END-->
                                    </div>
                                </div>
                                <!--CARD END-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>