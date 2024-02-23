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
    <form action="Medical_signup.php"  method="post">
    <div class="home">
        <a href="signup.php"><img src="css/home-button_5974636.png" height="50px"></a>
    </div>
<div class="main">
        <div class="sub">
            <div class="cont">
                <div class="heading">
                    <h1>Medical Sign Up</h1>
                </div>
                <div>
                    <input type="text" name="m_name" id="password" placeholder="Medical Name">
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
                    <input type="textarea" name="add" id="password" placeholder="Address">
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
   
  error_reporting(0);
    $name=$_POST['m_name'];
    $username=$_POST['username'];
  
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
   
    $add=$_POST['add'];
    $city=$_POST['city'];
    
    if($pass==$cpass)
    {
        $que="INSERT INTO `user_medical`(`m_name`, `username`, `password`, `address`, `city`) VALUES ('$name','$username','$pass','$add','$city')";
      
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