<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CSCI 1107</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html" style="font-family:Verdana "> JUST IN TIME</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                            Home
                        </a>

                        <div class="sb-sidenav-menu-heading">Courses</div>

                        <a class="nav-link" href="csci1105.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1105
                        </a>

                        <a class="nav-link" href="csci1107.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1107
                        </a>

                        <a class="nav-link" href="csci1108.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1108
                        </a>

                        <a class="nav-link" href="csci1110.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1110
                        </a>

                        <a class="nav-link" href="csci1120.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1120
                        </a>

                        <a class="nav-link" href="csci1170.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1170
                        </a>

                        <a class="nav-link" href="csci1800_1801.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1800/1801
                        </a>

                        <a class="nav-link" href="csci2100.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 2100
                        </a>

                        <a class="nav-link" href="csci2110.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 2110
                        </a>

                        <a class="nav-link" href="csci2112.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 2112
                        </a>

                        <a class="nav-link" href="csci2122.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 2122
                        </a>

                        <a class="nav-link" href="csci2134.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 2134
                        </a>

                        <a class="nav-link" href="csci2141.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 2141
                        </a>

                        <a class="nav-link" href="csci2170.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 2170
                        </a>

                        <a class="nav-link" href="csci3101.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 3101
                        </a>

                        <a class="nav-link" href="csci3110.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 3110
                        </a>

                        <a class="nav-link" href="csci3120.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 3120
                        </a>

                        <a class="nav-link" href="csci3130.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 3130
                        </a>

                        <a class="nav-link" href="csci3171.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 3171
                        </a>

                        <a class="nav-link" href="csci3172.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 3172
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Just In Time Resources</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">2110</li>
                    </ol>
                    <div class="row" style="padding-left: 2%;padding-right: 2%;">
                        <p>LinkedIn Learning, formally Lynda, is a website that offers different video courses taught by industry experts regarding software, creative, and business skills. It is a subsidiary of LinkedIn.</p>
                        <p></p>
                        <p><strong>IMPORTANT: The library ID for LinkedInLearning is halifaxca</strong></p>
                    </div>

                </div>

                <div class="container-fluid mt-2">
                    <div class="row">
                        <?php
                        include 'scripts/connections.php';
                        $pageID = "CSCI 2110";
                        $conn = connect();
                        getCourse($conn, $pageID);
                        closeConn($conn);
                        ?>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>