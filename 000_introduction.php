<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Introduction</title>
</head>
<body>

<h1>PHP testing</h1>
	
<?php 

//finding area of a circle

$radius = 5;
// $pi = 3.14;
define ("PI", "3.14");
$area = PI * $radius * $radius; //πr2
$circumference = 2 * PI * $radius; 
$diameter = 2 * $radius;

echo "$area";
echo "$circumference";
echo "$diameter";

//use brackets but optional 

//finding area of a square

$a = 4;
$squarearea = $a * $a;

echo "area of square = $squarearea <br>";



$age1 = 20;
$age2 = 30;
$age3 = 40;

if ($age1 < $age2)&&($age1 < $age3){
	echo "Person 1 is <em>younger</em> than both Person 2 and 3";
} else {
	echo "Person 1 is <em>older</em> than both Person 2 and 3";
}

if ($age2 < $age1)

// if ($age1 < $age2){
// 	echo "$age1 is <em>younger</em> than $age2";
// } else {
// 	echo "$age2 is <em>older</em> than $age1";
// }





?>

</body>
</html>