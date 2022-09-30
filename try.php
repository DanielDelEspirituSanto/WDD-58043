<html>
<head><title>My first webpage</title></head>
<body bgcolor = "green"
<p>This will be displayed as is</p>
<?php echo "<p>this codes is interpereted in PHP turned to html</p>" ;
	/*multi line comment*/
	$j = 2;
	$k = 4;
	$num1 =6;
	$num2 = 2;
	$sum = $num1 + $num2;
	$username = "Daniel"; /*string*/
	echo $username; 
	echo "<br>";
	$count = 21;		/*integer*/
	echo $count;
	echo "<br>";
	echo "6+2= $sum"; /*operation*/
	echo "<br>";
	echo "My name is: ". $username; 
	echo "<br>";
	$pi = 3.1416;
	$radius = 5;
	
	$circle = $pi*$radius**2;
	
	echo "The value is "; echo $circle; echo "<br>";
	echo "<br>";
	echo "j Value: "; echo $j;
	echo "<br>";
	echo "k Value: "; echo $k;
	echo "<br>";
	
	
	if ($j===$k)
	{
			echo "Identical";
	}
	else{
			echo "Not Identical";
	}
	
	
?>

</body>
</html>