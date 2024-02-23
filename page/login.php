<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <form action="login.php" method="post">


        <div class="home">
            <a href="home.php"><img src="css/home-button_5974636.png" height="50px"></a>
        </div>
        <div class="main">
            <div class="sub">
                <div class="cont">
                    <div class="heading">
                        <h1>Sign In</h1>
                    </div>
                    <div>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div>

                        <input type="radio" name="role" value="Doctor"> Doctor  
                     <input type="radio" name="role" value="Medical">    Medical
                  <input type="radio" name="role" value="Customer">      Customer 
                    </div>

                    <div>
                        <input type="submit" name="sign_in" value="Sign In" id="sign_in">
                    </div>
                    <div class="forgot">
                        <a href="#">fotgot password ?</a>
                    </div>
                    <div class="forgot">
                        <a href="signup.php">Create Account ?</a>
                    </div>
                    <div class="s_w">
                        - or sign in with-
                    </div>
                    <div class="g_f_sign_in">
                        <div>
                            <div class="icon-in">
                                <a href="#"> <img height="40px" src="photos/google_300221.png">
                                    google</a>

                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="icon-in">
                                    <a href="a"><img height="40px" src="photos/facebook_5968764.png">
                                        Facebook</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </form>
</body>

</html>

<?php
if (isset($_POST['sign_in'])) {
    include 'dataconnect.php';
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];


    $que1 = "SELECT * FROM `user_doctor` ";
    $que2 = "SELECT * FROM `user_customer` ";
    $que3 = "SELECT * FROM `user_medical`";

session_start();

$er=false;

$_SESSION["username"]=" ";
$_SESSION["profile_name"] = " ";

$_SESSION["d_user"] = false;

$_SESSION["c_user"] = false;
$_SESSION["m_user"] = " ";


    if ($role == 'Doctor') {
        $result1 = mysqli_query($conn, $que1);
        while ($row1 = mysqli_fetch_array($result1)) {
            if ($username == $row1['username'] && $pass == $row1['password']) {
                // echo "<script>alert('login complete')</script>";
                $er=true;
                $_SESSION["username"]= $row1["username"];
                $_SESSION["profile_name"]=$row1["profile_name"];
                $_SESSION["d_user"] =true;
                header("location:home.php");
            }
        }
        if($er==false)
        {
            echo "<button id='redirect'><a href='signup.php'>Go Sign Up</a></button>";
        }
     
    }
    if ($role == 'Customer') {
        $result2 = mysqli_query($conn, $que2);
        while ($row2 = mysqli_fetch_array($result2)) {
            if ($username == $row2['username'] && $pass == $row2['password']) {
             //   echo "<script>alert('login complete')</script>";
                $er=true;
                $_SESSION["username"]= $row2["username"];
                $_SESSION["profile_name"]=$row2["profile_name"];
                $_SESSION["c_user"] =true;
                header("location:home.php");
            }
        }
        if($er==false)
        {
            echo "<button id='redirect'><a href='signup.php'>Go Sign Up</a></button>";
        }
    }
    if ($role == 'Medical') {
        $result3 = mysqli_query($conn, $que3);
        while ($row3 = mysqli_fetch_array($result3)) {
            if ($username == $row3['username'] && $pass == $row3['password']) {
               
                $er=true;
                $_SESSION["username"]= $row3["username"];
                $_SESSION["profile_name"]="profile_image/medicine_647237.png";
                $_SESSION["m_user"] =$row3["username"];
                header("location:home.php");
            }
        }
        if($er==false)
        {
            echo "<button id='redirect'><a href='signup.php'>Go Sign Up</a></button>";
        }
    }
}

?>