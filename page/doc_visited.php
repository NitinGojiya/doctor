<?php
include "dataconnect.php";

session_start();
$d_user= $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor info.</title>
    <style>
        body{
            background-color: #C7C8CC;
        }
        .main{
            display: flex;
           justify-content: center;
          margin-top: 100px;
          height: 500px;
          overflow: scroll;
       
        }
        th{
            padding: 10px;
            background-color:#e8e8e8;
            text-align: center;
        }
        td{
            text-align: center; 
        }
        #btn_approved{
            background-color:#87bb41;
            border: none;
            border-radius: 5% ;
            height: 20px;
        }
    </style>
</head>

<body>

    <div class="main">
        <div class="sub">
       
      
       
            <div style="color: #f15a29;"><h1>You Visit Total customer </h1></div>
            <table >
              

          
                <tr>
                    
                    <th>Customer Name</th>
                    <th>Mobile Number</th>
                    <th>address </th>
                    <th>Animal type </th>
                    <th>Dieses</th>
                    
                  
                </tr>
                <?php
              
                $sql="select * from book where d_username='$d_user'";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    if($row["d_username"]==$d_user  ){
                        $d_name=$row['d_name'];
                        if($row['status']=='visited'){
                ?>
                <tr>
                    
                    <td><?php echo $row['c_name'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['address'] ?> </td>
                    <td><?php echo $row['type'] ?> </td>
                    <td><?php echo $row['di'] ?> </td>
                    
                  
                </tr>
                <?php
                }}}?>
              
            </table>
            <footer style="background-color: black; color:white;font-family:sans-serif">
            <h1>Welcome , Dr.<?php echo $d_name;?></h1>
            </footer>
            
         
        </div>
    </div>

</body>

</html>
