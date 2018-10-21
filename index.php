<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="cloud.png">
<title>Weather Scraper</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="index.css">
<link href='http://fonts.googleapis.com/css?family=Fontdiner+Swanky' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Jura:600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 center">
<h1 id="header" class="center white">Weather Scaper</h1>
<p id="leadText" class="lead center white">Enter your city below to get a 3 Day forecast for the
weather.</p>
<form>
<div class="input-group">
<span class="glyphicon glyphicon-map-marker input-group-addon" aria-hidden="true"></span>
<input type="text" class="form-control" name="city" id="city" placeholder="Eg.London, Paris, San Francisco..."/>
</div>
<button id="findMyWeather" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Find My Weather</button>
</form>
<div id="success" class="alert alert-success">Success!</div>
<div id="fail" class="alert alert-danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> Could not find weather data for that
city. Please try again.</div>
<div id="noCity" class="alert alert-danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> Please enter a city!</div>
</div>
</div>
<footer class="footer">
      <div class="container">
        <p class="text-muted"><span id="develop">Developed by Saransh Seth</span></p>
      </div>
    </footer>
    
      
    


<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>
$("#findMyWeather").click(function(event) {

 event.preventDefault();

 $(".alert").hide();

 if ($("#city").val()!="") {

 $.get("scraper.php?city="+$("#city").val(),
function( data ) {


console.log(data);

 if (data=="") {


 $("#fail").fadeIn();

 } else {


 $("#success").html(data).fadeIn();

 }


 });

 } else {

 $("#noCity").fadeIn();

 }



 });
</script>
</body>
</html>
<!--Background image : https://unsplash.com/
Data of weather report coming from : http://www.weather-forecast.com/
icon of cloud used from : http://www.flaticon.com/authors/freepik 
Credit to the icon author : Icons made by <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>-->
