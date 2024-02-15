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
    <title>Add reports </title>

   
    <link rel="stylesheet" href="style.css">


    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/report.css">
    <link rel="stylesheet" href="css/update_report.css">
    
</head>

<body>

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
        <span class="dashboard">Add Report </span>
      </div>
      <div class="profile-details">
        <img src="images/download.jpg" alt="">
        <span class="admin_name"><?php echo $_SESSION['dr_emailid']?></span>
     
      </div>
    </nav>
 <!--navbar section ends-->

 <?php 
  
  $hcnumber = trim($_SESSION["pa_hc_no"]);
  $sql = "SELECT * FROM master_patient_table WHERE healthcardnumber ='{$hcnumber}' ";
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
  </div>
<!--user diseases table-->
<div class="container">
    <div class="title">Add Report</div>
    <div class="content">
      <form method="post"  class="form" id="form"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Disease Name</span>
            <input type="text" placeholder="Enter Disease name" name = "dname"required><br>
          </div>

          
          <div class="input-box">
            <span class="details">Symptoms</span>
            <input type="text" placeholder="Symptoms" required name = "symptom"><br>
          </div>

          <div class="input-box">
            <span class="details">Diagnosis date</span>
            <input type="text" placeholder="date" required name = "d_date"><br>
          </div>

          <div class="input-box">
            <span class="details">Medicines</span>
            <input type="text" placeholder="medicines" name = "medicines"><br>
          </div>

          <div class="input-box">
            <span class="details">Dosage</span>
            <input type="text" placeholder="medicines dosage" name = "dosage"><br>
            </div>

          <div class="input-box">
            <span class="details">Suggestion</span>
            <input type="text" placeholder="suggestion" name = "suggest"><br>
          </div>

          <div class="input-box">
            <span class="details">Cured date date</span>
            <input type="text" placeholder="date"  name = "c_date"><br>
          </div>

        <div>
          <span class="details">Upload Reports</span>
          <input type="file" name="postimg" id = "postimg"><br>

        </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Add">
        </div>
      </form>

      <?php
       if(isset($_POST['submit'])){
      
      
      $pa_hc_no = $_SESSION['pa_hc_no'];
      $dr_id = 7;
      $name = $_POST['dname'];
      $medicines = $_POST['medicines'];
      $suggest = $_POST['suggest'];
      $dosage = $_POST['dosage'];
      $symptoms = $_POST['symptom'];
      $d_date = $_POST['d_date'];
      $cureddate = $_POST['c_date'];

      if($_FILES['postimg']['name']!=""){
        $file_name = $name.$medicines.".png";
        $file_size = $_FILES['postimg']['size'];
      
        $file_tmp = $_FILES['postimg']['tmp_name'];
        $file_type = $_FILES['postimg']['type'];
        move_uploaded_file($file_tmp,"".str_replace(' ', '',$file_name));
        $file_loc = "".str_replace(' ', '',$file_name);}
        else{
          $file_loc = "";
        }



      $sql = "INSERT INTO disease_table1(pa_hc_no,d_name,dr_id,medicines,symtoms,d_date,suggest,report,ongoind_d_no) VALUES('{$pa_hc_no}','{$name}','{$dr_id}','{$medicines}','{$symptoms}','{$d_date}','{$suggest}','{$file_loc}','1')";
      mysqli_query($con,$sql);
    
    }
      ?>
    </div>
  </div>
 </div> 
  </section>

  <script src="js/dr.js">
 </script>

</body>
</html>