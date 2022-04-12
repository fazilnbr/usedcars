<!DOCTYPE html>


<?php
if (!isset($_SESSION)) { session_start(); }
$user=$_SESSION['user'];

if(isset($_POST["send"]))
{
    include("connection.php");
    $user= $_SESSION['user'];
    $cid=   $_SESSION['cid'];


    $msg='';
    $msg=$_POST["msg"];
    $sql="INSERT INTO `msg`(`mid`, `fromid`, `toid`, `msg`) VALUES ('','".$user."','".$cid."','".$msg."')";
    $query=mysqli_query($con,$sql);
    header("Location:viewcar.php");
}



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
        
        <div id="search" style="display: block;"><h2>SEND MESSAGE</h2><br>
        <form action='' method='post'>
        MESSAGE:<br>
        <textarea name="msg" id="msg" required></textarea><br>
        <input type="submit" value="SEND" name="send" >
        </form>
    </div>
        </div>
    </div>
</body>
</html>


<script>



</script>