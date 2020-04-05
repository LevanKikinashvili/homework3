<?php  session_start();   
if(isset($_SESSION['use']))   
 {
header("Location:home.php"); 
 }
if(isset($_POST['login']))   
{
$user = $_POST['user'];
$pass = $_POST['pass'];
if($user == "joni" && $pass == "laxenta")    

$_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';           

        }

        else
        {
            echo "Incorrect username or password";        
        }
}
 ?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.css">
<title>Your Pageა</title>
</head>
    <style>
    body {
   color: #fff;
background-image: url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?cs=srgb&dl=gray-laptop-computer-showing-html-codes-in-shallow-focus-160107.jpg&fm=jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
    margin-top: 100px;
        text-align: center;
}
    </style>
    
    <style>
    table th, table td {
    background-color: #00000094;
}
    </style>

    <style>
    
    input, .form-control, .input-group-text, .custom-file-label {
    border-radius: 5px;
    background-color: #00000094;
    color: white;
    border-color: #00000094;
    margin-top: 10px;
    margin-right: 10px;
}
        
    </style>
    
    <style>
    
    input {

    width: 300px;
    border: none;
    border-radius: 50px;
    padding: 10px 20px;
    margin-bottom: 15px;
    margin-left: 15px;
    background-color: #0000006b;
    color: white;

}
    </style>
    
    <style>
    
::-webkit-input-placeholder {
text-align: center;
    color: #ffffff8a;
}
    
    </style>
    
    <style>
    
        input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block {
    width: 90%;
}
    
    </style>
    
    <body>
<form action="login.php" method="post">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table align="center">
<tr>
<td><input type="text" name="user" placeholder="Username"> </td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Password"></td>
</tr>
<tr>
<td> <input type="submit" name="login" value="Login" class="btn btn-success btn-lg btn-block"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>