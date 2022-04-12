<!DOCTYPE html>
<?php 
if (!isset($_SESSION)) { session_start(); }
    include("connection.php");
    $user=$_SESSION['user'];
    $cid=$_SESSION['cid'];
        $sql="SELECT * FROM carlist WHERE cid='".$cid."'";
        $query=mysqli_query($con,$sql);
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {   
            while($row=mysqli_fetch_assoc($query))  
            {  
                $city   =$row["city"];
                $pin    =$row["pin"];
                $mfg    =$row["mfg"];
                $make   =$row["make"];
                $model  =$row["model"];
                $km     =$row["km"];
                $owner  =$row["owners"];
                $price  =$row["price"];
                $name   =$row["name"];
                $mobile =$row["mobile"];
                $email  =$row["email"];
                $img    =$row["img"];
            }
        }
if(isset($_POST["submit"]))
{   
    $city   =$_POST["city"];
    $pin    =$_POST["pin"];
    $mfg    =$_POST["mfg"];
    $make   =$_POST["make"];
    $model  =$_POST["model"];
    $km     =$_POST["km"];
    $owner  =$_POST["owner"];
    $price  =$_POST["price"];
    $img    =$_POST["img"];
    $file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql="UPDATE `carlist` SET `city`='".$city."',`pin`='".$pin."',`mfg`='".$mfg."',`make`='".$make."',`model`='".$model."',`km`='".$km."',`owners`='".$owner."',`price`='".$price."',`img`='".$file."' WHERE cid='".$cid."'";
    $query=mysqli_query($con,$sql);
    header("Location:viewmycar.php");  
}
else 
{  
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
        <div id="fom">
        <form action="" method="post" enctype="multipart/form-data">
            <h4>Just fill your information and get started</h4>
            City*:               <input type="text" id="city" minlength="3" name="city" value="<?php echo $city; ?>" required><br>
            Pin code*:           <input type="tel" id="pin" minlength="6" name="pin" value="<?php echo $pin; ?>" required><br>
            <h5>CAR INFORMATION</h5>
            MFG Year*:          <input type="tel" id="mfg" minlength="4" name="mfg" value="<?php echo $mfg; ?>" required><br>
            Make*:              <input type="text" id="make" minlength="3" name="make" value="<?php echo $make; ?>" required><br>
            Model*:             <input type="tel" id="model" minlength="4" name="model" value="<?php echo $model; ?>" required><br>
            KMs Driven:         <input type="tel" id="km" minlength="1" name="km" value="<?php echo $km; ?>" ><br>
            NO.of Owners:       <input type="text" id="owner" minlength="" name="owner" value="<?php echo $owner; ?>"><br>
            Expected Price:     <input type="tel" id="price" minlength="" name="price" value="<?php echo $price; ?>"><br>            
            Upload Image    &nbsp;&nbsp;&nbsp;
    		<input type="file" name="image" accept="image/*" required id="image">             
            <input type="submit" value="Update" name="submit" onclick="validate()" >
        </form>
        </div>
        </div>
    </div>
</body>
</html>
<script>
</script>