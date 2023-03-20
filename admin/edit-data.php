<?php
    session_start();

    include'../config.php';

    if($_SESSION["status_login_admin"] != "true") {
        header("Location: index.php?redirect=dashboard.php&pesan=belum_login");
    }

    $id = $_GET['id'];
    $query = "SELECT * FROM daftar_barang WHERE id='$id'";

    $id = mysqli_real_escape_string($conn, $id);
    $data = mysqli_query($conn, $query);

    if ($data) {
    	while ($row = mysqli_fetch_array($data)) {
            $id = $row['id'];
            $nama_barang = $row['nama_barang'];
            $kuantitas = $row['kuantitas'];
            $created_by = $row['created_by'];
        }
    } else {
    	echo "Data tidak ditemukan";
    }

	?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Data | <?php echo $nama_barang ?></title>

    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <?php
        include('nav.php');
        ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                    echo $_SESSION["username_admin"];
                                ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="edit-profile.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Editing data: <?php echo $nama_barang ?></h1>
                    <form action="cek-edit-data.php" method="post" class="user">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="nama_barang">Nama Barang: </label>
                                <input type="text" class="form-control form-control-user" id="nama_barang"
                                    placeholder="Nama Barang" name="nama_barang" value="<?php echo htmlspecialchars($nama_barang, ENT_QUOTES); ?>">
                            </div>
                            <div class="col-sm-6">
                                <label for="kuantitas">Kuantitas</label>
                                <input type="text" class="form-control form-control-user" id="kuantitas"
                                    placeholder="Kuantitas" name="kuantitas" value="<?php echo htmlspecialchars($kuantitas, ENT_QUOTES); ?>">
                        </div>
                        <input type="hidden" name="created_by" value="<?php echo $created_by ?>">
                        
                        <button type="submit" class="btn btn-primary btn-user btn-block mt-3">Edit Data</button>
                        <hr>
                    </form>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Muhammad Daffa 2022</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script href="../../assets/vendor/jquery/jquery.min.js"></script>
    <script href="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script href="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script href="../../assets/js/sb-admin-2.min.js"></script>

</body>

</html>