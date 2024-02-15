<?php
include "config.php";
session_start();
echo $_SESSION['healthcardnumber'];
/*$name = "juxar";
$address = "bharuch";
$sql = "INSERT INTO master_patient_table(healthcardnumber,p_name,address) VALUES('$hc','$name','$address')";
mysqli_query($con,$sql) or die("query unsucessful");
echo "not found";
*/
?>