<?php
	$city=$_GET['city'];
	$city=str_replace(" ","",$city);
	$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	preg_match('/Melbourne (.*?) Today/i',$contents,$matches);
	print_r($matches);
?>
