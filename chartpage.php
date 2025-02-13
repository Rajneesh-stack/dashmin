<!-- sidebar code start -->
<?php
include('sidebar.php');
?>
<!-- sidebar code end -->

<!-- content-bar code end -->
<?php
include('mainheader.php');
?>

<!-- chart section start -->
<section class="chart">
    <div class="container-fluid mt-3">
        <div class="row g-4 d-flex justify-content-between">
            <div class="col-xl-6 col-sm-12 chart1 p-3">
                <p>Graph Line Chart</p>
                <div class="live-chart1">
                    <canvas id="myChart1" style="width:80%;max-width:700px"></canvas>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 chart1 p-3">
                <p>Single Line Chart</p>
                <div class="live-chart1">
                    <canvas id="myChart2" style="width:80%;max-width:700px"></canvas>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 chart1 p-3">
                <p>Multiple Line Chart</p>
                <div class="live-chart1">
                    <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 chart1 p-3">
                <p>Pie Chart</p>
                <div class="live-chart1">
                    <canvas id="myChart6" style="width:100%;max-width:700px"></canvas>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 chart1 p-3 mb-2">
                <p>Dhoughnut  Chart</p>
                <div class="live-chart1">
                    <canvas id="myChart5" style="width:100%;max-width:700px"></canvas>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 chart1 p-3 mb-2">
                <p>Scatter Chart</p>
                <div class="live-chart1">
                <canvas id="myChart4" style="width:100%;max-width:700px"></canvas>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- chart section end -->
<?php
include('mainfooter.php');
?>