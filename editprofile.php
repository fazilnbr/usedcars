<!DOCTYPE html>
<?php 
if (!isset($_SESSION)) { session_start(); }
$user=$_SESSION['user'];
include("connection.php");
$user=$_SESSION['user'];
$sql="SELECT user.uid, user.lid, user.name, user.email, user.mobile, user.phone, user.state, user.city, user.address, user.post,login.pwd FROM user INNER JOIN login ON user.lid='".$user."' AND user.lid=login.lid ";
$query=mysqli_query($con,$sql);
$numrows=mysqli_num_rows($query);  
if($numrows!=0)  
{   
    while($row=mysqli_fetch_assoc($query))  
    {  
        $name   =$row["name"];
        $email  =$row["email"];
        $pwd    =$row["pwd"];
        $mobile =$row["mobile"];
        $phone  =$row["phone"];
        $state  =$row["state"];
        $city   =$row["city"];
        $add    =$row["address"];
        $post   =$row["post"];
    }
}
if(isset($_POST["submit"]))
{
    $name =$_POST["name"];
    $email =$_POST["email"];
    $pwd =$_POST["pwd"];
    $mobile  =$_POST["mobile"];
    $phone =$_POST["phone"];
    $state =$_POST["country"];
    $city =$_POST["state"];
    $add =$_POST["address"];
    $post =$_POST["post"];
    $sql1="UPDATE `login` SET `uname`='".$email."',`pwd`='".$pwd."' WHERE lid='".$user."'";// echo $sql1;
    $query1=mysqli_query($con,$sql1);
    $sql="UPDATE `user` SET `name`='".$name."',`email`='".$email."',`mobile`='".$mobile."',`phone`='".$phone."',`state`='".$state."',`city`='".$city."',`address`='".$add."',`post`='".$post."' WHERE lid='".$user."'";// echo $sql;
    $query=mysqli_query($con,$sql);

    header("Location:login.php");   

    
  
      
}

else 
{  
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
        
        <div id="search"><h2>Register Now</h2></div>
        <div id="search">
           <div id="searchl">
            Name:<br><br>
            Mobile Number:<br><br>
            Phone Number:<br><br>
            State:<br><br>
            City:<br><br>
            Stret Address:<br><br>
            Postal Code:<br><br>

            <h4>Your Login Information</h4>
            Email Id:         <input type="radio" id="remail" minlength="3" name="remail" onclick="remail()" required><br>
            Password:        <input type="radio" id="rpwd" minlength="3" name="rpwd" onclick="rpwd()" required><br>           

           </div>
           <div id="searchr">
                <form name="myForm" action="" onsubmit="return validateForm()" method="post">               
                    <input type="text" id="name" minlength="3" value="<?php echo $name; ?>" name="name" required><br>
                    <input type="tel" id="mobile" minlength="10" value="<?php echo $mobile; ?>" name="mobile" required><br>
                    <input type="tel" id="phone" minlength="10" value="<?php echo $phone; ?>" name="phone" required><br><br>
                    <select name="country" id="country" required>
                        <option value="<?php echo $state; ?>">Select State</option>
                       </select>
                       <br>
                       <select name="state" id="state" required>
                        <option value="<?php echo $city; ?>">Select District</option>
                       </select>
                    
                    
                    <br>
                    <input type="text" id="address" value="<?php echo $add; ?>" name="address" required><br><br>
                    
                    <input type="number" id="pin" minlength="6" value="<?php echo $post; ?>" name="post" required><br><br><br><br>

                    <input type="email" id="email" name="email" onkeyup='checkemail();' value="<?php echo $email; ?>" style="display:none" required><br>
                    
                    <input type="password" id="pwd" name="pwd" onkeyup='checkpwdlen();' value="<?php echo $pwd; ?>" style="display:none" required><br>
                    


                    <input type="submit" value="submit" name="submit" onclick="validate()" >
                </form>
           </div>
           <div id="searchrr">
            <br>
            <span id='Nmessage'></span>
            <br><br>
            <span id='emessage'></span>
            <br><br>
            <span id='cemessage'></span>
            <br><br>
            <span id='p1message'></span>
            <br><br>
            <span id='pmessage'></span>
            <br><br>
            <span id='mobmessage'></span>
            <br><br>
            <span id='phnmessage'></span>
            <br><br><br>
            <span id='stemessage'></span>
            <br><br>
            <span id='desmessage'></span>
            <br><br>
            <span id='addmessage'></span>
            <br><br>
            <span id='postmessage'></span>
            <br><br>
           </div>
        </div>
    </div>
</body>
</html>


<script>
    $(document).ready(function(){


        remail = function() 
        {
            if (document.getElementById('remail').checked) 
            {
                document.getElementById('email').style.display='block';
            } else 
            {
                document.getElementById('email').style.display='none';
            }
        }   

        rpwd = function() 
        {
            if (document.getElementById('rpwd').checked) 
            {
                document.getElementById('pwd').style.display='block';
            } else 
            {
                document.getElementById('pwd').style.display='none';
            }
        }   



        checkemail  = function() 
        {
            if (document.getElementById('email').value == document.getElementById('cemail').value) 
            {
                document.getElementById('cemessage').style.color = '#5dd05d';
                document.getElementById('cemessage').innerHTML = 'Matched';
            } 
            else 
            {
                document.getElementById('cemessage').style.color = '#f55252';
                document.getElementById('cemessage').innerHTML = 'Not Matching';
            }
        }



        checkpwdlen = function()
        {
            var pass1 = document.getElementById("pwd");  
            if(pass1.value.length<6)
            {  
                document.getElementById('p1message').style.color = '#f55252';
                document.getElementById('p1message').innerHTML = 'password must be 6 charecter';
            }
            else
            {
                document.getElementById('p1message').innerHTML = '';
            }

        }
        


        checkpwd  = function() {
        if (document.getElementById('pwd').value ==
            document.getElementById('cpwd').value) {
            document.getElementById('pmessage').style.color = '#5dd05d';
            document.getElementById('pmessage').innerHTML = 'Matched';
        } else {
            document.getElementById('pmessage').style.color = '#f55252';
            document.getElementById('pmessage').innerHTML = 'Not Matching';
        }
        }
        



        validate = function()
        {
            if(pass1.value.length<6)
            {

            }
            elseif(document.getElementById('email').value !=  document.getElementById('cemail').value)
            {
                
            }

            
        }

        function alphaOnly(event) {
        var key = event.keyCode;
        return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };

        function checklen()
        {
            var pass1 = document.getElementById("password");  
            if(pass1.value.length<6){  
                alert("Password must be at least 6 characters long. Try again!");  
                return false;  
        }  
        }



        
    
     load_json_data('country');
    
     function load_json_data(id, parent_id)
     {
      var html_code = '';
      $.getJSON('country_state_city.json', function(data){
    
       html_code += '<option value="">Select '+id+'</option>';
       $.each(data, function(key, value){
        if(id == 'country')
        {
         if(value.parent_id == '0')
         {
          html_code += '<option value="'+value.id+'">'+value.name+'</option>';
         }
        }
        else
        {
         if(value.parent_id == parent_id)
         {
          html_code += '<option value="'+value.id+'">'+value.name+'</option>';
         }
        }
       });
       $('#'+id).html(html_code);
      });
    
     }
    
     $(document).on('change', '#country', function(){
      var country_id = $(this).val();
      if(country_id != '')
      {
       load_json_data('state', country_id);
      }
      else
      {
       $('#state').html('<option value="">Select state</option>');
       $('#city').html('<option value="">Select city</option>');
      }
     });
    });
    </script>