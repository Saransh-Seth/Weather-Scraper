<?php
	$city=$_GET['city'];
	$city=str_replace(" ","",$city);
	$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	preg_match('/Weather (4–7 days)<\/span><p class="b-forecast__table-description-content"><span class="phrase">(.*?)</s',$contents,$matches);
	print_r($matches);
?>
