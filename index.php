<!-- sidebar code start -->
<?php
include('sidebar.php');
?>
<!-- sidebar code end -->

<!-- content-bar code end -->
<?php
include('mainheader.php');
?>
<!-- card section start -->
<section>
    <div class="container-fluid pt-4">
        <div class="row g-4">
            <div class="col-xl-3 col-sm-6">
                <div class=" card bg-light rounded d-flex align-items-center justify-content-between p-4 border-0">
                    <div class="d-flex justify-content-evenly">
                        <i class="fa-solid fa-chart-line mt-1"></i>
                        <div class="ms-5">
                            <p class="mb-2">Today Sale</p>
                            <h6 class="mb-0">$1234</h6>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class=" card bg-light rounded d-flex align-items-center justify-content-between p-4 border-0">
                    <div class="d-flex justify-content-between">
                        <i class="fa-solid fa-chart-line mt-1 ms-0"></i>
                        <div class="ms-5">
                            <p class="mb-2">Today Sale</p>
                            <h6 class="mb-0">$1234</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class=" card bg-light rounded d-flex align-items-center justify-content-between p-4 border-0">
                    <div class="d-flex justify-content-evenly">
                        <i class="fa-solid fa-chart-line mt-1"></i>
                        <div class="ms-5">
                            <p class="mb-2">Today Sale</p>
                            <h6 class="mb-0">$1234</h6>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class=" card bg-light rounded d-flex align-items-center justify-content-between p-4 border-0">
                    <div class="d-flex justify-content-evenly">
                        <i class="fa-solid fa-chart-line mt-1"></i>
                        <div class="ms-5">
                            <p class="mb-2">Today Sale</p>
                            <h6 class="mb-0">$1234</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- card section end -->

<!-- chart section start -->
<section class="chart">
    <div class="container-fluid pt-4 mb-3">
        <div class="row g-4">
            <div class="col-xl-6 col-sm-12">
                <div class="bg-light text-center rounded p-4">
                    <div class=" d-flex justify-content-between align-items-center">
                        <p class=" fw-medium">Single Line Chart</p>
                        <a href="chartpage.php" class="text-primary">Show All</a>
                    </div>
                    <div class="live-chart1">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12">
                <div class="bg-light text-center rounded p-4">
                    <div class=" d-flex justify-content-between align-items-center">
                        <p class=" fw-medium">Single Line Chart</p>
                        <a href="chartpage.php" class="text-primary">Show All</a>
                    </div>
                    <div class="live-chart1">
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- chart section end -->

<!-- table section start -->
<section>
    <div class="container-fluid table">
        <div class="row">
            <div class="table-top-heading  d-inline-flex justify-content-between">
                <h5>Recent sales</h5>
                <p><a href="table.php">Show all</a></p>
            </div>
            <div class="table-design  overflow-scroll d-flex justify-content-center h-100">
                <table>
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox">
                            </th>
                            <th>Date</th>
                            <th>Invoice</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>01 JAN 2025</td>
                            <td>INV-0123</td>
                            <td>Rajneesh</td>
                            <td>$123</td>
                            <td>paid</td>
                            <td><a href="" class="btn btn-sm btn-primary">Detaile</a></td>





                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>01 JAN 2025</td>
                            <td>INV-0123</td>
                            <td>Rajneesh</td>
                            <td>$123</td>
                            <td>paid</td>
                            <td><a href="" class="btn btn-sm btn-primary">Detaile</a></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>01 JAN 2025</td>
                            <td>INV-0123</td>
                            <td>Rajneesh</td>
                            <td>$123</td>
                            <td>paid</td>
                            <td><a href="" class="btn btn-sm btn-primary">Detaile</a></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>01 JAN 2025</td>
                            <td>INV-0123</td>
                            <td>Rajneesh</td>
                            <td>$123</td>
                            <td>paid</td>
                            <td><a href="" class="btn btn-sm btn-primary">Detaile</a></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>01 JAN 2025</td>
                            <td>INV-0123</td>
                            <td>Rajneesh</td>
                            <td>$123</td>
                            <td>paid</td>
                            <td><a href="" class="btn btn-sm btn-primary">Detaile</a></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>01 JAN 2025</td>
                            <td>INV-0123</td>
                            <td>Rajneesh</td>
                            <td>$123</td>
                            <td>paid</td>
                            <td><a href="" class="btn btn-sm btn-primary">Detaile</a></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- table section start -->

<!-- three-card section start -->
<section class="card-3-home">
    <div class="container-fluid pt-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0">Messages</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="image/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle " src="image/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="image/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="rounded-circle flex-shrink-0" src="image/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Calender</h6>
                        <a href="index.php">Show All</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">To Do List</h6>
                        <a href="index.php">Show All</a>
                    </div>
                    <div class="d-flex mb-2">
                        <input class="form-control bg-transparent " type="text" placeholder="Enter task">
                        <button type="button" class="btn btn-primary ms-2">Add</button>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox" checked>
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span><del>Short task goes here...</del></span>
                                <i class="fa fa-times cross"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- three-card section start -->


<!-- footer section start -->
<?php
include('mainfooter.php');
?>
<!--footer section end-->