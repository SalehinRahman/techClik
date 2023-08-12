<!DOCTYPE html>
<html>
<body>

<?php

$conn = new mysqli('localhost', 'root', '', 'feval')
    or

    die("Could not connect to mysql" . mysqli_error($conn));


$sql = "SELECT no, Question, Ans FROM evaluation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        echo "<div> <br> ". $row["no"]. ". ". $row["Question"]. " " . $row["Ans"] .
        '<form action="ans.php" method="post">' .
      
        '<input type="radio" id="Very_Poor" name="'. $row["no"] .'" value="Very Poor" required>
          <label for="Very_Poor">Very Poor</label>
          <input type="radio" id="Poor" name="'. $row["no"] .'" value="Poor" required>
          <label for="Poor">Poor</label>
          <input type="radio" id="Fair" name="'. $row["no"] .'" value="Fair" required>
          <label for="Fair">Fair</label>
          <input type="radio" id="Good" name="'. $row["no"] .'" value="Good" required>
          <label for="Good">Good</label>
          <input type="radio" id="Very_Good" name="'. $row["no"] .'" value="Very Good" required>
          <label for="Very_Good">Very Good</label>
         '."<br> </div>";
    }
} else {
    echo "0 results";
}
?>

<input type="submit" name= "ans">
</form> 
<?php
$conn->close();
?>

</body>
</html>