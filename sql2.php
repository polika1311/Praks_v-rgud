<?php

$user = "test";
$pass = "t3st3r123";
$db = "test";
$host = "localhost";
$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanud ühendatud - " . mysqli_error());
mysqli_query($link, "SET CHARACTER SET UTF8")die ($sql. "-".mysqli_error ($link));

$v2ljad="nimi,vanus,puur";

$sql="SELECT $v2ljad FROM ppopova_loomaaed";
$tulemus=mysqli_query($link,$sql) or die ($sql. "-".mysqli_error ($link));

while($rida=mysqli_fetch_assoc($result)){
	//käib seni kuni tingimus ei kehti, ja kui kehtib lõpetab ära
	//siin kasutan $rida muutujatecho
	echo "looma nimi on: {$rida ["nimi"]}, ta on{$rida ["vanus"]} aastat vana ja 
	asub puuris {$rida ["puuri_nr"]}. <br/>";
	
	
	}// käib seni kuni tingimus ei kehti, ja kui kehtib lõpetab ära

	mysqli_free_result($result);
	
	mysqli_close ($link);
	
	?>