<?php 
// include_once 
session_start();

if(!$_SESSION['user']){
	header("Location:managerlogin.php");
}
?>
<html>
<head>
<title>Manager Dashboard</title>
<head>
<style>
@import url("https://fonts.googleapis.com/css?family=Dosis:300|Lato:300,400,600,700|Roboto+Condensed:300,700|Open+Sans+Condensed:300,600|Open+Sans:400,300,600,700|Maven+Pro:400,700");
@import url("https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css");
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, body {
  background-color: #202B33;
  color: #738491;
  font-family: "Open Sans";
  font-size: 16px;
  font-smoothing: antialiased;
  overflow: hidden;
}

header {
  color: #D3D3D3;
}

nav {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 82%;
  left: 0;
  padding: 22px;
  border-right: 2px solid #161e23;
  overflow-y:scroll;
}
nav > header {
  font-weight: 700;
  font-size: 1.2rem;
  text-transform: uppercase;
}
nav section {
  font-weight: 600;
}
nav section header {
  padding-top: 30px;
}
nav section ul {
  list-style: none;
  padding: 0px;
}
nav section ul li {
  position: relative;
  padding: 10px 0px;
}
nav section ul li.active {
  color: #2278AE;
}
nav section ul li:after {
  content: attr(data-value);
  position: absolute;
  right: 0px;
  width: 19px;
  background-color: #738491;
  font-size: 0.9rem;
  color: #202B33;
  -moz-border-radius: 19px;
  -webkit-border-radius: 19px;
  border-radius: 19px;
  text-align: center;
}
nav section ul li.red:after {
  content: '';
  position: absolute;
  top: 14px;
  right: 0px;
  width: 10px;
  height: 10px;
  background-color: #ec487f;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}
nav section ul li.yellow:after {
  content: '';
  position: absolute;
  top: 14px;
  right: 0px;
  width: 10px;
  height: 10px;
  background-color: #ea8e39;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}
nav section ul li.green:after {
  content: '';
  position: absolute;
  top: 14px;
  right: 0px;
  width: 10px;
  height: 10px;
  background-color: #38af5b;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}
nav section ul li.new {
  font-size: 0.9rem;
  color: #545f68;
}

article {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 18%;
  overflow: auto;
  border-left: 2px solid #2a3843;
  padding: 20px;
}
article > header {
  height: 60px;
  border-bottom: 1px solid #2a3843;
}
article > header .title {
  float: left;
  font-size: 1.3rem;
  font-weight: 600;
}
article > header .user {
  float: right;
  width: 48px;
  height: 48px;
  background-image: url("https://s3.amazonaws.com/uifaces/faces/twitter/peterlandt/48.jpg");
  -moz-border-radius: 48px;
  -webkit-border-radius: 48px;
  border-radius: 48px;
  margin-left: 20px;
}
article > header .interval {
  float: right;
}
article > header .interval ul {
  padding: 0;
  list-style: none;
}
article > header .interval ul li {
  float: right;
  text-transform: uppercase;
  font-size: 0.9rem;
  font-weight: 600;
  padding: 2px 10px;
  margin: 0px 10px;
}
article > header .interval ul li.active {
  background-color: #D3D3D3;
  color: #202B33;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}
article section {
  margin-top: 20px;
  margin-bottom: 20px;
}
article section > header {
  margin-bottom: 20px;
  font-size: 1.1rem;
  font-weight: 600;
}
article section .chart {
  height: 200px;
}
article section .inlineChart {
  float: left;
  width: 30%;
  margin-bottom: 50px;
}
article section .inlineChart canvas {
  float: left;
}
article section .inlineChart .info {
  float: left;
  padding-left: 20px;
  padding-top: 16px;
}
article section .inlineChart .info .value {
  font-size: 2.0rem;
  color: #D3D3D3;
}
article section table {
  width: 100%;
}
article section table th, article section table td {
  padding: 15px 0px;
  border-bottom: 1px solid #2a3843;
}
article section table thead th {
  text-align: left;
  font-size: 0.9rem;
  text-transform: uppercase;
  color: #D3D3D3;
}
a{
  text-decoration:none;
  color:#738491;  
}

</style>
</head>
<body>
<nav>
  <header>Sales Report</header>
  <section>
    <header>Main</header>
    <ul>
      <li class="active">Dashboard</li>
      <li data-value="8">Reports</li>
    </ul>
  </section>
  <section>
    <header>Add</header>
    <ul>
      <li><a href ="addequipments.php">Equipments</a></li>
      <li><a href ="addtests.php">Tests</a></li>
    </ul>
  </section>
  <section>
    <header>View</header>
    <ul>
      <li><a href ="viewequipments.php">Equipments</a></li>
      <li><a href ="viewtests.php">Tests</a></li>
      <li><a href ="viewtechnicians.php">Technicians</a></li>
      <li><a href ="viewcustomers.php">Customers</a></li>
      <li><a href ="totaltests.php">Total Tests</a></li>
    </ul>
  </section>
  <section>
    <header>Account</header>
    <ul>
      <li>Activity</li>
      <li data-value="4">Messages</li>
    </ul>
  </section>
  <section>
    <header>Categories</header>
    <ul>
      <li class="red">Credit Sales</li>
      <li class="yellow">Channel Sales</li>
      <li class="green">Direct Sales</li>
      <li class="new"> <i class="fa fa-plus-circle"></i> Add Category</li>
    </ul>
  </section>
</nav>
<article>
  <header>
    <div class="title">Dashboard</div>
    <div class ="title" style ="background-color:orange; margin-left:15px;border-radius:20px;padding:5px">
    <a href="includes/logout.inc.php" style ="padding:15px 10px;font-size:15px;color:#fff;text-decoration:none;"><i class ="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a>
    </div>
    <div class="user"></div>
    <div class="interval">
      <ul>
        <li style ="color:lime"><i class ="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['user']; ?></li>
        <li>Weekly</li>
        <li class="active">Monthly</li>
      </ul>
    </div>
  </header>
  <section>
    <div class="chart">
      <canvas id="c1" width="900" height="200"></canvas>
    </div>
  </section>
  <section>
    <header>Total Sales</header>
    <div class="inlineChart">
      <canvas id="c2" width="100" height="100"></canvas>
      <div class="info">
        <div class="value">$36,146</div>
        <div class="title">Credit sales</div>
      </div>
    </div>
    <div class="inlineChart">
      <canvas id="c3" width="100" height="100"></canvas>
      <div class="info">
        <div class="value">$24,734</div>
        <div class="title">Channel Sales</div>
      </div>
    </div>
    <div class="inlineChart">
      <canvas id="c4" width="100" height="100"></canvas>
      <div class="info">
        <div class="value">$15,650</div>
        <div class="title">Direct Sales</div>
      </div>
    </div>
  </section>
  <section>
    <table>
      <thead>
        <tr>
          <th>November Sales</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Dallas Oak Dining Chair</td>
          <td>20</td>
          <td>$1,342</td>
        </tr>
        <tr>
          <td>Benmore Glass Coffee Table</td>
          <td>18</td>
          <td>$1,550</td>
        </tr>
        <tr>
          <td>Aoraki Leather Sofa</td>
          <td>15</td>
          <td>$4,170</td>
        </tr>
        <tr>
          <td>Bali Outdoor Wicker Chair</td>
          <td>25</td>
          <td>$2,974</td>
        </tr>
      </tbody>
    </table>
  </section>
</article>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js"></script>
<script>
// Inspired by https://dribbble.com/shots/1821178-Sales-Report/


var data1 = {
  labels : ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
  datasets : [
    {
      fillColor : "rgba(56,175,91,.1)",
      strokeColor : "rgba(56,175,91,1)",
      pointColor : "rgba(56,175,91,1)",
      pointStrokeColor : "rgba(0,0,0,0.6)",
      data : [1000,1200,935,990,1050,1030,1040]
    },
    {
      fillColor : "rgba(234,142,57,.1)",
      strokeColor : "rgba(234,142,57,1)",
      pointColor : "rgba(234,142,57,1)",
      pointStrokeColor : "rgba(0,0,0,0.6)",
      data : [1300, 1200, 1000, 1200, 1100, 1150, 1180]
    },
    {
      fillColor : "rgba(236,72,127,.1)",
      strokeColor : "rgba(236,72,127,1)",
      pointColor : "rgba(236,72,127,1)",
      pointStrokeColor : "rgba(0,0,0,0.6)",
      data : [1400,1350,1250,1250,1350,1500,1550]
    }
  ]
}

var options1 = {
  scaleFontColor : "rgba(255,255,255,0.7)",
  scaleLineColor : "rgba(0,0,0,0)",
  scaleGridLineColor : "rgba(255,255,255,0.1)",
  scaleFontFamily: "Open Sans",
  scaleFontSize: 14,
  bezierCurve : true,
  scaleShowLabels: true,
  pointDotRadius: 6,
  animation: true,
  scaleShowGridLines: true,
  datasetFill: true,
  responsive: true
}

new Chart(c1.getContext("2d")).Line(data1,options1);



var data2 = [{
    value: 80,
    color: "rgba(236,72,127,1)",
    label: ""
  },
  {
    value: 20,
    color: "#3c4449",
    label: ""
  }];
             

var options2 = {
  animation: false,
  responsive: true,
  segmentShowStroke: false,
  percentageInnerCutout: 90
}

new Chart($("#c2").get(0).getContext("2d")).Doughnut(data2,options2);

var data2 = [{
    value: 64,
    color: "rgba(234,142,57,1)",
    label: ""
  },
  {
    value: 36,
    color: "#3c4449",
    label: ""
  }];
             

var options2 = {
  animation: false,
  responsive: true,
  segmentShowStroke: false,
  percentageInnerCutout: 90
}

new Chart($("#c3").get(0).getContext("2d")).Doughnut(data2,options2);

var data2 = [{
    value: 34,
    color: "rgba(56,175,91,1)",
    label: ""
  },
  {
    value: 66,
    color: "#3c4449",
    label: ""
  }];
             

var options2 = {
  animation: false,
  responsive: true,
  segmentShowStroke: false,
  percentageInnerCutout: 90
}

new Chart($("#c4").get(0).getContext("2d")).Doughnut(data2,options2);
</script>
</body>
</html>