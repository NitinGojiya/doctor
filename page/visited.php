<?php

include 'dataconnect.php';
$id=$_GET['id'];
$sql="UPDATE `book` SET `status` = 'visited' WHERE `book`.`id` ='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:request.php");
}

?>
