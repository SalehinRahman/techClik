<!DOCTYPE html>

<table>
  <tr>
    <td>
 <a href="http://localhost/project_411/"><button name="simple_button" type="button" style="color: #9E4244;">Home</button>
 </tr>
 </td>
 </table>

<style>

body
{
    margin: 0;
    padding: 0;
    background-color:#D5B895;
    font-family: 'Arial';
}

form {
  width: 382px;
  overflow: hidden;
  margin: auto;
  margin: 20 0 0 450px;
  text-align: center;
  padding: 80px;
  background: rgba(0,0,0,0.8);
  color: #fff;
  box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
  border-radius: 15px ;
}

h2{
    text-align: center;
    color: #black;
    padding: 20px;
}

input, textarea {
  padding: 12px;
  margin: 6px 6px 6px 0;
}

input[type=submit] {
  background-color: green;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=reset] {
  background-color: red;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: darkgreen;
  color: lightblue;
}

input[type=reset]:hover {
  background-color: white;
  color: blue;
}

</style>


<body>
    <h2>Write a Review!</h2><br>
    <div class="login">

<form action="" method="POST">

    <label for="email">Your E-mail</label> <br>
    <input type="text" name="email"><br>
    <br>

    <label for="comments">Your Comments</label> <br>
    <input type = "text " name="comments"></input><br><br>

    <input type="submit" name ="submit" value="Submit">
    <input type="reset" value="Clear">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techclik";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//$conn = new mysqli('localhost', 'root',' ', 'project_411');
if ($conn == FALSE)
{
die("Could not connect to mysql" . mysqli_error($conn));
}

if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $cmt = $_POST["comments"];
  $sql = "insert into review values ('$email','$cmt');";
  if ($conn->query($sql)){
    //echo 'saved';

  }
  else {
    echo $conn->error();
    }
}
