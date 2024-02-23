<?php

include "dataconnect.php";
include "header.php";
$user_d = $_GET['user'];
//echo $user_d;
$sql = "SELECT * FROM `user_doctor` WHERE username='$user_d'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $d_name = $row[0];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            display: flex;
            height: 600px;
            width: 600px;
            justify-content: center;
            align-items: center;
            margin-left: 250px;
        }


        .sub {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 514px;
            width: 465px;
            border-radius: 10px;
            overflow: hidden;
            background-color: rgba(89, 81, 87, 0.539);
            backdrop-filter: blur(10px);
            z-index: 1;

        }

        .sub div {
            margin-bottom: 20px;
        }

        #username {
            border: none;
            border-bottom: 1px black solid;
            background-color: transparent;
            width: 200px;
            font-size: 1.2rem;
            color: white;
        }

        #booknow {
            width: 200px;
            height: 40px;
            font-size: 1.2rem;
            background-color: rgba(16, 227, 235, 0.959);
            border: none;
            border-radius: 4px;
            cursor: pointer;

        }

        #booknow:hover {
            box-shadow: 5px 5px rgba(18, 18, 18, 0.265);
        }
    </style>
</head>

<body>
    <form action="final_book.php" method="post">


        <div class="main">
            <div class="sub">
                <div class="cont">
                    <div>
                        <h1>Book deatails</h1>
                    </div>
                    <div>
                        <input type="hidden" name="d_user" value="<?php echo $user_d; ?>" placeholder="d_name"><br>
                        <input type="hidden" name="d_name" value="<?php echo $d_name; ?>" placeholder="d_username"><br>
                        <input type="text" name="c_name" id="username" placeholder="Your Name full name">
                    </div>
                    <div>
                        <input type="text" name="mobile" id="username" placeholder="Mobile Number">
                    </div>
                    <div>
                        <textarea placeholder="Address" id="username" name="address"></textarea>
                    </div>
                    <div>
                        Type of Animal:<select name="type">
                            <option value="buffalo">Buffalo</option>
                            <option value="dog">Dog</option>
                            <option value="cow">Cow</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="dieses" id="username" placeholder="Dieses">
                    </div>
                    <div>
                        <input type="submit" id="booknow" name="bookfinal" value="Submit">
                    </div>


                </div>
            </div>
        </div>
    </form>
</body>

</html>