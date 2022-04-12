<!DOCTYPE html>
<?php
if (!isset($_SESSION)) { session_start(); }
$con=mysqli_connect("localhost","root","","usedcar") or die(mysql_error());
$user=$_SESSION['user'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</head>
<body>
    <div id="cont"> 
        <h1 id="heading">USED CARS</h1>
        
        <table >
            <tr>
                <th><a href="login.php">Home                    </a>   </th>
                <th><a href="viewmycar.php">My Used Car List    </a>   </th>
                <th><a href="sellcar.php">Sell Your Car         </a>   </th>
                <th><a href="enquiries.php">Enquiries           </a>   </th>
                <th><a href="editprofile.php">Edit Profile      </a>   </th>
                <th><a href="viewcar.php">View Full Listing     </a>   </th>
                <th><a href="home.php">Logout                   </a>   </th>
            </tr>
        </table>
        <div class="frame" style="margin-top: 50px;">
            <?php
            ob_start();
            $b=0;
            echo "<table>";
            include("connection.php");
            $sql="SELECT uid,img,city, mfg, model FROM carlist WHERE uid!='".$user."'";
            $query=mysqli_query($con,$sql);
            $numrows=mysqli_num_rows($query);  
            if($numrows!=0)  
            {   
                while($row=mysqli_fetch_assoc($query))  
                {  
                    $img=$row['img'];
                    $city=$row['city'];
                    -    $uid=$row['uid'];
                    $mfg=$row['mfg'];
                    $model=$row['model'];
                    $data = base64_encode($img);
                    if($b==0)
                    {
                        echo "<tr>";                    
                    }
                    $b=$b+1;
                    echo "<td style='padding-left: 90px;'>
                    <div style='font-size: 30px;'>
                    <img src='data:image/jpeg;base64,".$data."' alt='car img' style='width:150px; height:150px;'><br>
                    City:".$city."<br>
                    Year:".$mfg."<br>
                    Model:".$model."<br><form action='' method='post'>
                    <button type='submit' name='b3' value='".$uid."'>CONTACT SELLER</button></form>
                    </td></div>";                    
                    if(isset($_POST["b3"]))
                    {                            
                        $id=$_POST["b3"];
                        $_SESSION['user']=$user;
                        $_SESSION['cid']=$id;
                        // if (headers_sent()) 
                        // {
                        //     die("Redirect failed. Please click on this link: <a href=viewcarsendmsg.php>contact</a>");
                        // }
                        // else
                        // {
                        //     exit(header("Location:viewcarsendmsg.php"));
                        // }
                        header("Location:viewcarsendmsg.php");
                    } 
                    if($b==3)
                    {
                        echo "</tr>";                    
                    }
                }  
            }
            echo "</table>";
            ob_end_flush();
            ?>
        </div>
        </div>
    </div>
</body>
</html>
<script>
</script>