<?php
include "dataconnect.php";
session_start();
$user_c = $_SESSION["username"];
    if(isset($_POST['bookfinal']))
    {
      $user_d= $_POST['d_user'];
      $name_d= $_POST['d_name'];
      $c_name=$_POST['c_name'];
        $c_username=$user_c;
        $mobile=$_POST['mobile'];
        $add=$_POST['address'];
        $type=$_POST['type'];
        $di=$_POST['dieses'];
         $sql2="INSERT INTO `book`(`d_name`, `c_name`, `d_username`, `c_username`, `mobile`, `address`, `type`, `di`,`status`) VALUES ('$name_d','$c_name','$user_d','$c_username','$mobile','$add','$type','$di','pending')";
         $r1=mysqli_query($conn,$sql2);
         if($r1){
         header("location:doctor.php");
         }
         else{
            die("erorr");
         }
    }
?>