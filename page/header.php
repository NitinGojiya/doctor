<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/nav.css">

</head>

<body>
    <?php error_reporting(0);
    session_start(); ?>
    <header>
        <div class="nav">

            <div class="logo">
                <img src="icon/veterinarian_2143061.png" height="40px">
                <h2>Doctor.com</h2>
            </div>

            <div class="nav-menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="<?php 
                   
                       $d_user=$_SESSION["d_user"];
                       $c_user=$_SESSION["c_user"];
                       if($d_user==true)
                       {
                       
                        echo "doctor_panel.php";
                       } 
                       if($d_user==false && $c_user==false){
                        echo "login.php";
                       }
                       
                       if($c_user==true)
                       {
                        echo "Doctor.php";
                       }
                      
                   

                    ?>">Doctor</a></li>
                    <li><a href="#">Medical</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="#">Contact </a></li>
                </ul>
            </div>
            <div class="login">
                <button name="login" id="login"><a href="login.php" style="color: white;text-decoration:none;">Login</a></button>

            </div>
            <div class="p_detail">

                <img id="p_photo" onclick="myfunc()" style="border: 1px black solid;
                         border-radius: 50%; z-index:10;" src="<?php

                                                                //  $_SESSION["profile_name"]=" ";

                                                                if ($_SESSION["profile_name"]) {
                                                                    echo $_SESSION['profile_name'];
                                                                }


                                                                ?>" height="50px" width="50px" />
                <script>
                 function myfunc()
                 {
                    var x=document.getElementById("p_menu");
                    if(x.style.display === "none")
                    {
                        x.style.display="block";

                    }
                    else{
                        x.style.display = "none";
                    }
                 }
                </script>
                <div class="p_menu" id="p_menu">
                    <p><?php
                        // session_start();

                        if (isset($_SESSION["username"])) {
                            echo $_SESSION["username"];
                        } else {
                            echo "Guest";
                         }
                     
                        ?></p>
                    <div class="p_sub">
                        <div><a href="<?php 
                   
                   $d_user=$_SESSION["d_user"];
                   $c_user=$_SESSION["c_user"];
                   if($d_user==true)
                   {
                   
                    echo "doctor_panel.php";
                   } 
                   if($d_user==false && $c_user==false){
                    echo "login.php";
                   }
                   
                   if($c_user==true)
                   {
                    echo "Doctor.php";
                   }
                  
               

                ?>">Profile</a> </div>
                        <div><a href="logout.php">Logout</a></div>



                    </div>
                </div>



            </div>
        </div>

    </header>

</body>

</html>