<?php
$conn = mysqli_connect("localhost","root","","healthcard") or die("connection failed");

$puname=$_POST['username'];	
$ppwd=md5($_POST['password']);


$sql = "select * from master_patient_table where email='{$puname}' and password='{$ppwd}'";
$result = mysqli_query($conn,$sql) or die("query uncessfull");
if(mysqli_num_rows($result) > 0 ){
echo "<alert>login succesfull</alert>";
}
else {
    echo "<alert>login unsucessfull</alert>";
    header("Location: http://localhost/healthcarecard-main/healthcarecard-main/login.php");
}


?>