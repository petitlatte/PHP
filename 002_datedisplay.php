<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SDL #2 - Dates</title>
</head>
<body>

<?php

//Checks for current time, displays greetings based on hour

$hour = date('g');

	if ( $hour >= 5 && $hour <= 11.59 ) {
	   $greetings = "Good Morning";
	} else if ( $hour >= 12 && $hour <= 17 ) {
	   $greetings =  "Good Afternoon";
	} else if ( $hour >= 17.01 && $hour <= 23.59 ) {
	   $greetings = "Good Evening";
	} else {
	   $greetings = "Good Night";
	}

	echo $greetings . "<br>";
	echo "Today is " . date("l d/m/y ");
	echo " & the current time is " . date("h:i") . "<br>";


//Check to see if this year is a leap year or not 

$leapYear = date('L');

  if ($leapYear == 0){
            echo "This year is NOT a leap year.";
        } else {
             echo "This year IS a leap year.";
        }

?>	

</body>
</html>