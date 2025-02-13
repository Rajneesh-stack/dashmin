<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashmin</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dasmin.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body>
    <div class="dashboard">
    <div class="container-fluid ms-0 ">
        <div class="row ps-0 pe-0">
            <!-- sidebar code start -->
            <div class="col-lg-2 sidebar" id="sidebar">
                <nav>
                    <div class="side-main-heading pt-3 mb-4">
                        <h1> <i class="fa-solid fa-hashtag"></i> Dashmin</h1>
                    </div>
                    <div class="side-image d-flex align-items-center pt-2">
                        <div class="image">
                            <img src="./image/user.jpg" alt="" height="40px" width="40px" class="rounded-5">
                        </div>
                        <div class=" ms-2 content">
                            <h5 class="content-name">Rajneesh</h5>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class="side-navbar w-100 mt-3">

                        <a href="index.php" class="navbar-item mt-2"><i class="fa-solid fa-gauge side-nav-icon"></i> Dashboard</a>
                        <div class="dropdown-bar mt-2">
                            <a href="" class="navbar-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-laptop side-nav-icon"></i> Elements
                            </a>
                            <div class="dropdown-menu">
                                <a href="button.php" class="dropdown-item">Button</a>
                                <a href="typography.php" class="dropdown-item">Typogarphy</a>
                                <a href="otherelement.php" class="dropdown-item">Other Element</a>
                            </div>
                        </div>
                        <a href="widgets.php" class="navbar-item mt-2"><i class="fa-solid fa-circle-dot side-nav-icon"></i> Widgets</a>
                        <a href="formpage.php" class="navbar-item mt-2"><i class="fa-solid fa-keyboard side-nav-icon"></i> Form</a>
                        <a href="table.php" class="navbar-item mt-2"><i class="fa-solid fa-table side-nav-icon"></i> Table</a>
                        <a href="chartpage.php" class="navbar-item mt-2"><i class="fa-solid fa-chart-simple side-nav-icon"></i>Chart</a>
                        <div class="dropdown-bar mt-2">
                            <a href="" class="navbar-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-file side-nav-icon"></i> Pages </a>
                            <div class="dropdown-menu">
                            <a href="signinpage.php" class="dropdown-item">Sign in</a>
                            <a href="" class="dropdown-item">Sign up</a>
                            <a href="Blankpage.php" class="dropdown-item">Blank Page</a>
                            <a href="page404.php" class="dropdown-item">Error</a>

                            </div>
                        </div>



                    </div>
                </nav>
            </div>


            <!-- sidebar code end -->