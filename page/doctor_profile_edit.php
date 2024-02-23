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
            /* background-color: #FF7C76; */
        }
        body{
            background-color: #C7C8CC;
        }

        .main {

            margin-top: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 400px;
            width: 500px;
           
            color: #FF7C76;
        }
        .sub{
            height: 80%;
            width: 80%;
            background-color:#3D3F3F;  
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        #password {
            border: none;
            border-bottom: 1px black solid;
            background-color: transparent;
            width: 200px;
            font-size: 1.2rem;
            color: white;
        }

        .sub div {
            margin-top: 20px;
        }
    </style>
</head>

<body>
<?php
if(isset($_POST["save_profile"]))
{
include 'dataconnect.php';
session_start();
$user= $_SESSION['username'];
$city=$_POST["city"];
$e_year=$_POST["e_year"];
$charge=$_POST["charge"];
$status=$_POST["status"];
echo $city;
echo $e_year;
echo $charge;
echo $status;
$sql="UPDATE `user_doctor` SET `e_year` = '$e_year', `city` = '$city', `charge` = '$charge', `work_r_no` = '$status' WHERE `user_doctor`.`username` = '$user'";
$result=mysqli_query($conn,$sql);
if($result)
{
    header("location:doctor_dashboard.php");
}
}



?>
    <div class="main">
        <div class="sub">
            <form action="doctor_profile_edit.php" method="post">
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
                    <input type="Number" name="e_year" id="password" placeholder="Experience in Year">
                </div>
                <div>
                    <input type="Number" name="charge" id="password" placeholder="Charge Per Visit">
                </div>
                <div>
                    Working status:<input type="radio" name="status" value="Yes">Yes<input type="radio" value="No" name="status">No
                </div>
                <div>
                    <button name="save_profile">Save Change</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

