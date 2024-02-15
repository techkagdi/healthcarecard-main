
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanner</title>
    <?php
include "config.php";
session_start();
?>
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/report.css">
    
  <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>

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
          <a href="Scanner.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Scan Card</span>
          </a>
        </li>
        
        <li>
          <a href="setting.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Settings</span>
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
        <span class="dashboard">Doctor Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="images/download.jpg" alt="">
        <span class="admin_name"><?php 
         echo $_SESSION['dr_emailid']?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
 <!--navbar section ends-->

 <!--user image and details here-->
 <div class="home-content">
    <div class="overview-boxes">
      
    </div>  
<!--user diseases table-->
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">Scan Health Card</div>
            <div class="sales-details">
        <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <br>
                <center><div id="qr-reader" height = "50" widght = "50"class="qr-reader-custom"></div></center>
                <!--<div id="result"></div>-->
              </div>
            </div>
          </div>
    </div>
    </div>
  </div>
</div>
<form method="post" class="form_scan">
  <input type= "text" name="hcnumber" id = "result" class="text_scan">
  <div class="button">
          <input type="submit" name="submit" value="see report" >
  </div>   
</form>

<?php


if(isset($_POST['submit'])){
  $hcnumber = $_POST['hcnumber'];
  $sql = "SELECT * FROM master_patient_table WHERE healthcardnumber = {$hcnumber}";
  $result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
             $_SESSION['pa_hc_no'] = $hcnumber;
             ?>  
  <script> window.location.href = "http://localhost/healthcarecard-main/healthcarecard-main/doctor/view_reports.php";</script>

<?php }
else {
  echo "patient not found";
}
}
?>


  </section>

  <script src="js/dr.js"></script>

  <script>
    
    const scanner = new Html5QrcodeScanner('qr-reader' , {
      qrbox:{
        width:100,
        height:100,
      },
      fps:20,
    });

    scanner.render(success , error);

    function success(result){
     document.getElementById('result').value = `
      ${result}
      `;
      
      scanner.clear();
      document.getElementById('qr-reader').remove();
    
    }
    
function error(err){
  console.error(err);
}

  </script>

</body>
</html>