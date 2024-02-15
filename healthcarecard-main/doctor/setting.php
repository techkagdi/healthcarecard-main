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
    <title>Profile</title>

    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/report.css">
    <link rel="stylesheet" href="css/update_report.css">
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
        <span class="dashboard">Account</span>
      </div>
      <div class="profile-details">
        <img src="images/download.jpg" alt="">
        <span class="admin_name"><?php echo $_SESSION['dr_emailid']?></span>
   
      </div>
    </nav>
 <!--navbar section ends-->

 <!--user image and details here-->
 <div class="home-content">
    <div class="overview-boxes">
      
    </div>  
<!--user diseases table-->
<div class="container">
    <div class="title">Setings</div>
    <div class="content">
      <form action="#" class="form" id="form">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Phone number</span>
            <input type="text" placeholder="new phone number" ><br>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="new email" ><br>
          </div>

          
          <div class="input-box">
            <span class="details">Add qualification</span>
            <input type="text" placeholder="add/update qualification" ><br>
          </div>

           
          
            <div >
                <span class="details">Upload certificate</span>
                <input type="file" >
          </div>

        </div>
        
        <div class="button">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>
 </div> 
  </section>

  <script src="js/dr.js">
 </script>

</body>
</html>