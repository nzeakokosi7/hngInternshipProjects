<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>First HTML</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
	</head>
	<body class="bg">  
        <div>
            <p class="tm" id="clock"> </p>
          <div>
            <div class="ln">  
            <a href="#" class="btn btn-info btn-lg">
             <span class="glyphicon glyphicon-menu-hamburger"></span>
            </a>
            </div>
            <div class="sptx">SPACE TIME CONTINIUM</div>    
          </div>            
		</div>	
	</body>
</html>


<?php
date_default_timezone_set('UTC');
?>
<script>
var d = new Date(<?php echo time() * 1000 ?>);
function digitalClock() {
  d.setTime(d.getTime() + 1000);
  var hrs = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  mins = (mins < 10 ? "0" : "") + mins;
  secs = (secs < 10 ? "0" : "") + secs;
  var apm = (hrs < 12) ? "am" : "pm";
  hrs = (hrs > 12) ? hrs - 12 : hrs;
  hrs = (hrs == 0) ? 12 : hrs;
  var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
  document.getElementById("clock").firstChild.nodeValue = ctime;
}
window.onload = function() {
  digitalClock();
  setInterval('digitalClock()', 1000);
}
</script>