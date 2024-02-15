<?php
include "config.php";
include "authentication.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/report.css">
</head>
<body>

    <!--Side panels-->
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">HealthCard</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Scanner.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Scan Card</span>
          </a>
        </li>
        <li>
          <a href="setting.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Account</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
   <!--side panel ends-->
  <!--navbar section starts-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="images/download.jpg" alt="">
        <span class="admin_name"><?php echo $_SESSION['dr_emailid']?></span>
      
      </div>
    </nav>
 <!--navbar section ends-->
<?php
$did = $_SESSION['dr_id'];
$sql = "SELECT * FROM master_doctor_table WHERE dr_id = {$did}";
$result = mysqli_query($con, $sql) or die("Query failed");

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $name = $row['dr_name'];
       $dr_mono = $row['dr_mono'];
       $address = $row['dr_address'];
       $degree = $row['dr_degree'];
  
        }
      } ?>
 <!--user image and details here-->
 <div class="home-content">
  <div class="overview-boxes">
    <div class="box">
      <div class="right-side">
          <img src="images/images (2).jpg" class="images">
        <div class="number"><?php echo $name;?></div>
      </div>
    </div>
    <div class="box2">
      <div class="right-side">
          <div class="box-topic">DETAILS</div><br>
        <div class="number">NAME: <span><?php echo $name;?></span></div><br>
        <div class="number">Address: <span><?php echo $address;?></span></div><br>
        <div class="number">Phone number: <span><?php echo $dr_mono;?></span></div><br>
        <div class="number">Degree :  <span><?php echo $degree;?></span></div><br>
      
      </div>
    </div>
  </div>
  </div>
</div>
<div class="google-charts" style=" display: flex;
    flex-direction:column;
    display:grid;
    border-radius:30px" 
   >
<div id="myChart" style=" display: flex;
    flex-direction:column;
    height:400px;
    border-radius:30px;
    margin:10px" >  </div>

</div>
</section>

  <script src="js/dr.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>

  google.charts.load('current',{packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);


  function drawChart() {
// Set Data
var data = google.visualization.arrayToDataTable([
  ['Price', 'Size'],
  ['2010',7],[2011,8],[2012,8],[2013,9],[2014,9],
  [2015,9],[2016,10],[2017,11],
  [2018,14],[2019,14],[2020,15]
]);
// Set Options
var options = {
  title: 'Patient details ',
  hAxis: {title: 'Year'},
  vAxis: {title: 'Total number of patient in thousands  '},
  legend: 'none'
};
// Draw
var chart = new google.visualization.LineChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>
</body>
</html>

