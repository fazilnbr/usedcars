<!DOCTYPE html>

<?php
      

 




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



    include("connection.php");
    
    $query0="select * from login where (uname='$email');";

    $res=mysqli_query($con,$query0);

    if (mysqli_num_rows($res) > 0) {
    
    $row = mysqli_fetch_assoc($res);
    if($email==isset($row['uname']))
    {
        echo '<script>alert("email allready exist")</script>';  
    }
    }
    else{

    //do your insert code here or do something (run your code)
    





    
    $query=mysqli_query($con,"INSERT INTO login VALUES ('','".$email."','".$pwd."')");

    $query1=mysqli_query($con,"SELECT * FROM login WHERE uname='".$email."'");

    $numrows=mysqli_num_rows($query1);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query1))  
        {  
        $dbuname=$row['lid'];
        }  
    }



    
    $query3=mysqli_query($con,"INSERT INTO user VALUES ('','".$dbuname."','".$name."','".$email."','".$mobile."','".$phone."','".$state."','".$city."','".$add."','".$post."')");


        


    
    header("Location:home.php");  

    
  
      
}
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
    <style type="text/css">
    input[type=text],[type=email],[type=number],[type=password],[type=tel]
        {
            padding: 6px 14px;
            margin: 7px 0;
            display: inline-block;
            border: 1px solid #aaaaaa;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</head>
<body>
    <div id="cont"> 
        <h1 id="heading">USED CARS</h1>
        
        <div id="search"><h2>Register Now</h2></div>
        <div id="search">
           <div id="searchl">
            Name:<br><br>
            Email:<br><br>
            Conform Email:<br><br>
            Password:<br><br>
            Conform Password:<br><br>
            Mobile Number:<br><br>
            Phone Number:<br><br>
            State:<br><br>
            City:<br><br>
            Stret Address:<br><br>
            Postal Code<br><br>

           </div>
           <div id="searchr">
                <form action="" method="post">               
                    <input type="text" id="name" name="name" minlength="3" required><br>
                    <input type="email" id="email" name="email" required><br>
                    <input type="email" id="cemail" name="cemail" onkeyup='checkemail();' required><br>
                    <input type="password" id="pwd" name="pwd" onkeyup='checkpwdlen();' required><br>
                    <input type="password" id="cpwd" name="cpwd" onkeyup='checkpwd();' required><br>
                    <input type="tel" id="mobile" name="mobile" minlength="10" required><br>
                    <input type="tel" id="phone" name="phone" minlength="10" required><br>
                    <select name="country" id="country" name="country" required>
                        <option value="" id="state">Select State</option>
                       </select>
                       <br />
                       <select name="state" id="state"  name="state" required>
                        <option value="" id="dest">Select District</option>
                       </select>
                    
                    
                    <br>
                    <input type="text" id="address" name="address" required><br>
                    
                    <input type="tel" id="post" minlength="6" name="post" required><br>
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




        checkemail  = function() {
        if (document.getElementById('email').value ==
            document.getElementById('cemail').value) {
            document.getElementById('cemessage').style.color = '#5dd05d';
            document.getElementById('cemessage').innerHTML = 'Matched';
        } else {
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
    
       html_code += '<option value="">Select State</option>';
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
          html_code += '<option value="'+value.name+'">'+value.name+'</option>';
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