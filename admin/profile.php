<?php
    session_start();
    include'../config.php';
    if($_SESSION["status_login_admin"] != "true") {
        header("Location: index.php?redirect=dashboard.php&pesan=belum_login");
    }

    $query = "SELECT * FROM admin WHERE username = '" . $_SESSION['username_admin'] . "'";

    $data = mysqli_query($conn, $query);

    if ($data) {
    	while ($row = mysqli_fetch_array($data)) {
            $yy['id'] = $row['id'];
            $yy['email'] = $row['email'];
            $yy['username'] = $row['username'];
        }
    } else {
    	echo "Data tidak ditemukan";
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $id = $_POST['id'];

        $query = "UPDATE admin SET email='". $email ."' WHERE id='$id'";
        $data = mysqli_query($conn, $query);

        if ($data > 0) {
            header("Location: profile.php");
        } else {
            echo '<script>alert("Edit data gagal")</script>';
        }
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

    <title>Profile</title>

    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

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
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
                    <form action="profile.php" method="post" class="user">
                        <input type="hidden" name="id" value="<?= $yy['id'] ?>">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <label for="username">username</label>
                                <input type="text" class="form-control form-control-user" name="username" value="<?php echo htmlspecialchars($yy['username'], ENT_QUOTES); ?>"readonly>
                                <button type="submit" class="btn btn-primary btn-user btn-block mt-3">Edit Data</button>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="email">email</label>
                                <input type="text" class="form-control form-control-user" name="email" value="<?php echo htmlspecialchars($yy['email'], ENT_QUOTES); ?>">
                            </div>
                        </div>
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

    <!-- Bootstrap core JavaScript-->
    <script href="../assets/vendor/jquery/jquery.min.js"></script>
    <script href="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script href="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script href="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>