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
    <title>Dashboard</title>

   
    <link rel="stylesheet" href="css/style.css">

 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css1/report.css">
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
          <a href="pt_dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="pt_add_vaccine.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Vaccine Report</span>
          </a>
        </li>
        <li>
          <a href="see_hc_card.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Health Card</span>
          </a>
        </li>
        <li>
          <a href="search_clinic.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Clinic List</span>
          </a>
        </li>
        <li>
          <a href="allergie.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Allergy</span>
          </a>
</li>
        <li>
          <a href="control_report.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Control Report</span>
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
        <span class="dashboard">User Details</span>
      </div>
      <div class="profile-details">
        <img src="<?php echo $_SESSION['pa_hc_no'];?>.png" alt="">
        <span class="admin_name"><?php echo $_SESSION['email']?></span>
       
      </div>
    </nav>
 <!--navbar section ends-->
 <?php
$sql = "SELECT * FROM master_patient_table WHERE healthcardnumber = '{$_SESSION['pa_hc_no']}'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
                
  while($row = mysqli_fetch_assoc($result)) {

  $name = $row['p_name'];
  $address = $row['address'];
  $phone = $row['phoneno'] ;
  $gender = $row['gender'];
  $dob = $row['dob'];
  $emname = $row['emc_name'];
  $emcno = $row['emergency_no'];
  $emcrela = $row['emc_relation'];
  }}


?>
 <!--user image and details here-->
 <div class="home-content">
  <div class="overview-boxes">
    <div class="box">
      <div class="right-side">
          <img src="<?php echo $_SESSION['pa_hc_no'];?>.png" class="images">
        <div class="number"><?php echo $name?><br>
        </div>
        
         <h6 ><br><b>Mobile No: </b><?php echo $phone?></h6>
         <h6 ><b>Address: </b><?php echo $address?></h6>
         <h6><b>Birth Date: </b><?php echo $dob?></h6>
        <h6><b>Gender: </b><?php echo $gender?> </h6>
      </div>
    </div>
    <div class="box2">
      <div class="right-side">
          <div class="box-topic">EMERGENCY DETAILS</div><br>
        <div class="number"><b>Phone number: </b> <?php echo $emcno ?></div><br>
        <div class="number"><b>Contact Name:  </b><?php echo $emname?>  </div><br>
        <div class="number"><b>Relation:  </b> <?php echo $emcrela?> </div><br>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="sales-boxes">
    <div class="recent-sales box"><br><br>
    
      <div class="sales-details">
      <?php
 $hc = $_SESSION['pa_hc_no'];
 $sql = "SELECT * FROM disease_table1 WHERE pa_hc_no = {$hc}";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){?>
    <div class="sales-boxes">

            <table >
                <tr id="header">
                    <th>Report id </th>
                    <th>Diease</th>
                    <th>Medicines</th>
                    <th>Symptoms</th>
                    <th>Diagnosis date</th>
                    <th>Dr Suggestion</th>
                    <th>Report</th>
                    <th>Current Condition</th>
                    <th>Diseases cure date</th>
                </tr>

                <?php
    while($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                  <td><?php echo $row['disease_id'] ?></td>
                    <td><?php echo $row['d_name'] ?> </td>
                    <td><?php echo $row['medicines'] ?> </td>
                    <td><?php echo $row['symtoms'] ?></td>
                    <td><?php echo $row['d_date'] ?></td>
                    <td><?php echo $row['suggest'] ?> </td>
                    <td><a href = "http://localhost/healthcarecard-main/healthcarecard-main/doctor/<?php echo $row['report'];?>" target="_blank" ><?php echo $row['report']?></a></td>
                    <td><?php if($row['ongoind_d_no']='1'){echo "Not cured";}
                    else{
                      echo "Cured";
                    }?> </td>
                   
        
                </tr>
           <?php } ?>
              </table>
              <?php }?>
      </div>
    </div>
  </div>
</div>
</section>

  <script src="js1/dr.js"></script>

</body>
</html>


