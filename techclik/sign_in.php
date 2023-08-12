<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="techclik";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function fetch_data($sql) {
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) {
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $data;

    }else{
      echo $GLOBALS['conn']->error;
      return  array( );
    }
  }
if(isset($_POST['submit'])){


$email=$_POST['email'];
$password=$_POST['password'];
$sql='SELECT * FROM `user` WHERE email="'.$email.'"';
$data=fetch_data($sql);
// print_r($data);
if(count($data)==1){
if($data[0]['password']==$password){
    session_unset();
    session_start();
    // user can login
    $_SESSION['user']=$data;
    $_SESSION['uid']=$data[0]['id'];
    $_SESSION['email']=$data[0]['email'];

    echo "<script>window.location.assign('http://localhost/project_411/index.php');</script>  ";
    // go to index page
}else {
  echo "<script>alert('password dont match')</script>  ";
}
}else {
  echo "<script>alert('this account isn't active ')</script>  ";
}
}


?>
<!DOCTYPE html>

<html>

<head>
  
  <table>
    <tr>
      <td>
   <a href="http://localhost/project_411/"><button name="simple_button" type="button" style="color: #9E4244;">Home</button>
   </tr>
   </td>
   </table>

    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-image: url(https://www.w3schools.com/css/img_mountains.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        max-width: 100%;
    }

    .login {
        width: 382px;
        overflow: hidden;
        margin: auto;
        margin: 20 0 0 450px;
        padding: 80px;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        box-shadow: 0 0 20px 2px rgba(187, 181, 181, 0.5);
        border-radius: 15px;

    }

    h2 {
        text-align: center;
        color: #ffffff;
        padding: 20px;
    }

    label {
        color: #59aa9b;
        font-size: 17px;
    }

    #Email {
        width: 380px;
        height: 30px;
        border: none;
        border-radius: 3px;
        padding-left: 8px;
    }

    #Pass {
        width: 380px;
        height: 30px;
        border: none;
        border-radius: 3px;
        padding-left: 8px;

    }

    #log {
        width: 200px;
        height: 30px;
        border: none;
        border-radius: 17px;
        padding-left: 7px;
        color: rgb(59, 19, 21);
    }

    span {
        color: white;
        font-size: 17px;
    }
</style>

<body>
    <h2>Sign In</h2><br>
    <div class="login">
        <form id="login" method="POST" action="">

            <label><b> Enter Email ID
                </b>
            </label>
            <input type="email" name="email" id="Email" placeholder="enter email id">
            <br><br>
            <label><b>Enter Password
                </b>
            </label>
            <input type="password" name="password" id="Pass" placeholder="enter password">
            <br><br>
            <input type="submit" name="submit" id="log" value="Sign In">
            <br><br>

            Forgot <a href="#">Password?</a>
            <style>
                h4 {
                    color: rgb(102, 25, 25);
                }
            </style>
            <p> Haven't an account? <a href="SignUp.html"><button name="simple_button" type="button"
                        align="right">Sign_Up</button></a></p>
            <style>
                button {
                    color: rgb(131, 37, 103);
                }
            </style>
            </center>
        </form>
    </div>
</body>

</html>
