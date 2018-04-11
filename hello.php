<?php
	echo "Hello World!" . "<br>";
	
	echo "Today is " . date("l"). "<br>"; 
	
	date_default_timezone_set("Africa/Lagos");
	echo "The time is " . date("h:i:sa") . "<br><br>";
	
	
	echo "Hello World!" . "<br>";
   print "Today is <br>";
   print date("l d F Y, \a\\t g.i A", time());
?>
