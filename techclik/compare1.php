<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="techclik";

$conn = new mysqli($servername, $username, $password,$database);
 if($conn->connect_error)
 {
   die("connection failed".$conn->connect_error);
 }
 else {

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
     //1st device
     $device_1 = 0;
     $uid = $_POST['id1'];


   $sql = 'SELECT * FROM `data1` WHERE uid="'.$uid.'"';
 $result = $conn->query($sql);
 //2nd device
  $device_2 = 0;
  $uid1 = $_POST['id'];
 $sql1 = 'SELECT * FROM `data1` WHERE uid="'.$uid1.'"';
$result1 = $conn->query($sql1);

//1st device condition
 if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     $name=   $row["name"] ;
      $processor=   $row["processor"] ;
      $ram=$row["ram"];
      $battery = $row["battery"];
      //echo "\n name-";
      //echo $name;
      //echo "";
      //echo "processor-";
        //echo $processor;
        //echo "\n";
        //echo "ram-";
          //echo $ram;
          //echo "\n";
          //echo "battery-";
          //echo $battery;


   }
 } else {
   echo "0 results";
 }
 //2nd device condition
 if ($result1->num_rows > 0) {
   // output data of each row
   while($row = $result1->fetch_assoc()) {
     $name1=   $row["name"] ;
      $processor1=   $row["processor"] ;
      $ram1=$row["ram"];
      $battery1=$row["battery"];
      //echo "\n name-";
      //echo $name1;
      //echo "";
      //echo "processor-";

        //echo $processor1;
        //echo "\n";
        //echo "ram-";
          //echo $ram1;
          //echo "\n";
          //echo "battery-";
          //echo $battery1;

   }
 } else {
   echo "0 results";
 }
 if ($processor > $processor1) {
   $device_1=$device_1+1;
 }
 else {
   $device_2 = $device_2+1;
 }
 if ($ram > $ram1) {
   $device_1=$device_1+1;
 }
 else {
   $device_2 = $device_2+1;
 }
 if ($battery > $battery1) {
   $device_1=$device_1+1;
 }
 else {
   $device_2 = $device_2+1;
 }
 if ($device_1>$device_2) {
   //echo $name ;
   //echo " is better";
 }
 elseif ($device_1<$device_2) {
   //echo $name1;
   //echo " is better";
 }
 else{
   //echo "both same by comparing processor battert and ram";
 }
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Comparision</title>
 </head>
 <style>

 .scroll-left {
  height: 50px;
  overflow: hidden;
  position: relative;
  background: #FABFC9;
  color: #9E4244;
  border: 1px solid #D5B895;
 }
 .scroll-left p {
  position: absolute;
  width: 100%;
  height: 100%;
  margin: 0;
  line-height: 50px;
  text-align: center;
  /* Starting position */
  transform:translateX(100%);
  /* Apply animation to this element */
  animation: scroll-left 25s linear infinite;
 }
 /* Move it (define the animation) */
 @keyframes scroll-left {
  0%   {
  transform: translateX(100%);
  }
  100% {
  transform: translateX(-100%);
  }


  </style>

   <body>

     <div class="container">
     <div class="center">
       <div class="navbar">
         <div class="navbar-brand">
           <img src="Logo.png">
         </div>


         <div class="scroll-left">

         <p>
             Here you can choose any two device for instant Comparison. We will give you the<strong> best device </strong> among them.
               </p>

               </div>
               <table>
                 <tr>
                   <td>
                <a href="http://localhost/project_411/"><button name="simple_button" type="button" style="color: #9E4244;">Home</button>
                </tr>
                </td>
                </table>


<center>
<h2 style="color : #9E4244;">Write the numbers from the table of 2 devices</h2>
</center>

  <table cellspacing="20">
    <td>
          <br /><img src="compare1.jpg" />

     <td><td><td><td>

                       <form  action="" method="post">
<center>
   <span>Device 1:</span>
   <input method="POST" type="id" name="id1" id="id"><br />
</br>
   <span>Device 2:</span>
   <input method="POST" type="id" name="id" id="id"><br />
</br></br>

   <input method="POST" type="submit" name="submit" id="log" value="Compare"> </form>

   <?php

   //1st device condition
   if(isset($_POST['submit'])){
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $name=   $row["name"] ;
         $processor=   $row["processor"] ;
         $ram=$row["ram"];
         $battery = $row["battery"];
         echo "\n name-";
         echo $name;
         echo "";
         echo "processor-";
           echo $processor;
           echo "\n";
           echo "ram-";
             echo $ram;
             echo "\n";
             echo "battery-";
             echo $battery;


      }
    } else {
      echo "0 results";
    }

   if ($result1->num_rows > 0) {
     // output data of each row
     while($row = $result1->fetch_assoc()) {
       $name1=   $row["name"] ;
        $processor1=   $row["processor"] ;
        $ram1=$row["ram"];
        $battery1=$row["battery"];
        echo "\n name-";
        echo $name1;
        echo "";
        echo "processor-";

          echo $processor1;
          echo "\n";
          echo "ram-";
            echo $ram1;
            echo "\n";
            echo "battery-";
            echo $battery1;

     }
   } else {
     echo "0 results";
   }
   if ($processor > $processor1) {
     $device_1=$device_1+1;
   }
   else {
     $device_2 = $device_2+1;
   }
   if ($ram > $ram1) {
     $device_1=$device_1+1;
   }
   else {
     $device_2 = $device_2+1;
   }
   if ($battery > $battery1) {
     $device_1=$device_1+1;
   }
   else {
     $device_2 = $device_2+1;
   }
   if ($device_1>$device_2) {
     echo $name ;
     echo " is better";
   }
   elseif ($device_1<$device_2) {
     echo $name1;
     echo " is better";
   }
   else{
     echo "both same by comparing processor battert and ram";
   }

}
   ?>


</center>

</td>
<td><td><td><td>


<style>

    table {
      border-spacing: 5px;
    }
    th, tr,td {
        padding: 25px;
      }
    .table td{
     background-color: #F4C2C2;
    }

    .table th{
   background-color: #F4C2C2;
}

</style>

       <table border=5px >
             <tr>
            <th>Device name</th>
            <th>item no</th>
          </tr>
          <tr>
         <td>samsung s21</td>
         <td>1</td>
         </tr>
         <tr>
         <td>iphone 12</td>
         <td>3</td>
         </tr>
         <tr>
         <td>one plus 9r</td>
         <td>8</td>
         </tr>
         <tr>
         <td>iphone 13</td>
         <td>5</td>
         </tr>
         <tr>
         <td>samsung s22</td>
         <td>7</td>
         </tr>

           </table>
           </td>


    </body>
    <style>
    body {
      background-color: #D5B895;

    }
    </style>

    </html>
