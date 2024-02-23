<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor sign up</title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
    <form action="Doctor_signup.php" method="post" enctype="multipart/form-data">
    <div class="home">
        <a href="signup.php"><img src="css/back-page.png" height="50px"></a>
    </div>
<div class="main">

        <div class="sub">
            <div class="cont">
                <div class="heading">
                    <h1>Doctor Sign Up</h1>
                </div>
                <div>
                    <input type="text" name="fname" id="username" placeholder="Doctor Name">
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
                    <input type="text" name="cno" id="password" placeholder="Certificate Number">
                </div>
                <div>
                    <input type="Number" name="e_year" id="password" placeholder="Experience">
                </div>
                <div>
                    Profile photo
                    <br><input type="file" name="upload">
                </div>
                <div>
                   City:<select name="city">
                        <option>Jamnagar</option>
                        <option>Anand</option>
                        <option>Rajkot</option>
                        <option>Surat</option>
                        <option>Mahesana</option>
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
    $c_no=$_POST['cno'];
    $e_year=$_POST['e_year'];
    $city=$_POST['city'];

    error_reporting(0);
   
    $photosname=$username.$_FILES["upload"]["name"];
    $type= $_FILES["upload"]["type"];
    $tempname=$_FILES["upload"]["tmp_name"];
    
    $folder="profile_image/".$photosname;
  
    move_uploaded_file($tempname,$folder);
    
    if($pass==$cpass)
    {
        $que="INSERT INTO `user_doctor`(`d_name`, `username`, `password`, `e_year`, `c_no`, `city`,`profile_name`) VALUES ('$name','$username','$pass','$e_year','$c_no','$city','$folder')";
      
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