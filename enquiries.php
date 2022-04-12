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
    <style type="text/css">
        body
        {
            background-color: #0f343a;
            display: flex;
            justify-content: center;
            align-items: center;
            color:red;
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
            padding-right: 50px;
            font-size: 20px;
            color: #FFFFFF;
            display: block;
            justify-content :center;
            width: 1300px;
            min-height: 700px;
            height: auto;
            background-color: #000000;
            background-image:url('bgimg.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
            border-radius: 10px;
            padding-bottom: 30px;

        }
        #search
        {
            font-size: 20px;
            margin-top: 50px;
            padding-left: 150px;
            /* display: flex; */
        }
        table
        {
            width: 100%;
            color: #aaaaaa;
        }
        th
        {
            text-align: center;
        }
        a:link,:visited
        {
            color: #aaaaaa;
            text-decoration: none;
        }
        a:hover 
        {
            text-decoration: underline;
        }
        
        textarea
        {
            padding: 6px 14px;
            margin: 7px 0;
            display: inline-block;
            border: 1px solid #aaaaaa;
            border-radius: 4px;
            box-sizing: border-box;
        }
                
        input[type=submit] 
        {
            
            background-color: #aaaaaa;
            color: black;
            padding: 8px 16px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
    </style>
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
        
        <div id="search"><h2>MESSAGE</h2><br>
        <!-- <br> -->



        
        <?php
    
        $b=0;
        echo "<table style='border: 3px solid;background-color: #0f343a;font-size: 25px;'>";
        include("connection.php");
        
        // $c=0;
        $sql="SELECT user.name,user.phone,msg.msg FROM user INNER JOIN msg on msg.toid='".$user."' AND (user.lid=msg.fromid)";
        // echo $sql;
        $query=mysqli_query($con,$sql);
        $numrows=mysqli_num_rows($query);  
                if($numrows!=0)  
                {   
                $i=0;
                while($row=mysqli_fetch_assoc($query))  
                {  
                    $name=$row['name'];
                    $phone=$row['phone'];
                    $msg=$row['msg'];
                    // echo $name;
                    $i=$i+1;

                    
                    

                    if($b==0)
                    {
                        echo "<tr style='border: 3px solid;'>";                    
                        $b=$b+1;    
                    }



                    echo '<th style="border: 3px solid;"><a href="login.php">'.$i.'                   </a>   </th>
                    <th style="border: 3px solid;"><a href="viewmycar.php">'.$name.'    </a>   </th>
                    <th style="border: 3px solid;"><a href="sellcar.php">'.$phone.'        </a>   </th>
                    <th style="border: 3px solid;"><a href="enquiries.php">'.$msg.'           </a>   </th>
                    ';

                    
                    // echo $cid;
                    
                    // echo $id;

                    if(isset($_POST["b3"]))
                        {
                        // echo $id;
                        $id=$_POST["b3"];

                        // session_start();  
                        $_SESSION['user']=$user;
                        $_SESSION['cid']=$id;
                        header("Location: editcar.php");
                        }
                        if(isset($_POST["b2"]))
                        {
                        $sql="DELETE FROM `carlist` WHERE `carlist`.`cid` = ".$cid.";";
                        $query=mysqli_query($con,$sql);
                        session_start();  
                        $user=$_SESSION['user'];
                        header("Location:viewmycar.php");
                        }

                    if($b==1)
                        {
                            echo "</tr>";                    
                        }
                    }  
            }
echo "</table>";
?>





        <!-- <table style="border: 6px solid #0f343a;" >
            <tr>
                <th><a href="login.php">Home                    </a>   </th>
                <th><a href="viewmycar.php">My Used Car List    </a>   </th>
                <th><a href="sellcar.php">Sell Your Car         </a>   </th>
                <th><a href="enquiries.php">Enquiries           </a>   </th>
                
            </tr>
        </table> -->

    </div>
        </div>
    </div>
</body>
</html>


<script>



</script>