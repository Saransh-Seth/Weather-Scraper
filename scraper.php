<?php
	$city=$_GET['city'];
	$city=str_replace(" ","",$city);
	$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	preg_match('/<h2>10 Day Melbourne Weather <\/h2>(7&ndash;10 days)<\/span><p class="b-forecast__table-description-content"><span class="phrase">(.*?)</s',$contents,$matches);
	echo $matches[1];
?>
