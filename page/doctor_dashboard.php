<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #C7C8CC;
        }

        .main {
            color: white;
           margin-top: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 400px;
            width: 700px;
        }

        .sub {
            display: flex;

            justify-content: space-evenly;
        }

        .sub div {
            width: 100%;

        }

        #d_photo {
            width: 100%;
            height: 100%;

        }

        .left {
            overflow: hidden;
     
        }

        .right {
            background-color: #3D3F3F;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="sub">
            <div class="left">
                <img id="d_photo" src="<?php

//  $_SESSION["profile_name"]=" ";
session_start();
if ($_SESSION["profile_name"]) {
    echo $_SESSION['profile_name'];
}        ?>" ">
            </div>
            <div class="right">
                <?php
                include "dataconnect.php";

              ;
                $d_user = $_SESSION['username'];
               // echo $d_user;
                $sql = "select * from user_doctor where username='$d_user'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {?>
              <div>
              <div style=" color: #CA6D6D;border-bottom:2px #CA6D6D solid; ">
                   <center><h3>YOUR PROFILE</h3></center> 
                </div>
                <div>
                <p>Username:<?php echo $row['username']; ?></p>
                <p>Name:Dr.<?php echo $row['d_name']; ?></p>
                <p>City:<?php echo $row['city']; ?></p>
               
                </div>
              </div>
              <div>
              <div style=" color: #CA6D6D;border-bottom:2px #CA6D6D solid; ">
                   <center><h3>EXPERINCE</h3></center> 
                </div>
                <div>
                <h3>Certificate :<?php echo $row['c_no']; ?></h3>
                <h3><?php echo $row['e_year']; ?><sup>+</sup></h3>
                
                </div>
              </div>
              <div>
              <div style=" color: #CA6D6D;border-bottom:2px #CA6D6D solid; ">
                   <center><h3>WORK STATUS</h3></center> 
                </div>
                <div>
                <p>Visit charge:<?php echo $row['charge']; ?></p>
                <p>Working status:<?php echo $row['work_r_no']; ?></p>
                <h3></h3>
                
                </div>
              </div>
              
                
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>