
<?php
    include 'dataconnect.php';
    if(isset($_POST['next'])){
      
      $role=$_POST['checkbox'];
      
      if($role== 'Doctor'){
        header('location:Doctor_signup.php');
      }
    
      if($role== 'Customer'){
        header('location:Customer_signup.php'); 
    }
   
    if($role== 'Medical'){
        header('location:Medical_signup.php');  
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
<div class="home">
        <a href="login.php"><img src="css/back-page.png" height="50px"></a>
    </div>
    <form action="signup.php" method="post">
    <div class="main">
        <div class="sub">
            <div class="cont">
                <div class="heading">
                    <h1>Sign Up</h1>
                </div>
                <div id="role">Select Your Role </div>
                <div>
                    <input type="radio" name="checkbox" id="checkbox" value="Doctor" >Doctor
                </div>
                <div>
                    <input type="radio" name="checkbox" id="checkbox" value="Customer">Customer
                </div>
                <div>
                    <input type="radio" name="checkbox" id="checkbox" value="Medical" >Medical
                </div>
               <div>
                
               </div>
                <div>
                    <input type="submit" name="next" value="Next" id="sign_in">
                </div>
     </div>
        </div>
    </div>
    </div>
    </div>
    </form>

</body>

</html>