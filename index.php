<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashmin</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/responsiv.css">
    <link rel="stylesheet" href="./css/dashmin.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar start -->
            <div class="sidebar col-lg-4 ms-0 ps-4 " id="sidebar">
                <div class="row">
                    <div class="col-lg-4 pt-2 nav-heading">
                        <div class="row">
                            <div class="col-lg-2 ms-3 pt-1">
                                <h1> <i>#</i></h1>
                            </div>
                            <div class="col-lg-2 ms-3 pt-1">
                                <h2>dashmin</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 ms-2 pt-1 nav-img">
                                <img src="./image/user.jpg" alt="">
                            </div>
                            <div class="col-lg-4 ms-4 pt-1 img-name w-25">
                                <p class="ps-3 fs-5 pt-2 fw-bolder mb-0">Jhon Deo</p>
                                <span class="admin">Admin</span>
                            </div>
                        </div>


                    </div>
                    <ul type="none" class=" side-list ps-3 mt-4 mb-0 ">
                        <a href="">
                            <li>
                                <div class="d-flex  align-content-center flex-row ">
                                    <div class="list-icon">
                                        <i class="fa-solid fa-gauge-high"></i>
                                    </div>
                                    <div class="list-name">
                                        <span>Dashboard</span>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="javascript:void(0)">
                            <li class="mt-3">
                                <div class="d-flex  align-content-center flex-row drop">
                                    <div class="list-icon">
                                        <i class="fa-solid fa-laptop"></i>
                                    </div>
                                    <div class="list-name ">
                                        <span>Element</span>
                                        <span class="up-icon">
                                            <i class=" fa-solid fa-angle-down" onclick="dropdown()"></i>
                                        </span>
                                        <ul type="none" class="dropdown show_drop" id="drop">
                                            <a href="">
                                                <li>Button</li>
                                            </a>
                                            <a href="">
                                                <li>Typography</li>
                                            </a>
                                            <a href="">
                                                <li>Other Element</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="">
                            <li class="mt-3">
                                <div class="d-flex  align-content-center flex-row">
                                    <div class="list-icon">
                                        <i class="fa-solid fa-list"></i>
                                    </div>
                                    <div class="list-name">
                                        <span>Widgets</span>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="">
                            <li class="mt-3">
                                <div class="d-flex  align-content-center flex-row">
                                    <div class="list-icon">
                                        <i class="fa-solid fa-keyboard"></i>
                                    </div>
                                    <div class="list-name">
                                        <span>Form</span>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="">
                            <li class="mt-3">
                                <div class="d-flex  align-content-center flex-row">
                                    <div class="list-icon">
                                        <i class="fa-solid fa-table"></i>
                                    </div>
                                    <div class="list-name">
                                        <span>Table</span>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="">
                            <li class="mt-3">
                                <div class="d-flex  align-content-center flex-row">
                                    <div class="list-icon">
                                        <i class="fa-solid fa-chart-bar"></i>
                                    </div>
                                    <div class="list-name">
                                        <span>Chart</span>
                                    </div>
                                </div>
                            </li>
                        </a>
                        <a href="javascript:void(0)">
                            <li class="mt-3">
                                <div class="d-flex  align-content-center flex-row drop">
                                    <div class="list-icon">
                                        <i class="fa-solid fa-file"></i>
                                    </div>
                                    <div class="list-name">
                                        <span>Pages</span>
                                        <span class="up-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                        <ul type="none" class="dropdown">
                                            <a href="">
                                                <li>Sign in</li>
                                            </a>
                                            <a href="">
                                                <li>Sign up</li>
                                            </a>
                                            <a href="">
                                                <li>Error 404</li>
                                            </a>
                                            <a href="">
                                                <li>Blank page</li><a>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <!-- sidebar end -->

            <!-- content bar nav bar start -->
            <nav class="navbar-section col-lg-9 ">
                <div class="navbar ">
                    <div class="col-lg-4 d-flex align-items-center justify-content-start">
                        <div class="list-icon ">
                            <i class="fa-solid fa-bars fs-5"></i>
                        </div>
                        <input type="search" placeholder="search..." class="search-box">
                    </div>
                    <div class="col-lg-8 nav-link d-flex justify-content-evenly align-content-center">
                        <ul type="none" class="d-flex align-content-center">
                            <li class="d-flex justify-content-center nav-link-item">
                                <div class="nav-link-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="pt-3 ps-2 ">Message
                                    <i class=" fa-solid fa-angle-down"></i>
                                </div>
                                <div class="nav-drop">
                                    <ul type="none">
                                        <li>hii</li>
                                        <li>hii</li>
                                        <li>hii</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="d-flex justify-content-center nav-link-item">
                                <div class="nav-link-icon">
                                    <i class="fa-solid fa-bell"></i>
                                </div>
                                <div class="pt-3 ps-2 ">Notification
                                    <i class=" fa-solid fa-angle-down"></i>
                                </div>
                                <div class="nav-drop">
                                    <ul type="none">
                                        <li>hii</li>
                                        <li>hii</li>
                                        <li>hii</li>
                                    </ul>
                                </div>
                            </li>

                            <li class="d-flex justify-content-center nav-link-item">
                                <div class="nav-link-icon">
                                    <img src="./image/user.jpg" alt="">
                                </div>
                                <div class="pt-3 ps-2 ">Rajneesh
                                    <i class=" fa-solid fa-angle-down"></i>
                                </div>
                                <div class="nav-drop">
                                    <ul type="none">
                                        <li>hii</li>
                                        <li>hii</li>
                                        <li>hii</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>


                <section class="homepage" id="homepage">
                    <div class="row">
                        <div class="col-lg-6 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officia repudiandae, inventore neque ipsam incidunt odit deleniti obcaecati dolores veritatis. Ducimus eligendi aperiam saepe reprehenderit neque maxime consequatur sint aut.</div>
                        <div class="col-lg-6">hiiLorem ipsum dolor sit amet consectetur adipisicing elit. Optio officia repudiandae, inventore neque ipsam incidunt odit deleniti obcaecati dolores veritatis. Ducimus eligendi aperiam saepe reprehenderit neque maxime consequatur sint aut.</div>
                    </div>
                </section>
            </nav>
            <!-- content bar nav bar start -->
            <!-- home page is start -->

            <!-- home page is start -->

        </div>
    </div>


    <script src="./js/bootstrap.bundle.min.js"></script>

    <script>
        const dropdown = () => {
            const dropElement = document.getElementById("drop");
            if (dropElement) {
                dropElement.classList.toggle("show_drop");
            } else {
                console.error("Dropdown element not found!");
            }
        };
    </script>
</body>

</html>