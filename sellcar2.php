<!DOCTYPE html>


<?php
if (!isset($_SESSION)) { session_start(); }
$user=$_SESSION['user'];
include("connection.php");
// echo $user;


    $city   =$_SESSION["city"];
    $pin    =$_SESSION["pin"];
    $mfg    =$_SESSION["mfg"];
    $make   =$_SESSION["make"];
    $model  =$_SESSION["model"];
    $km     =$_SESSION["km"];
    $owner  =$_SESSION["owner"];
    $price  =$_SESSION["price"];
    $name   =$_SESSION["name"];
    $mobile =$_SESSION["mobile"];
    $email  =$_SESSION["email"];

    if(isset($_POST["submit"]))

    {        
        // $img =$_POST["image"];
        $fuel =$_POST["fuel"];
        $color =$_POST["color"];
        $reg  =$_POST["reg"];
        $inshu =$_POST["inshu"];
        $desc =$_POST["desc"];
        
        
        
			$file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
        


        $sql="INSERT INTO `carlist`(`cid`, `uid`, `city`, `pin`, `mfg`, `make`, `model`, `km`, `owners`, `price`, `name`, `mobile`, `email`, `img`, `fuel`, `color`, `regno`, `inshurance`, `descrp`) VALUES ('','".$user."','".$city."','".$pin."','".$mfg."','".$make."','".$model."','".$km."','".$owner."','".$price."','".$name."','".$mobile."','".$email."','".$file."','".$fuel."','".$color."','".$reg."','".$inshu."','".$desc."')";
        // echo $sql;
        $query=mysqli_query($con,$sql);
        // $numrows=mysqli_num_rows($query);
    
    
    
        
    
            
    
    
        
        header("Location:viewmycar.php");  
    
        
      
          
    }
    
    else {  
        // echo '<script>alert("input incorrect")</script>';  
    }  



// $sql="SELECT name FROM user WHERE email='".$email."'";
// $query=mysqli_query($con,"SELECT name FROM user WHERE email='".$email."'");
// $numrows=mysqli_num_rows($query);  
//         if($numrows!=0)  
//         {  
//         while($row=mysqli_fetch_assoc($query))  
//         {  
//         $name=$row['name'];  
        
//         }  
//     }



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
            <br><br><br><br>
            Upload Image    &nbsp;&nbsp;&nbsp;
            <!-- <input type="file" id="img" name="img" required> -->
    		<input type="file" name="image" accept="image/*" required id="image">
            <h5>LISTING DETIALS </h5>
            Fuel Type:          
            <!-- <input type="tel" id="fuel" minlength="4" name="fuel" > -->
            <select id="fuel" name="fuel" required>
                <option value="">Fuel Type</option>
                <option value="Petrol">Petrol</option>
                <option value="Diesel">Diesel</option>
                <option value="Gas">Gas</option>
                <option value="Electric">Electric</option>
              </select>
            <br>
            Color:              
            <!-- <input type="text" id="color" minlength="3" name="color" > -->
            <select id="color" name="color" required>
                <option value="">Color</option>
                <option value="Red">Red</option>
                <option value="Blue">Blue</option>
                <option value="Green">Green</option>
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Gray">Gray</option>
                <option value="Yellow">Yellow</option>
              </select>
            <br>
            Registration No:             <input type="tel" id="reg" minlength="4" name="reg"><br>
            Inshurance Vlid Till:         <input type="tel" id="inshu" minlength="1" name="inshu" ><br>
            Tell to the buyer why he should buy Your car : <textarea id="desc" name="desc" required></textarea><br>
            

            
            
            <input type="submit" value="Post Listing" name="submit" onclick="validate()" >

        </form>
        </div>
        
        </div>
    </div>
</body>
</html>


<script>



</script>