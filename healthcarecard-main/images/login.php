

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="sweetalert2.all.js"></script>
    <title>Login Form</title>
    <script src="https://kit.fontawesome.com/9394570c5d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
<!--reagistration-->  
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method = "post" class="sign-up-form">
                <h2 class="title">Doctor Login</h2>
                <div class="input-feild">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Dr Email id " name = "username1"/>
                </div>
                <div class="input-feild">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name = "password1"/>
                </div>
                <button  class="btn solid" name="drlogin">   submit </button>
            </form>
    <!-- Dr login php code -->
    <?php
    error_reporting(0);
            if(isset($_POST['drlogin'])){
            include "config.php";
            $username1 = mysqli_real_escape_string($con,$_POST['username1']);
            $pass1 = $_POST['password1'];

            $sql = "SELECT dr_id, dr_name FROM master_doctor_table WHERE dr_emailid = '{$username1}' AND password = '{$pass1}' ";
            $result = mysqli_query($con, $sql) or die("Query failed");

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION["dr_id"] = $row['dr_id'];
                    $_SESSION["dr_name"] = $row['dr_name'];
                   // header("Location: http://localhost/healthcarecard/hc/usignup.php");
                   echo "<script>
                   Swal.fire({
                   icon:'success',
                   text:'Loged In Successfully'
                   })</script>";
                   
                }?>
           
            <meta http-equiv = "refresh" content = "2; url = Dr_dashboard.php " />
            <?php }
            else{
                echo "<div class = 'alert2' >invalid username and password </div >";
                
                
            }          
        }
            
            
            ?>

<!--login-->  
            <form  method = "post"class="sign-in-form">
                <h2 class="title">User Login</h2>
                <div class="input-feild">
                    <i class="fas fa-user"></i>
                    <input type="text" name = "username" placeholder="Email id "/>
                </div>
                <div class="input-feild">
                    <i class="fas fa-lock"></i>
                    <input type="password" name = "password" placeholder="Password"/>
                </div>
                <button  class="btn solid" name="Login">   submit </button>

            </form> 
<!--php login code for user  -->
            <?php
            if(isset($_POST['Login'])){
            include "config.php";
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $pass = $_POST['password'];

            $sql = "SELECT healthcardnumber, email FROM master_patient_table WHERE email = '{$username}' AND password = '{$pass}' ";
            $result = mysqli_query($con, $sql) or die("Query failed");

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION["healthcardnumber"] = $row['healthcardnumber'];
                    $_SESSION["email"] = $row['email'];
                   // header("Location: http://localhost/healthcarecard/hc/usignup.php");
                   echo "<script>
                   Swal.fire({
                   icon:'success',
                   text:'Loged In Successfully'
                   })</script>";
                }
            ?>
            <meta http-equiv = "refresh" content = "2; url = pt_dashboard.php " />
            <?php }
            else{
                echo "<div class = 'alert2' >invalid username and password </div>";
            }          
        }
            
            
            ?>
        </div>
    </div>
    

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Are you a doctor ? login from here</h3>
                <br>
                <p>click the bellow button for doctor login!
                </p><br>
                <button class="btn transparent" id="sign-up-button">Dr login</button>
                <button class="btn transparent" id="sign-up-button"><a href="usignup.html">signup</a><br></button>
            </div><br>
            
            <img src="images/doctor-studying-patient-profile-isometric-illustration-futuristic-working-place-augmented-reality-options-cartoon-physician-173941277.jpg" alt="" class="image">
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>one of us?</h3><br>
                <p>Signin with username and password to see your medical records
                </p><br>
                <button class="btn transparent" id="sign-in-button">User Login</button>
                <button class="btn transparent" id="sign-up-button"><a href="usignup.html">signup</a></button>
            </div><br>
            <img src="images/istockphoto-1263039069-612x612.jpg" alt="" class="image"/>
        </div>
    </div>
</div>

    <script src="js/script.js"></script>
</body>
</html>