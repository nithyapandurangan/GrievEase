<?php 
session_start();

    include("connection.php");
    include("functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Signup</title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: rgb(252, 249, 250);  
}

button {   
       background-color: #3e7dd0;   
       width: 100%;  
        color: rgb(247, 245, 241);   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }
         
 
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid rgb(0, 64, 128);   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  
   
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <p class="aligncenter">
        <img src="snu.png" alt="centered image" />
    </p>
    <style>
        .aligncenter {
            text-align: center;
        }
    </style>
    <center> <h1> Student Signup </h1> </center>   
    <form method="post">  
        <div class="container">   
            <label>Username : </label>   
            <input id="text" type="text" name="user_name"><br><br>
            <label>Password : </label>   
            <input id="text" type="password" name="password"><br><br>
            <input id="button" type="submit" value="Signup"><br><br>

            <a href="login.php">Click to Login</a><br><br>

            

        
        </div>   
    </form>     
</body>     
</html>  