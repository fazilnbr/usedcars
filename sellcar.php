<!DOCTYPE html>
<?php
      

 
      if (!isset($_SESSION)) { session_start(); }
      include("connection.php");
        $email=$_SESSION['user'];
            // echo $email;



if(isset($_POST["submit"]))

{
    


    $city =$_POST["city"];
    $pin =$_POST["pin"];
    $mfg =$_POST["mfg"];
    $make  =$_POST["make"];
    $model =$_POST["model"];
    $km =$_POST["km"];
    $owner =$_POST["owner"];
    $price =$_POST["price"];
    $name =$_POST["name"];
    $mobile  =$_POST["mobile"];
    $email =$_POST["email"];




    $_SESSION["city"]=$city;
    $_SESSION["pin"]=$pin ;
    $_SESSION["mfg"]=$mfg ;
    $_SESSION["make"]=$make  ;
    $_SESSION["model"]=$model ;
    $_SESSION["km"]=$km ;
    $_SESSION["owner"]=$owner ;
    $_SESSION["price"]=$price ;
    $_SESSION["name"]=$name;
    $_SESSION["mobile"]=$mobile;
    $_SESSION["email"]=$email;   


        


    
    header("Location:sellcar2.php");  

    
  
      
}

else {  
    // echo '<script>alert("input incorrect")</script>';  
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
        <form action="" method="post">
            <h4>Just fill your information and get started</h4>
            City*:               <input type="text" id="city" minlength="3" name="city" required><br>
            Pin code*:           <input type="tel" id="pin" minlength="6" name="pin" required><br>
            
            <h5>CAR INFORMATION</h5>
            MFG Year*:          <input type="tel" id="mfg" minlength="4" name="mfg" required><br>
            Make*:              
            <select id="make" name="make" required>
                <option value="">Model</option>
                <option value="audi">Audi</option>
                <option value="bmw">BMW</option>
                <option value="citroen">Citroen</option>
                <option value="ford">Ford</option>
                <option value="honda">Honda</option>
                <option value="jaguar">Jaguar</option>
                <option value="land rover">Land Rover</option>
                <option value="Mercedes">Mercedes</option>
                <option value="mini">Mini</option>
                <option value="nissan">Nissan</option>
                <option value="toyota">Toyota</option>
                <option value="volvo">Volvo</option>
              </select>
            <br>
            Model*:             <input type="tel" id="model" minlength="4" name="model" required><br>
            KMs Driven:         <input type="tel" id="km" minlength="1" name="post" ><br>
            NO.of Owners:       <input type="text" id="owner" minlength="" name="owner"><br>
            Expected Price:     <input type="tel" id="price" minlength="" name="price" ><br>

            <h5>CONTACT INFORMATION</h5>
            Name:               <input type="text" id="name" minlength="3" name="name"><br>
            Mobile Number:      <input type="tel" id="mobile" minlength="10" name="mobile" ><br>
            Email:              <input type="email" id="email" minlength="6" name="email"><br>

            <input type="checkbox" id="post" name="post" required>I agree with the terms and conditions<br>
            
            
            <input type="submit" value="Post Listing" name="submit" onclick="validate()" >

        </form>
        </div>
        
        </div>
    </div>
</body>
</html>


<script>



</script>