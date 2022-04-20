<!DOCTYPE html>
<?php
if(isset($_POST["submit"]))
{  
    if(!empty($_POST['email']) && !empty($_POST['pwd'])) 
    {  
        $email=$_POST['email'];  
        $pwd=$_POST['pwd'];  
        include("connection.php");
        $query=mysqli_query($con,"SELECT * FROM login WHERE uname='".$email."' AND pwd='".$pwd."'");
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbuname=$row['umame'];  
        $dbpwd=$row['pwd'];  
        $lid=$row['lid'];
        }  
        echo $lid;
      
        if($user == $dbuname && $pwd == $dbpwd)  
        {  
        session_start();  
        $_SESSION['user']=$lid;
           
        header("Location: login.php");  
        }  
        } else {  
        
        echo '<script>alert("Invalid username or password!")</script>';  
        }  
      
    } else {  
        echo '<script>alert("All fields are required!")</script>';  
    }  
}

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="cont"> 
        <h1 id="heading">USED CARS</h1>
        <div id="search"><h2>Members Login</h2></div>
        <div id="log">
            <form action="" method="post">
                Email ID:&nbsp;&nbsp;&nbsp;
                <input type="email" id="email" name="email" required>&nbsp;&nbsp;&nbsp;
                Password:&nbsp;&nbsp;&nbsp;
                <input type="password" id="pwd" name="pwd" required >&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Log In" name="submit" >&nbsp;&nbsp;&nbsp;
                <input type="button" value="Register Now" onclick="location.href = 'register.php'" >    
            </form>
        </div>
        <div id="search"><h2>Search?</h2></div>
        <div id="search">
           <div id="searchl">
            Model:<br><br>
            Year:<br><br><br><br>
            City:<br><br>

           </div><div id="searchr">
               
            <select required>
                <option value="">Select car:</option>
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
             <input type="text"><br>
             <input type="submit" value="Go" ><br>
             <input type="text"><br>
            <input type="submit" value="Search"><br>
        

        </div>
        </div>
    </div>
</body>
</html>