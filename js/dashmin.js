// code for chart 1 start////
new Chart(document.getElementById("chart1"), {
    type : 'line',
    data : {
        labels : [ 150, 160, 170, 175, 180, 185,
                190, 195, 199, 205 ],
        datasets : [
                {
                    data : [ 186, 205, 132, 151, 202,
                            195, 190, 160, 175, 155 ],
                    label : "America",
                    borderColor : "#61c0fd",
                    fill : false
                }]
    },
    options : {
        title : {
            display : true,
            text : 'Chart JS Line Chart Example'
        }
    }
});

// code for chart 1 end////


// code for chart 2 start////

var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];

var yValues = [55, 49, 44, 24, 15];
var barColors = ["#48b7fd","#61c0fd","#79c9fc","#8acaf4","#aadbfb"]

new Chart("chart2", {
type: "bar",
data: {
labels: xValues,
datasets: [{
  backgroundColor: barColors,
  data: yValues
}]
},

});
// code for chart 2 end////

// dropdown code for side bar start///

function toggleDropdown() {
    const dropdown = document.getElementById("drop1");
    dropdown.classList.toggle("show1");
}
function Dropdown() {
    const dropdown = document.getElementById("drop2");
    dropdown.classList.toggle("show2");
}

// dropdown code for side bar end///
 ////============================================================
 const xValues1 = ["Italy", "France", "Spain", "USA", "Argentina"];
 const yValues1 = [55, 49, 44, 24, 15];
 const barColors = ["#009cff", "#48b7fd","#79c9fc","#79c9fc","#79c9fc"];
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
     const xValues2 = [50,60,70,80,90,100,110,120,130,140,150];
 const yValues2 = [7,8,8,9,9,9,10,11,14,14,15];
 
 new Chart("myChart2", {
   type: "line",
   data: {
     labels: xValues2,
     datasets: [{
       backgroundColor:"#009cff",
       borderColor: "rgba(0,0,255,0.1)",
       data: yValues2
     }]
   },
   
 });
 /////////////////////////////////////////////////
 const xValues3 = [100,200,300,400,500,600,700,800,900,1000];
 
 new Chart("myChart3", {
   type: "line",
   data: {
     labels: xValues3,
     datasets: [{
       data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
       borderColor: "009cff",
       fill: false
     },{
       data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
       borderColor: "#48b7fd",
       fill: false
     },{
       data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
       borderColor: "#48b7fd",
       fill: false
     }]
   },
   options: {
     legend: {display: false}
   }
 });
 ///////////////////////////////////////////////////////
 const xValues4 = [100,200,300,400,500,600,700,800,900,1000];
 const yValues4 = [7,8,8,9,9,9,10,11,14,14,15];
 
 
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
 const xValues5 = [100,200,300,400,500,600,700,800,900,1000];
 const yValues5 = [7,8,8,9,9,9,10,11,14,14,15];
 
 
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
 const xyValues = [
   {x:50, y:7},
   {x:60, y:8},
   {x:70, y:8},
   {x:80, y:9},
   {x:90, y:9},
   {x:100, y:9},
   {x:110, y:10},
   {x:120, y:11},
   {x:130, y:14},
   {x:140, y:14},
   {x:150, y:15}
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
 

////dropdown for navbar start////

////dropdown for navbar end////