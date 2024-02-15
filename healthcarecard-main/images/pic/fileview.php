<?php
include "config.php";

    $que = "SELECT * FROM master_patient_table where healthcardnumber = '0' ";
        $res = mysqli_query($con,$que);
            while($row = mysqli_fetch_assoc($res))
            { 

           print $row['piccon'];
           // $myfile = fopen($row['pincon']);
         //   echo fread($myfile,filesize($row['pincon']));
         //   fclose($myfile);
          
            }
            ?>
             <!--<img src="images\jpg;charset=utf8;base64,<?php //echo base64_encode($row['piccon']); ?>"/>!-->