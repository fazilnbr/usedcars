
<!DOCTYPE html>


<?php
if (!isset($_SESSION)) { session_start(); }

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







        <div class="frame" style="margin-top: 50px;color:#0f343a;">







        <?php
        ob_start();
        $b=0;
        echo "<table style='color:#ffffff'>";

        include("connection.php");
        
        $sql="SELECT cid,img,city, mfg, model FROM carlist WHERE uid='".$user."'";
        $query=mysqli_query($con,$sql);
        $numrows=mysqli_num_rows($query);  
                if($numrows!=0)  
                {   
                while($row=mysqli_fetch_assoc($query))  
                {  

                    $cid=$row['cid'];
                    $img=$row['img'];
                    $city=$row['city'];
                    $mfg=$row['mfg'];
                    $model=$row['model'];
                    // echo $img."<br>";
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
                    <button type='submit' name='b3' value='".$cid."'>EDIT</button>
                    <button type='submit' name='b2' value='".$cid."'>DELETE</button></form>
                    </td></div>";

                    
                    
                    if(isset($_POST["b3"]))
                        {
                        $id=$_POST["b3"];
                        echo $id;
                        $_SESSION['user']=$user;
                        $_SESSION['cid']=$id;
                        header("Location: editcar.php");
                        }
                        if(isset($_POST["b2"]))
                        {
                            
                        $id=$_POST["b2"];
                        $sql="DELETE FROM `carlist` WHERE `carlist`.`cid` = ".$id.";";
                        $query=mysqli_query($con,$sql);
                        session_start();  
                        $user=$_SESSION['user'];
                        header("Location:viewmycar.php");
                        }

                    if($b==3)
                        {
                            echo "</tr>";  
                            $b=0;                  
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