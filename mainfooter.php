                <!-- footer section start -->
                <footer class="footer">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="foot-content d-flex justify-content-between p-4">
                        <p class="">All right reserved by <span>Techsima</span></p>
                        <h5 class="fs-small fw-2">Designed by <span>RAJNEESH</span></h5>
                      </div>
                    </div>
                  </div>
                </footer>

                <!-- footer section end -->
                </div>
                <!-- content-bar code end -->



                </div>
                </div>
                </div>
                <script src="./js/dashmin.js"></script>
                <script src="./js/jquery-3.7.1.min.js"></script>
                <script src="./js/bootstrap.bundle.min.js"></script>
                <script src="./js/chart.umd.js"></script>


                <script>
                  ////============================================================
                  const xValues1 = ["Italy", "France", "Spain", "USA", "Argentina"];
                  const yValues1 = [55, 49, 44, 24, 15];
                  const barColors = ["#009cff", "#48b7fd", "#79c9fc", "#79c9fc", "#79c9fc"];
                  new Chart("myChart1", {
                    type: "bar",
                    data: {
                      labels: xValues1,
                      datasets: [{
                        backgroundColor: barColors,
                        data: yValues1

                      }]
                    },

                  });

                  ///////////////////////////////////////////////////////////
                  const xValues2 = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
                  const yValues2 = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

                  new Chart("myChart2", {
                    type: "line",
                    data: {
                      labels: xValues2,
                      datasets: [{
                        backgroundColor: "#009cff",
                        borderColor: "rgba(0,0,255,0.1)",
                        data: yValues2
                      }]
                    },

                  });
                  /////////////////////////////////////////////////
                  const xValues3 = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

                  new Chart("myChart3", {
                    type: "line",
                    data: {
                      labels: xValues3,
                      datasets: [{
                        data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                        borderColor: "009cff",
                        fill: false
                      }, {
                        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                        borderColor: "#48b7fd",
                        fill: false
                      }, {
                        data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                        borderColor: "#48b7fd",
                        fill: false
                      }]
                    },
                    options: {
                      legend: {
                        display: false
                      }
                    }
                  });
                  ///////////////////////////////////////////////////////
                  const xValues4 = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];
                  const yValues4 = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];


                  new Chart("myChart4", {
                    type: "pie",
                    data: {
                      labels: xValues4,
                      datasets: [{
                        backgroundColor: barColors,
                        data: yValues4
                      }]
                    },
                    options: {
                      title: {
                        display: true,
                        text: "World Wide Wine Production"
                      }
                    }
                  });
                  ////////////////////////////////////////////////////////
                  const xValues5 = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];
                  const yValues5 = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];


                  new Chart("myChart5", {
                    type: "doughnut",
                    data: {
                      labels: xValues5,
                      datasets: [{
                        backgroundColor: barColors,
                        data: yValues5
                      }]
                    },
                    options: {
                      title: {
                        display: true,
                        text: "World Wide Wine Production"
                      }
                    }
                  });
                  ////////////////////////////////////////////////////
                  const xyValues = [{
                      x: 50,
                      y: 7
                    },
                    {
                      x: 60,
                      y: 8
                    },
                    {
                      x: 70,
                      y: 8
                    },
                    {
                      x: 80,
                      y: 9
                    },
                    {
                      x: 90,
                      y: 9
                    },
                    {
                      x: 100,
                      y: 9
                    },
                    {
                      x: 110,
                      y: 10
                    },
                    {
                      x: 120,
                      y: 11
                    },
                    {
                      x: 130,
                      y: 14
                    },
                    {
                      x: 140,
                      y: 14
                    },
                    {
                      x: 150,
                      y: 15
                    }
                  ];
                  new Chart("myChart6", {
                    type: "scatter",
                    data: {
                      datasets: [{
                        pointRadius: 4,
                        pointBackgroundColor: "#009cff",
                        data: xyValues
                      }]
                    },
                  });
                </script>

<script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var content = document.getElementById("content-bar");
            let sidebar = document.querySelector(".sidebar");

if (window.getComputedStyle(sidebar).display === "block") {
    // Sidebar is visible, do something
    console.log("Sidebar is open");
} else {
    // Sidebar is hidden
    console.log("Sidebar is closed");
}
            // sidebar.classList.toggle("open");
            // content.classList.toggle("width");

            
        }
    </script>
                </body>
                </html>