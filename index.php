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
echo "Connected successfully <br>";  


$sql = "INSERT INTO polina_kristjan_visitors_ip (visitor_ip)
VALUES ('$aadress')";


if ($conn->query($sql) === TRUE) {
	
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


/*
$sql = "SELECT * FROM polina_kristjan_visitors_ip WHERE visitor_ip= $aadress";

$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

echo	$result;
*/
$stat = "SELECT visitor_ip, count(*) FROM polina_kristjan_visitors_ip group by visitor_ip";
$result1 = $conn->query($stat);

if($result1) {
	while($row = mysqli_fetch_assoc($result1)) {
		//print_r($row);
		echo "IP: " . $row["visitor_ip"] . " - Visits: " . $row["count(*)"] . "<br>";
	}
} else {
	echo "No visits";
	
}


$conn->close();

  
 //INSERT INTO `polina_kristjan_visitors_ip`(`visitor_ip`) VALUES ()
 
?>
  

<h3>Fotod</h3>
<div id="gallery">
	<?php 
		$pildid = array(
			array("src"=> "pildid/bear.png", "alt"=>"Karu"),	
			array("src"=> "pildid/cat.png", "alt"=>"Kass"),		
			array("src"=> "pildid/cow.png", "alt"=>"Lehm"),
			array("src"=> "pildid/dog.png", "alt"=>"Koer"),		
			array("src"=> "pildid/monkey.png", "alt"=>"Ahv"),				
				
		);
		foreach($pildid as $id=>$pilt):?>
		<img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>"/>
	<?php endforeach; ?>
</div>


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
