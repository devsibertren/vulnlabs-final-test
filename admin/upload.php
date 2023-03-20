<?php
error_reporting(0);
header('X-XSS-Protection: 0');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload DB</title>

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
                    <h2 class="h3 mb-4 text-gray-800">Upload Your Database with CSV file Here to Restore it later</h2>
                    <form action="upload.php" method="POST" enctype="multipart/form-data" id="asdf">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <input type="file" name="myfile" id="myfile" onchange="return validate();">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <input class="btn btn-primary my-2 my-sm-0" type="submit" value="Upload" name="submit">
                            </div>
                        </div>
                    </form>
                    <?php
                        $allowedMimeTypes = array("text/csv", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");

                        if (isset($_FILES['myfile'])) {
                            $uploadedFileType = $_FILES["myfile"]["type"];

                            // Check if uploaded file type is allowed
                            if (in_array($uploadedFileType, $allowedMimeTypes)) {
                                if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
                                    echo "<p>The file " . basename($_FILES["myfile"]["name"]) . " has been uploaded.</p>";
                                    echo "<a target='_blank' href='uploads/" . basename($_FILES["myfile"]["name"]) . "'>Click here to view the file</a>";
                                } else {
                                    echo "<p>Sorry, there was an error uploading your file.</p>";
                                }
                            } else {
                                echo "<p>Sorry, only CSV and XLSX files are allowed.</p>";
                            }
                        }
                    ?>
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

    <script>
        const allowedext = ["csv", "xlsx"];
        var myInput = document.getElementById('myfile');
        myInput.onchange = _ => {
            for (var i = 0; i < myInput.files.length; i++) {
                var file = myInput.files[i];
                var getext = file.name.split(".");
                var ext = getext[getext.length - 1]
                // console.log(file.name); // file_XYZ.xlsx
                // console.log(ext)
                if (!allowedext.includes(ext)) {
                    alert('Ekstensi tidak diperbolehkan!');
                    location.reload();
                }
            }
        };
    </script>

    <!-- Bootstrap core JavaScript-->
    <script href="../assets/vendor/jquery/jquery.min.js"></script>
    <script href="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script href="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script href="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>