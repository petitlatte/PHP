<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SDL #3 - Fibonacci Series</title>
</head>
<body>

<?php 

	$n1 = 0;
	$n2 = 1;

	//display 0 and 1 before for loops start
	echo $n1. ", ". $n2. ", ";

	//for loop that generates 10 of Fibonacci numbers. 
		for ($i=1; $i <=10 ; $i++) { 

			$result = $n1 + $n2;
			$n1 = $n2;
			$n2 = $result;

			//echo the $result variable (seperated by comma)
			echo $result . ", ";
		}



function recursiveFunction($x){

	$num1= 0;
	$num2= 1;
	$total= 0;
	//displays 0
	echo "<br>".$num1. ", ";

	for ($j=0; $j <= $x ; $j++) {
		    if($j == 1){
		        $total = $j;
		    }else{
	
				$total = $num1 + $num2;
				$num1 = $num2;
				$num2 = $total;
		    }

		echo $total . ", ";
	}	

}

//evokes function , displays 10 values
recursiveFunction(10);

?>	

</body>
</html>