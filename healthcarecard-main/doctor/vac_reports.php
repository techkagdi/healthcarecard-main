<?php
include "config.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>

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
          <a href="Dr_Dashboard.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="view_reports.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">View Reports</span>
          </a>
        </li>
        <li>
          <a href="update_reports.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Add Report</span>
          </a>
        </li>
        <li>
          <a href="vac_reports.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Vaccination Report</span>
          </a>
        </li>
        <li>
          <a href="allergies.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Allergies</span>
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
        <span class="dashboard">Vaccination Details </span>
      </div>
      <div class="profile-details">
        <img src="images/download.jpg" alt="">
        <span class="admin_name"><?php echo $_SESSION['dr_emailid']?></span>
     
      </div>
    </nav>
 <!--navbar section ends-->
  <?php 
  $hcnumber = trim($_SESSION['pa_hc_no']);
  $sql = "SELECT * FROM master_patient_table WHERE healthcardnumber = {$hcnumber}";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
                
  while($row = mysqli_fetch_assoc($result)) {

  $name = $row['p_name'];
  $dob = $row['dob'];
  $phoneno = $row['phoneno'];
  $address = $row['address'];
  $ecname = $row['emc_name'];
  $ecno = $row['emergency_no'];
  $ecrelation =$row['emc_relation'];

  }}

  
  
  ?>
 <!--user image and details here-->
 <div class="home-content">
  <div class="overview-boxes">
    <div class="box">
      <div class="right-side">
          <img src="http://localhost/healthcarecard/hc/patient/<?php echo $hcnumber?>.png" class="images">
        <div class="number"><?php echo $name;?></div>

        
        
      </div>
    </div>
    <div class="box2">
      <div class="right-side">
          
        <div class="number"><b>D.O.B: </b><span><?php echo $dob;?></span></div><br>
        <div class="number"><b>Phone number: </b><span><?php echo $phoneno;?></span></div><br>
        <div class="number"><b>Address:</b> <span><?php echo $address;?></span></div><br>
        <div class="number"><b>Emergency contact: </b> <span><?php echo $ecno;?></span></div><br>
        <div class="number"><b>Name: </b><span><?php echo $ecname;?></span></div><br>
        <div class="number"><b>Relation : </b><span><?php echo $ecrelation;?></span></div>
      </div>
    </div>
  </div><br>
<!--user diseases table-->
<?php
 $hc =$_SESSION['pa_hc_no'];
 $sql = "SELECT * FROM vac_table WHERE pa_hc_no = {$hc}";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
                

  ?>
  
<!--user diseases table-->
<div class="sales-boxes">
    
     
      <div class="sales-details"><br>
      <br> <br> <br> <br> <br> <br> <br> <br> <br>
      <table >
    <tr id="header">
        <th>Vaccine Name</th>
        <th>Date </th>
        <th>Place </th>
        <th>Vaccination Certificate</th>
       
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)) {?>
    <tr>
        <td><?php echo $row['vac_name'];?> </td>
        <td><?php echo $row['vac_date'];?></td>
        <td><?php echo $row['vac_place'];?></td>
        <td><a href = "http://localhost/healthcarecard/hc/patient/<?php echo $row['vac_certificate'];?>" target="_blank" ><?php echo $row['vac_certificate']?></a></td>
       <?php }?>

    </tr>  
</table>
    
    </div>
  </div>
</div>
  <?php }?>  </section>

  <script src="js/dr.js">
 </script>

</body>
</html>