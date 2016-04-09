<!DOCTYPE html>
<html>

<head>
  <title>HTML lehekülg</title>
	<link href="site.css" rel="stylesheet">
	
	<script src="script.js"></script>

</head>

<body onload="startTime()">

<div id="main">

  <h1>Welcome to Polina Site</h1>
  <h2>Web Site Main Ingredients:</h2>

  <p>Pages (HTML)</p>
  <?php  include ("counter.php");
 ?>
  <p>Style Sheets (CSS)</p>
  <p> <?php

$aadress = $_SERVER['REMOTE_ADDR'];
 echo " $aadress " ;


$servername = "localhost";
$username = "test";
$password = "t3st3r123";

// Create connection
$conn = new mysqli($servername, $username, $password, "test");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";  

$sql = "INSERT INTO polina_kristjan_visitors_ip (visitor_ip)
VALUES ('$aadress')";


if ($conn->query($sql) === TRUE) {
	
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$sql = "SELECT * FROM polina_kristjan_visitors_ip WHERE visitor_ip= $address";

$result = mysqli_query($sql, $conn);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

echo	$result;


$conn->close();

  
 //INSERT INTO `polina_kristjan_visitors_ip`(`visitor_ip`) VALUES ()
 
 echo "Hello World";
 
  ?>;
  </p>
  
  <p>Computer Code (JavaScript)</p>
  <p>Live Data (Files and Databases)</p>
  <p> <?php
 echo "Tere";
?></p>
 </div>


 
 <div id="txt">
 </div>
 
 
 <!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6308503&style=0001&nbdigits=5&type=page&initCount=0" title="free hits" Alt="free hits"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Track My Website" 
                                        target="_blank"
</body>
</html>
