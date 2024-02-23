<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            border: 0;
            padding: 0;
            font-family: sans-serif;
            color: black;
        }
        body{
            background-color: #2fa3d6;
            overflow: hidden;
        }

        .main {
            width: 200px;
            overflow: hidden;
         
        }

        .side {
            width: 190px;
           
            display: flex;
            align-items: center;
            flex-direction: column;
            /* background-color: #2fa3d6; */

        }

        .logo {
            width: auto;
            height: 70px;
            
            display: flex;
      
          
        }
        .logo h3{
            border-bottom: 3px red solid;
        }
.logo h3:hover{
    border-bottom: 3px black solid;
}

        .nav div {
            width: 150px;
            margin-top: 10px;
            border-bottom: 1px black solid;

            margin-top: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav div:hover {
            background-color: black;
        }

        .a {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
        }

        .profile {

            margin-top: 60px;
            height: 100px;
            width: 100%;
            display: flex;

        }
        .profile div{
            margin-left: 5px;
        }
        #logout{
            width: 100px;
            height: 40px;
            background-color:#955d4b ;
        }
        .home{
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="side">
            <div class="logo">
                <img src="icon/veterinarian_2143061.png" height="40px">
                <h3>Doctor.com</h3>
       
            </div>
           
      
            <div class="nav">
            <div class="home">
            <a href="home.php" target="_parent"><img src="css/home-button_5974636.png" height="50px"></a>
         </div>
                <div><a class="a" href="doctor_dashboard.php" target="rightside">Dashborad</a></div>
                <div><a class="a" href="doctor_profile_edit.php" target="rightside">Edit Profile</a></div>
                <div><a class="a" href="request.php" target="rightside">Request</a></div>
                <div><a class="a" href="doc_visited.php" target="rightside">Visited</a></div>



            </div>

        </div>
    </div>
    <footer>
        <div class="profile">
            <div class="p_detail">

                <img id="p_photo" style="border: 1px black solid;
         border-radius: 50%; z-index:10;" src="<?php

                                                //  $_SESSION["profile_name"]=" ";
                                                session_start();
                                                if ($_SESSION["profile_name"]) {
                                                    echo $_SESSION['profile_name'];
                                                }        ?>" height="50px" width="50px" />



                                            </div>
                <div class="p_menu" id="p_menu">
                    <p><?php


                        if (isset($_SESSION["username"])) {
                            echo $_SESSION["username"];
                        }

                        ?></p>
                        </div>
                      



            </div>
            <div><button id="logout"><a href="logout.php" target="_parent">Logout</a></button></div>

        </div>
    </footer>

</body>

</html>