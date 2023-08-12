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
   
    <title>Reviews!!</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<style>

body
{
    margin: 0;
    padding: 0;
    background-color:#D5B895;
    font-family: 'Arial';
}

  h2{
      text-align: center;
      color: #black;
      padding: 20px;
  }

    h4 {
        color: rgb(131, 37, 103);
        text-align: center;
    }
    button {
        color: rgb(131, 37, 103);
        text-align: center;
    }

.table {
  margin-left:30%;
  width: 40%;
}
.table th{
 background-color: #F4C2C2;
}
.table td{
 background-color: #F4C2C2;
 padding: 15px;
}

</style>

<body>
    <h2>Reviews!!</h2><br>
    </form>
</div>

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

$sql = "SELECT * FROM review";
$result = $conn->query($sql);

echo "<table class='table' style ='border: 3px solid white;' >";
            echo "<tr>";
            echo "<th style ='border: 2px solid;'>Email</th>
                      <th style ='border: 2px solid;'>Review</th>";
            echo "</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      //  echo "<div> <br> ". $row["email"]. "  ". $row["review"];
      echo "<tr style ='border: 1px solid;'>";
                         echo "<td style ='border: 1px solid;'>" .$row['email']. "</td>";
                         echo "<td style ='border: 1px solid;'>" . $row['review']."</td>";
                         echo "</tr>";
    }
}
else {
    echo "0 results";
}
echo "</table>";
?>
<?php

session_start();
if(isset($_POST['wr']))
{
if(isset($_SESSION['user'])){
header('location:writeareview.php');
  }
  else{
    header('location:sign_in.php');
  }
}

//  echo $_SESSION['email'];
$conn->close();
?>
</br>

<center>

<body>
<form method = "post">
  <p> Want to write a review? <button name = 'wr'>  Write Review</button></p>
</form>
</center>
</body>
</html>
