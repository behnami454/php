<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

error_reporting(0);
$one = $_POST['name1'];
$two = $_POST['name2'];
$three = $_POST['name3'];
$four = $_POST['name4'];
$five = $_POST['name5'];
$six = $_POST['name6'];
$seven = $_POST['name7'];

  $servername = "localhost";
  $username = "arman";
  $password = "arman";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  

mysqli_select_db($conn ,'form');
  $sql = "INSERT INTO buy
                   (fullname , email , phonee , loc , shoes , armband , jersey ) VALUES
                   ('$one' , '$two' , '$three' , '$four' , '$five' , '$six', '$seven')";
  if (mysqli_query($conn, $sql)) {
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  };
  if(!isset($one) || trim($one) == '')
  {
    
     echo "<h3>You did not fill out the (FULLNAME) field</h3> ";
     
  }
  if(!isset($two) || trim($two) == '')
  {
    echo " <h3>You did not fill out the (EMAIL) field</h3> ";
  }
  if(!isset($three) || trim($three) == '')
  {
    echo " <h3>You did not fill out the (PHONE) field</h3> ";
  }
  if(!isset($four) || trim($four) == '')
  {
    echo " <h3>You did not fill out the (ADDRESS) field</h3> ";
  }
  if(!isset($five) || trim($five) == '')
  {
    echo " <h3>You did not fill out the (SHOES) field</h3> ";
  }
  if(!isset($six) || trim($six) == '')
  {
    echo " <h3>You did not fill out the (ARMBAND) field</h3> ";
  }
  if(!isset($seven) || trim($seven) == '')
  {
    echo " <h3>You did not fill out the (JERSEY) field</h3>";
  }
  
  $sql1 = "DELETE FROM buy WHERE fullname=' '";
  if (mysqli_query($conn, $sql1)) {
    
  } else {
    echo   mysqli_error($conn);
  }
  $sql2 = "DELETE FROM buy WHERE email=' '";
  if (mysqli_query($conn, $sql2)) {
    
  } else {
    echo   mysqli_error($conn);
  }
  $sql3 = "DELETE FROM buy WHERE phonee=' '";
  if (mysqli_query($conn, $sql3)) {
    
  } else {
    echo   mysqli_error($conn);
  }
  $sql4 = "DELETE FROM buy WHERE loc=' '";
  if (mysqli_query($conn, $sql4)) {
    
  } else {
    echo   mysqli_error($conn);
  }
  $sql5 = "DELETE FROM buy WHERE shoes=' '";
  if (mysqli_query($conn, $sql5)) {
    
  } else {
    echo   mysqli_error($conn);
  }
  $sql6 = "DELETE FROM buy WHERE armband=' '";
  if (mysqli_query($conn, $sql6)) {
    
  } else {
    echo   mysqli_error($conn);
  }
  $sql7 = "DELETE FROM buy WHERE jersey=' '";
  if (mysqli_query($conn, $sql7)) {
    
  } else {
    echo   mysqli_error($conn);
  }
      $a = $five;
      $b = $six;
      $c = $seven;
      $d = $a + $b + $c;
      echo  'totall products :', $d; 
      $e  = 500 * $five;
      $f  = 700* $six;
      $g = 800* $seven;
      $h = $e + $f + $g;
      echo '<br>' , ' totall price :' ,  $h , ' $';
      echo ' <br><h1>it will be send to your address</h1>';
  mysqli_close($conn);
 
  

  ?>
  
</body>
</html>