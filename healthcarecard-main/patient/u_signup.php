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
    <script src="sweetalert2.all.js"></script>
    <title>User signup </title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  margin-right: 20px;
  
}
.container{
  width: 150%;
  background-color: #fff;
  padding: 10px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}

.input-box small{
  color: red;
  position: absolute;
  visibility: hidden;
}

.input-box.error small{
  visibility: visible;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #00bfa6, #5548c5);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #00bfa6, #5548c5);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

</style>
</head>
<body>
    <!--<div>
        <img src="images/loop_2.gif">
    </div>-->
  <div class="container">
    <div class="title">Fill up your details</div>
    <div class="content">
      <form  class="form" method="POST" id="form"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name"  id="username" name = "uname" autocomplete="off" required><br>
            <small>error msg</small><br>
          </div>
          <div class="input-box">
            <span class="details">H C number</span>
            <input readonly type="text" value = "<?php echo $_SESSION['pa_hc_no'];?>"  name = "email" autocomplete="off" required><br>
         
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input readonly type="email" value = "<?php echo $_SESSION['email'];?>" required id="email" name = "email" autocomplete="off" required><br>
        
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
                    <input type="text" placeholder="Mobile No " name = "ph_no" pattern="[0-9]{10}" title="Mobile nomust be of 10 digits" required/>
            <br>
           
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="number" placeholder="Enter your age" required id="age" name = "age" autocomplete="off"><br>
            <small>error msg</small><br>
          </div>
          <div class="input-box">
            <span class="details">Address 1</span>
            <input type="text" placeholder="Enter Address line1" required id="add" name = "address" autocomplete="off" ><br>
            <small>error msg</small><br>
          </div>
          <div class="input-box">
            <span class="details">Address 2</span>
            <input type="text" placeholder="Enter Address line2" required id="add" name = "address2" autocomplete="off"><br>
            <small>error msg</small><br>
          </div>
          <div class="input-box">
            <span class="details">Aadharcard number</span>
            <input type="text" placeholder="Enter Aadhar No" required id="aadhar_no" name = "adhar_no" autocomplete="off" pattern="[0-9]{12}" title="Adharcard number must be of 12 digits"><br>
           
          </div>
          <div class="input-box">
            <span class="details">Blood group</span>
            <input type="text" placeholder="Enter your blood group" required id="pass" name = "bgroup" autocomplete="off">
            </div>
            <div class="input-box">
            <span class="details">D.O.B</span>
            <input type="date" placeholder="Enter your dob" required id="pass" name = "dob" autocomplete="off">
            </div>

            <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value = "Male">
          <input type="radio" name="gender" id="dot-2" value = "Female">
          <input type="radio" name="gender" id="dot-3" value = "Other">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender"  >Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">other</span>
            </label>
         
        </div>
          </div>
          <div class="input-box">
            <span class="details">Emergency contact</span>
            <input type="text" placeholder="Enter contact no" required id="eccontact" name = "eccontact" autocomplete="off" pattern="[0-9]{10}" title="Mobile nomust be of 10 digits"><br>
            <small>error msg</small><br>
          </div>
          <div class="input-box">
            <span class="details">Contact relation </span>
            <input type="text" placeholder="enter relation" required id="ecrelation" name = "ecrelation" autocomplete="off"><br>
            <br>
          </div>
          <div class="input-box">
            <span class="details">Contact name</span>
            <input type="text" placeholder="enter name" required id="ecname"  name="ecname" autocomplete="off"><br>
           <br>
          </div>
        </div>
      
        
        <span class="details">upload your photo </span>
        <input type="file" name="postimg" id="postimg">
        <div class="button">
          <input type="submit" name="Submit" value="Register">
        </div>
      
      </form>
    </div>
  </div>
  
  
  
  <?php

          if(isset($_POST['Submit'])){
          
          $name = $_POST['uname'];
          $phno = $_POST['ph_no'];
          $age = $_POST['age'];
          $address = $_POST['address'].$_POST['address2'];
          $phno = $_POST['ph_no'];
          $adhar_no = $_POST['adhar_no'];
          $dob =$_POST['dob'];
          $eccontact =$_POST['eccontact'];
          $bgroup = $_POST['bgroup'];
          $ecname = $_POST['ecname'];
          $ecrelation = $_POST['ecrelation'];
          $email = $_SESSION['email'];
          $gender = $_POST['gender'];
          $hc = $_SESSION['pa_hc_no'];
          $idate = '2000-02-12'; 
          
          if($_FILES['postimg']['name']!=""){
            $file_name = $_SESSION['pa_hc_no'].".png";
            $file_size = $_FILES['postimg']['size'];
          
            $file_tmp = $_FILES['postimg']['tmp_name'];
            $file_type = $_FILES['postimg']['type'];
            move_uploaded_file($file_tmp,"".str_replace(' ', '',$file_name));
            $file_loc = "".str_replace(' ', '',$file_name);}
            else{
              $file_loc = ""; }

          $sql = "INSERT INTO master_patient_table(p_name,healthcardnumber,phoneno,address,bloodgroup,gender,age,aadhar_no,emergency_no,emc_name,emc_relation,date_issue_hc,fileloc,dob) VALUES('$name','$hc','$phno','$address','$bgroup','$gender','$age','$adhar_no','$eccontact','$ecname','$ecrelation','$idate','$file_loc','$dob')";
          mysqli_query($con,$sql);?>
         <script>
          
          Swal.fire({
          icon:'success',
          text:'Rrgistration succesfull'
          });
                // window.location.href = "http://localhost/healthcarecard/hc/login.php";
                 </script>
                  <meta http-equiv = "refresh" content = "2; url = http://localhost/healthcarecard-main/healthcarecard-main/login.php" />
          <?php
        }
          
?>

<script type="text/javascript">


</script>
</body>
</html>