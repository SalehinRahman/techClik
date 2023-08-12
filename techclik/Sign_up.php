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

<title>User Registration | PHP</title>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div>

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

function insert_data($sql){
    $res=$GLOBALS['conn']->query($sql);
    if($res==TRUE){
      return ['status'=>True,'id'=>$GLOBALS['conn']->insert_id];
    }else{
      return ['status'=>False,'details'=>$GLOBALS['conn']->error];
    }

  }

if(isset($_POST['submit'])){

$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if($password==$password2)
{
    $sql="insert into user (email,password) values ('$email','$password')";
    $result=insert_data($sql);

    if($result["status"])
    {
        header("Location: http://localhost/project_411/sign_in.php");
    }



}
else{
    echo "<script>alert('password don\'t match')</script>  ";
}

}
 ?>
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
        background: rgba(0, 0, 0, 0.8);
        color: #fff;
        box-shadow: 0 0 20px 2px rgba(0, 0, 0, 0.5);
        border-radius: 15px;

    }

    h2 {
        text-align: center;
        color: #277582;
        padding: 20px;
    }

    label {
        color: #08ffd1;
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
        color: blue;
    }

    span {
        color: white;
        font-size: 17px;
    }
</style>

<body>
    <h2>Sign Up</h2><br>
    <div class="login">
    <form id="login" method="POST" action="">

            <label><b> enter Email ID
                </b>
            </label>
            <input type="text" name="email" id="Email" placeholder="enter email id">
            <br><br>
            <label><b>Create Password
                </b>
            </label>
            <input type="password" name="password" id="password" placeholder="create password">
            <br><br>
            <label><b>Confirm your Password
                </b>
            </label>
            <input type="password" name="password2" id="password2" placeholder="re-enter password">
            <br><br>

            <input type="submit" name="submit" id="log" value="sign up">
            <br><br>
            <input type="checkbox" id="check">
            <span>Remember me</span>
            <br><br>

        </form>
    </div>
</body>

</html>
