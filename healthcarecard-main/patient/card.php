<?php
include "config.php";
session_start();
$hc = $_SESSION['pa_hc_no'];
$sql = "SELECT * FROM master_patient_table WHERE healthcardnumber = '{$hc}' ";

$result = mysqli_query($con,$sql) or die("query uncessfull");

if(mysqli_num_rows($result) > 0 ){
    
    while($row = mysqli_fetch_assoc($result)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="idCard.css">


    <style>
        *{
    margin: 00px;
    padding: 00px;
    box-sizing: content-box;
}

.container {
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #e6ebe0;
    flex-direction: row;
    flex-flow: wrap;

}

.font{
    height: 375px;
    width: 250px;
    position: relative;
    border-radius: 10px;
}

.top{
    height: 30%;
    width: 100%;
    background-color:#00bfa6 ;
    position: relative;
    z-index: 5;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.bottom{
    height: 70%;
    width: 100%;
    background-color: white;
    position: absolute;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}

.top img{
    height: 100px;
    width: 100px;
    background-color: #e6ebe0;
    border-radius: 10px;
    position: absolute;
    top:60px;
    left: 75px;
}
.bottom p{
    position: relative;
    top: 60px;
    text-align: center;
    text-transform: capitalize;
    font-weight: bold;
    font-size: 20px;
    text-emphasis: spacing;
}
.bottom .desi{
    font-size:12px;
    color: grey;
    font-weight: normal;
}
.bottom .no{
    font-size: 15px;
    font-weight: normal;
}
.barcode img
{
    height: 65px;
    width: 65px;
    text-align: center;
    margin: 5px;
}
.barcode{
    text-align: center;
    position: relative;
    top: 70px;
}

.back
{
    height: 375px;
    width: 250px;
    border-radius: 10px;
    background-color: #00bfa6;

}
.qr img{
    height: 150px;
    width: 120%;
    margin: 20px;
    background-color: white;
}
.Details {
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 25px;
}


.details-info{
    color: white;
    text-align: left;
    padding: 5px;
    line-height: 20px;
    font-size: 16px;
    text-align: center;
    margin-top: 20px;
    line-height: 22px;
}
.mainh{
    font-size: larger;
}

.logo {
    height: 40px;
    width: 150px;
    padding: 40px;
}

.logo img{
    height: 100%;
    width: 100%;
    color: white ;

}
.padding{
    padding-right: 20px;
}

@media screen and (max-width:400px)
{
    .container{
        height: 130vh;
    }
    .container .front{
        margin-top: 50px;
    }
}
@media screen and (max-width:600px)
{
    .container{
        height: 130vh;
    }
    .container .front{
        margin-top: 50px;
    }

}
    </style>
    <title>ID Card</title>
<!--     
    So lets start -->
</head>
<body>
        <div class="container">
            <div class="padding">
                <div class="font">
                    <div class="top"><?php
                    echo "<img src='".$row['fileloc']."'>";
?>
                    </div>
                    <div class="bottom">
                        <p><?php echo $row['p_name']; ?></p>
                       
                        <div class="barcode">
                           <?php echo "<img src='https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=".$row['healthcardnumber']."'>";?>
                        </div>
                        <br>
                        <p class="mainh"><?php echo $row['healthcardnumber']; ?></p><br>
                        <p class="no"><b>D.O.B: </b><?php echo $row['dob']; ?></p>
                       
                                </div>
                </div>
            </div>
            <div class="back">
                <h1 class="Details">HC card </h1>
                <hr class="hr">
                <div class="details-info">
                       <p><b>Mobile No: </b></p>
                    <p><?php echo $row['phoneno']; ?></p>
                    <p><b>Address:</b></p>
                    <p><?php echo $row['address']; ?></p>
                    
                    <p><b>Blood Group: </b></p>
                    <p><?php echo $row['bloodgroup']; ?></p>
                    </div>
                    
                    <div class="logo">
                        <img src="css/barcode.PNG">
                    </div>
                   
                    
                    <hr>
                </div>
                
            </div>
        </div>

        
<?php
    }
}

?>
</body>
</html>