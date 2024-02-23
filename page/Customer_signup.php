<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <form action="Customer_signup.php" method="post" enctype="multipart/form-data">
<div class="home">
        <a href="signup.php"><img src="css/back-page.png" height="50px"></a>
    </div>

    <div class="main">
        <div class="sub">
            <div class="cont">
                <div class="heading">
                    <h1>Customer Sign Up</h1>
                </div>
                <div>
                    <input type="text" name="fname" id="password" placeholder="Name">
                </div>
                <div>
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div>
                    <input type="password" name="cpassword" id="password" placeholder="Confirm Password">
                </div>
                <div>
                    Profile photo
                    <br><input type="file" name="upload">
                </div>
                <div>
                   City:<select name="city">
                        <option value="Jamnagar">Jamnagar</option>
                        <option value="Anand">Anand</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Surat">Surat</option>
                        <option value="Mahesana">Mahesana</option>
                   </select>
                </div>
                <div>
                    <input type="submit" name="sign_up" value="Sign Up" id="sign_in">
                </div>
                
               
                
            </div>
        </div>
    </div>
    </form>
</body>

</html>
<?php
include 'dataconnect.php';

if(isset($_POST['sign_up'])){
   

    $name=$_POST['fname'];
    $username=$_POST['username'];
  
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $city=$_POST['city'];
    error_reporting(0);
   
    $photosname=$username.$_FILES["upload"]["name"];
    $type= $_FILES["upload"]["type"];
    $tempname=$_FILES["upload"]["tmp_name"];
    
    $folder="profile_image/".$photosname;
  
    move_uploaded_file($tempname,$folder);
  
    if($pass==$cpass)
    {
        $que="INSERT INTO `user_customer`(`name`, `username`, `password`, `city`, `profile_name`) VALUES ('$name','$username','$pass','$city','$folder')";
      
        try{
        $result=mysqli_query($conn,$que);
      }
        catch(mysqli_sql_exception $e){
            echo '<script>alert("check confirm password not match")</script>';
        }
        if($result)
        {
          header("location:login.php");
         
        }
        else{
          echo "<script>alert('user already in our data base')</script>";
          
        }
    }
   else{
   
   
   }
}

?>