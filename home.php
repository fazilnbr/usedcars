<!DOCTYPE html>
<?php


if(isset($_POST["submit"])){  
    
    
  
    if(!empty($_POST['email']) && !empty($_POST['pwd'])) {  
        $email=$_POST['email'];  
        $pwd=$_POST['pwd'];  

    
        $con=mysqli_connect("localhost","root","","usedcar") or die(mysql_error());  
        // mysql_select_db('user_registration') or die("cannot select DB");  
      
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
          
      
        /* Redirect browser */  
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
    <style type="text/css">
        body
        {
            background-color: #0f343a;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #heading
        {
            color: #aaaaaa;
            font-size:50px;
            text-align: center;
            
        }
        #cont
        {
            padding-left: 50px;
            font-size: 20px;
            color: #FFFFFF;
            display: block;
            justify-content :center;
            width: 1300px;
            height: 700px;
            background-color: aqua;
            background-image:url('bgimg.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
            border-radius: 10px;

        }
        #log
        {
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }
        #search
        {
            font-size: 20px;
            margin-top: 25px;
            padding-left: 150px;
            display: flex;
        }
        #searchl
        {
            width: 250px;
            margin: 8px 0;
        }
        
        #searchr
        {
            width: 200px;
            justify-content: center;
        }
        input[type=text],[type=password],[type=email]
        {
            padding: 6px 14px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #aaaaaa;
            border-radius: 4px;
            box-sizing: border-box;
        }
                
        input[type=submit],[type=button]
        {
            
            background-color: #aaaaaa;
            color: black;
            padding: 8px 16px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        select
        {
            padding: 4px 14px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #aaaaaa;
            border-radius: 4px;
            box-sizing: border-box;
        }
        span 
        {
            
            font-size: 10px;     
            margin:auto;       
        }
    </style>
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