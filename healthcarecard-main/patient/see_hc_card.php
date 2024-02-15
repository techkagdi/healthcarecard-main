<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>see_health_card</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
 
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
 
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
 
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
 
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/master2.css">

   
    <link rel="stylesheet" href="style.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>

      /* Googlefont Poppins CDN Link */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  }
  .sidebar{
    position: fixed;
    height: 100%;
    width: 240px;
    background:#00bfa6;
    transition: all 0.5s ease;
  }
  .sidebar.active{
    width: 60px;
  }
  .sidebar .logo-details{
    height: 80px;
    display: flex;
    align-items: center;
  }
  .sidebar .logo-details i{
    font-size: 28px;
    font-weight: 500;
    color: #fff;
    min-width: 60px;
    text-align: center
  }
  .sidebar .logo-details .logo_name{
    color: #fff;
    font-size: 24px;
    font-weight: 500;
  }
  .sidebar .nav-links{
    margin-top: 10px;
  }
  .sidebar .nav-links li{
    position: relative;
    list-style: none;
    height: 50px;
  }
  .sidebar .nav-links li a{
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
  }
  .sidebar .nav-links li a.active{
    background: #00bfa6;
  }
  .sidebar .nav-links li a:hover{
    background: #00bfa6;
  }
  .sidebar .nav-links li i{
    min-width: 60px;
    text-align: center;
    font-size: 18px;
    color: #fff;
  }
  .sidebar .nav-links li a .links_name{
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
  }
  .sidebar .nav-links .log_out{
    position: absolute;
    bottom: 0;
    width: 100%;
  }
  .home-section{
    position: relative;
    background: #f5f5f5;
    min-height: 100vh;
    width: calc(100% - 240px);
    left: 240px;
    transition: all 0.5s ease;
  }
  .sidebar.active ~ .home-section{
    width: calc(100% - 60px);
    left: 60px;
  }
  .home-section nav{
    display: flex;
    justify-content: space-between;
    height: 80px;
    background: #fff;
    display: flex;
    align-items: center;
    position: fixed;
    width: calc(100% - 240px);
    left: 240px;
    z-index: 100;
    padding: 0 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    transition: all 0.5s ease;
  }
  .sidebar.active ~ .home-section nav{
    left: 60px;
    width: calc(100% - 60px);
  }
  .home-section nav .sidebar-button{
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 500;
  }
  nav .sidebar-button i{
    font-size: 35px;
    margin-right: 10px;
  }

      table {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          border-collapse: collapse;
          width: 100%;
          height: 200px;
          border: 1px solid #bdc3c7;
          box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
          margin-top: 300px;
          margin-left: 10px;
          margin-right: 20px;
      }

      tr {
          transition: all .2s ease-in;
          cursor: pointer;
      }

      th,
      td {
          padding: 12px;
          text-align: left;
          border-bottom: 1px solid #ddd;
      }

      #header {
          background-color: #16a085;
          color: #fff;
      }
      tr:hover {
          background-color: #f5f5f5;
          transform: scale(1.02);
          box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
      }

      @media only screen and (max-width: 768px) {
          table {
              width: 90%;
          }
      }

  .home-section nav .search-box{
    position: relative;
    height: 50px;
    max-width: 550px;
    width: 100%;
    margin: 0 20px;
  }
  nav .search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    background: #F5F6FA;
    border: 2px solid #EFEEF1;
    border-radius: 6px;
    font-size: 18px;
    padding: 0 15px;
  }
  nav .search-box .bx-search{
    position: absolute;
    height: 40px;
    width: 40px;
    background: #2697FF;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 4px;
    line-height: 40px;
    text-align: center;
    color: #fff;
    font-size: 22px;
    transition: all 0.4 ease;
  }
  .home-section nav .profile-details{
    display: flex;
    align-items: center;
    background: #F5F6FA;
    border: 2px solid #EFEEF1;
    border-radius: 6px;
    height: 50px;
    min-width: 190px;
    padding: 0 15px 0 2px;
  }
  nav .profile-details img{
    height: 40px;
    width: 40px;
    border-radius: 6px;
    object-fit: cover;
  }
  nav .profile-details .admin_name{
    font-size: 15px;
    font-weight: 500;
    color: #333;
    margin: 0 10px;
    white-space: nowrap;
  }
  nav .profile-details i{
    font-size: 25px;
    color: #333;
  }
  .home-section .home-content{
    overflow: hidden;
      padding-top: 90px;
    margin-left: 20px;
    padding-left: 20px;
  }
  .home-content .overview-boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 20px;
    margin-bottom: 26px;
  }

  .home-content .overview-boxes .images{
    border-radius: 60%;
    height: 90%;
    width: 90%;
    object-fit: cover;
  }

  table {

        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    tr {

        cursor: pointer;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    #header {
        background-color: #16a085;
        color: #fff;
    }

    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
        color: #fff;
        padding: 10px 0px;
    }


  .overview-boxes .box{
    display: flex;
    align-items: center;
    justify-content: center;
    width: calc(100% / 4 - 15px);
    background: #fff;
    padding: 15px 14px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  }
  .overview-boxes .box-topic{
    font-size: 20px;
    font-weight: 500;
  }
  .home-content .box .number{
    display: inline-block;
    font-size: 35px;
    margin-top: -6px;
    font-weight: 500;
  }
  .home-content .box .indicator{
    display: flex;
    align-items: center;
  }
  .home-content .box .indicator i{
    height: 20px;
    width: 20px;
    background: #8FDACB;
    line-height: 20px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
    font-size: 20px;
    margin-right: 5px;
  }
  .box .indicator i.down{
    background: #e87d88;
  }
  .home-content .box .indicator .text{
    font-size: 12px;
  }
  .home-content .box .cart{
    display: inline-block;
    font-size: 32px;
    height: 50px;
    width: 50px;
    background: #cce5ff;
    line-height: 50px;
    text-align: center;
    color: #66b0ff;
    border-radius: 12px;
    margin: -15px 0 0 6px;
  }
  .home-content .box .cart.two{
     color: #2BD47D;
     background: #C0F2D8;
   }
  .home-content .box .cart.three{
     color: #ffc233;
     background: #ffe8b3;
   }
  .home-content .box .cart.four{
     color: #e05260;
     background: #f7d4d7;
   }
  .home-content .total-order{
    font-size: 20px;
    font-weight: 500;
  }
  .home-content .sales-boxes{
    display: flex;
    justify-content: space-between;
    /* padding: 0 20px; */
  }

  /* left box */
  .home-content .sales-boxes .recent-sales{
    width: 150%;
    background: #fff;
    padding: 20px 30px;
    margin: 0 20px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  }
  .home-content .sales-boxes .sales-details{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .sales-boxes .box .title{
    font-size: 24px;
    font-weight: 500;
    /* margin-bottom: 10px; */
  }
  .sales-boxes .sales-details li.topic{
    font-size: 20px;
    font-weight: 500;
  }
  .sales-boxes .sales-details li{
    list-style: none;
    margin: 8px 0;
  }
  .sales-boxes .sales-details li a{
    font-size: 18px;
    color: #333;
    font-size: 400;
    text-decoration: none;
  }
  .sales-boxes .box .button{
    width: 100%;
    display: flex;
    justify-content: flex-end;
  }
  .sales-boxes .box .button a{
    color: #fff;
    background: #00bfa6;
    padding: 4px 12px;
    font-size: 15px;
    font-weight: 400;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  .sales-boxes .box .button a:hover{
    background:  #0d3073;
  }

  /* Right box */
  .home-content .sales-boxes .top-sales{
    width: 35%;
    background: #fff;
    padding: 20px 30px;
    margin: 0 20px 0 0;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  }
  .sales-boxes .top-sales li{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 10px 0;
  }
  .sales-boxes .top-sales li a img{
    height: 40px;
    width: 40px;
    object-fit: cover;
    border-radius: 12px;
    margin-right: 10px;
    background: #333;
  }
  .sales-boxes .top-sales li a{
    display: flex;
    align-items: center;
    text-decoration: none;
  }
  .sales-boxes .top-sales li .product,
  .price{
    font-size: 17px;
    font-weight: 400;
    color: #333;
  }
  /* Responsive Media Query */
  @media (max-width: 1240px) {
    .sidebar{
      width: 60px;
    }
    .sidebar.active{
      width: 220px;
    }
    .home-section{
      width: calc(100% - 60px);
      left: 60px;
    }
    .sidebar.active ~ .home-section{
      /* width: calc(100% - 220px); */
      overflow: hidden;
      left: 220px;
    }
    .home-section nav{
      width: calc(100% - 60px);
      left: 60px;
    }
    .sidebar.active ~ .home-section nav{
      width: calc(100% - 220px);
      left: 220px;
    }
  }
  @media (max-width: 1150px) {
    .home-content .sales-boxes{
      flex-direction: column;
    }
    .home-content .sales-boxes .box{
      width: 100%;
      overflow-x: scroll;
      margin-bottom: 30px;
    }
    .home-content .sales-boxes .top-sales{
      margin: 0;
    }
  }
  @media (max-width: 1000px) {
    .overview-boxes .box{
      width: calc(100% / 2 - 15px);
      margin-bottom: 15px;
    }
  }
  @media (max-width: 700px) {
    nav .sidebar-button .dashboard,
    nav .profile-details .admin_name,
    nav .profile-details i{
      display: none;
    }
    .home-section nav .profile-details{
      height: 50px;
      min-width: 40px;
    }
    .home-content .sales-boxes .sales-details{
      width: 560px;
    }
  }
  @media (max-width: 550px) {
    .overview-boxes .box{
      width: 100%;
      margin-bottom: 15px;
    }
    .sidebar.active ~ .home-section nav .profile-details{
      display: none;
    }
  }
    @media (max-width: 400px) {
    .sidebar{
      width: 0;
    }
    .sidebar.active{
      width: 60px;
    }
    .home-section{
      width: 100%;
      left: 0;
    }
    .sidebar.active ~ .home-section{
      left: 60px;
      width: calc(100% - 60px);
    }
    .home-section nav{
      width: 100%;
      left: 0;
    }
    .sidebar.active ~ .home-section nav{
      left: 60px;
      width: calc(100% - 60px);
    }
  }
</style>
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
        <span class="dashboard">H.C card</span>
      </div>
      <div class="profile-details">
        <img src="<?php echo $_SESSION['pa_hc_no'].".png"; ?>" alt="">
        <span class="admin_name"><?php echo $_SESSION['email']; ?></span>
  
      </div>
    </nav>  
    <div class="limiter">
		<div class="container-login100">
    <div class="wrap-login100">
				
				<form class="login100-form validate-form" method="POST">
                <div class="login100-form-title" style="font-size:42px;">
						 See Your Health Card 
                         </div>
                     
					<div class="container-login100-form-btn">
					<!--<a href="index.html">-->
						<button class="login100-form-btn" name="upload" id="upload">Click here to see your health card
                      </button> 
					</div>
                    
					 <!--</a>--> 
						 
                </form>
			</div></div></div></section>
 <!--navbar section ends-->

 <!--user image and details here-->

<!--user diseases table--><?php
if(isset($_POST['upload'])){

  ?>
   <script>
         window.location.href = "card.php";
         </script>
  <?php
}
    ?>
      
 

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>


