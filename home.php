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
            <select>
                <option value="0">Select car:</option>
                <option value="1">Audi</option>
                <option value="2">BMW</option>
                <option value="3">Citroen</option>
                <option value="4">Ford</option>
                <option value="5">Honda</option>
                <option value="6">Jaguar</option>
                <option value="7">Land Rover</option>
                <option value="8">Mercedes</option>
                <option value="9">Mini</option>
                <option value="10">Nissan</option>
                <option value="11">Toyota</option>
                <option value="12">Volvo</option>
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