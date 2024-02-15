

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="js/font.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
<!--reagistration-->  
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method = "post" class="sign-up-form">
                <h2 class="title">Doctor Sign-Up</h2>
                <div class="input-feild">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email id " name = "username1" required/>
                </div>
                <div class="input-feild">
                    <i class="fas fa-phone"></i>
                    <input type="text" placeholder="Mobile No " name = "usermono1" pattern="[0-9]{10}" title="Mobile nomust be of 10 digits" required/>
                </div>
                <div class="input-feild">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name = "password1" required pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and atleast 8 or more characters"/>
                </div>
                <div class="input-feild">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm password" name = "password2" required pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and atleast 8 or more characters"/>
                </div>
                <button  class="btn solid" name="drsignup"> NEXT-> </button>
            </form>
    <!-- Dr signup php code -->
     <?php
     
     if(isset($_POST['drsignup']))
     {
        include 'config.php';
        session_start();
        $username1 = mysqli_real_escape_string($con,$_POST['username1']);
            $pass1 = $_POST['password1'];
            $drmo = $_POST['usermono1'];
            $pass2 = $_POST['password2'];
            if($pass1==$pass2){

            
            $sql = "INSERT INTO dr_registration(dr_emailid,dr_mono,dr_password) VALUES('$username1','$drmo','$pass1')"; 
            mysqli_query($con,$sql);
            $sql = "SELECT dr_id,dr_emailid FROM dr_registration WHERE dr_emailid = '$username1' AND dr_password = '$pass1'";

            $result = mysqli_query($con,$sql) or die("query uncessfull");
            if(mysqli_num_rows($result) > 0 ){
                
                while($row = mysqli_fetch_assoc($result)) {
            
                  

                 $_SESSION["dr_id"] = $row['dr_id'];
                 $_SESSION["dr_email"] = $row['dr_emailid'];
                 header("Location: http://localhost/healthcarecard-main/healthcarecard-main/doctor/d_signup.php");
                }}
            }
            else{
                echo "<div class='alert2'>Password Dont Match</div>";
            }
     }
     ?>

<!--user registration-->  
            <form  method = "post"class="sign-in-form">
                <h2 class="title">User Sign-Up</h2>
                <div class="input-feild">
                    <i class="fas fa-user"></i>
                    <input type="email" name = "username" placeholder="Email id" required/>
                </div>
                <div class="input-feild">
                    <i class="fas fa-phone"></i>
                    <input type="text" name = "usermono" placeholder="Mobileno"  pattern="[0-9]{10}" title="Mobile nomust be of 10 digits" required/>
                </div>
                <div class="input-feild">
                    <i class="fas fa-lock"></i>
                    <input type="password" name = "password" placeholder="Password" required pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and atleast 8 or more characters"/>
                </div>
                <div class="input-feild">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm password" name = "Password2"required pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and atleast 8 or more characters"/>
                </div>
                <button  class="btn solid" name="signup">   NEXT-> </button>

            </form> 
<!--php sign up code for user  -->
<?php
 
     if(isset($_POST['signup']))
     {
        include 'config.php';
        session_start();
        $username = mysqli_real_escape_string($con,$_POST['username']);
            $pass = $_POST['password'];
            $ptmo = $_POST['usermono'];
            $pass2 = $_POST['Password2'];
            if($pass == $pass2){
            $sqll = "INSERT INTO pt_registration(pt_emailid,pt_mono,pt_password) VALUES('$username','$ptmo','$pass')"; 
            mysqli_query($con,$sqll);
            $sql = "SELECT pa_hc_no, pt_emailid FROM pt_registration WHERE pt_emailid = '$username' AND pt_password = '$pass'";
            $result = mysqli_query($con,$sql) or die("query uncessfull");
            if(mysqli_num_rows($result) > 0 ){

                while($row = mysqli_fetch_assoc($result)) {
                 $_SESSION["pa_hc_no"] = $row['pa_hc_no'];
                 $_SESSION["email"] = $row['pt_emailid'];
                }
                    header("Location: http://localhost/healthcarecard-main/healthcarecard-main/patient/u_signup.php");
            }}
                 else{
                echo "<div>Password Dont Match";
            }
     }
     ?>
       
        </div>
    </div>
    

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Are you a doctor ? sign up from here</h3>
                <br>
                <p>click the bellow button for doctor Sign up!
                </p><br>
                <button class="btn transparent" id="sign-up-button">Dr Sign Up</button>
                <button class="btn transparent" id="sign-up-button"><a href="login.php">Login</a><br></button>
            </div><br>
            
            <img src="images/doctor-studying-patient-profile-isometric-illustration-futuristic-working-place-augmented-reality-options-cartoon-physician-173941277.jpg" alt="" class="image">
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>one of us?</h3><br>
                <p>Sign up for registration
                </p><br>
                <button class="btn transparent" id="sign-in-button">User Signup</button>
                <button class="btn transparent" id="sign-up-button"><a href="login.php">Login</a></button>
            </div><br>
            <img src="images/istockphoto-1263039069-612x612.jpg" alt="" class="image"/>
        </div>
    </div>
</div>

    <script src="js/script.js"></script>
</body>
</html>