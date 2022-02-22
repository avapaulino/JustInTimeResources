<!DOCTYPE html>
<html lang="en">

<?php
include 'scripts/connections.php';
$conn = connect();
if (isset($_POST['submit'])) {
    $dalCourse = $_POST["dalCourse"];
    $suggCourse = $_POST["suggCourse"];
    $comment = $_POST["comment"];

    submitForm($conn, $dalCourse, $suggCourse, $comment);
}
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Just In Time Resources</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg+xml" href="./assets/img/house-door.svg">
    <link rel="shortcut icon" href="./assets/img/house-door.ico">
    <link rel="mask-icon" href="./assets/img/house-door.svg" color="#ff8a01">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href=" index.php" style="font-family:Verdana "> JUST IN TIME</a>
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

                        <a class="nav-link" href="allcourses.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            All Courses
                        </a>

                        <a class="nav-link" href="csci1105.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1105 & 1110
                        </a>

                        <a class="nav-link" href="csci1107.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1107
                        </a>

                        <a class="nav-link" href="csci1108.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 1108
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
                        <a class="nav-link" href="csci2115.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            CSCI 2115
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

                        <a class="nav-link" href="docker.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Docker Tutorials
                        </a>

                        <a class="nav-link" href="gitlab.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            GitLab Tutorials
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <div class="text-center">
                        <img src="./assets/img/Banner - CS Building.png" style="width:100%;height:auto;" class="img-fluid" alt="Responsive image">
                    </div>
                    <h1 class="mt-4" style="font-family:Verdana ">Just In Time Resources</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                    <div class="row" style="padding-left: 2%;padding-right: 2%;">
                        <p>LinkedIn Learning, formally Lynda, is a website that offers different video courses taught by industry experts regarding software, creative, and business skills. It is a subsidiary of LinkedIn.</p>
                        <p>The sidebar on the left includes the CS courses which you can select to view a list of related LinkedIn Learning resources.</p>
                        <p><strong>All the resources are free (unless indicated)</strong>. You only need to create a Halifax Public Libraries account to access the LinkedIn Learning resources.</p>
                        <p>Below are tutorials on how to create an account and log in with the Halifax Public Libraries, and how to access LinkedIn Learning through Halifax Public Libraries. </p>
                        <p>NOTE: Students can register even if they are currently not in NS. When entering your address details, use the address of the faculty they are studying with or use the Dalhousie address. You can then select the box to declare that you are a Nova Scotia Resident.</p>
                        <p><strong>IMPORTANT: The library ID for LinkedInLearning is halifaxca</strong></p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Logging into Halifax Public libraries
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <iframe src="https://dal.hosted.panopto.com/Panopto/Pages/Embed.aspx?id=70101520-62f1-4e3d-988f-acb801015a06&autoplay=false&offerviewer=true&showtitle=true&showbrand=false&start=0&interactivity=all" height="405" width="720" style="border: 1px solid #464646;" allowfullscreen allow="autoplay"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Access LinkedIn Learning through Halifax Public Libraries
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <iframe src="https://dal.hosted.panopto.com/Panopto/Pages/Embed.aspx?id=0058a136-9df5-43e0-8d4b-acaa013889aa&autoplay=false&offerviewer=true&showtitle=true&showbrand=false&start=0&interactivity=all" height="405" width="720" style="border: 1px solid #464646;" allowfullscreen allow="autoplay"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5 col-sm-8 mx-auto">
                        <form id="courseForm" onsubmit="return alert('Thank you! The form has been submitted');" method="POST">
                            <h3 class="text-center mt-2">Do you have any suggestions for courses? Please add them below</h3>
                            <br>
                            <div class="form-group ml-2 mr-2">
                                <label>Dalhousie Course Related To The Resource</label>
                                <input type="text" class="form-control" name="dalCourse" placeholder="CSCI Course" required>
                            </div>
                            <div class="form-group ml-2 mr-2">
                                <label>Just In Time Resource(s)</label>
                                <input type="text" class="form-control" name="suggCourse" placeholder="Link to the resource(s) you would like to suggest" required></textarea>
                            </div>
                            <div class="form-group ml-2 mr-2">
                                <label>Additional Comments (Optional)</label>
                                <input type="text" class="form-control" name="comment"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-secondary btn-lg ml-2 mr-2 mb-2">Submit</button>
                        </form>
                    </div>
                    <br>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">&copy; Just In Time Resources</div>
                        <div class="counter">
                            <!-- hitwebcounter Code START -->
                            <a href="https://www.hitwebcounter.com" target="_blank">
                                <img src="https://hitwebcounter.com/counter/counter.php?page=7804604&style=0008&nbdigits=5&type=ip&initCount=0" title="Free Counter" Alt="web counter" border="0" /></a>
                        </div>
                        <div>
                            <a href="mailto:csed@dal.ca">csed@dal.ca</a>
                            &middot;
                            #WeAreAllCS
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
