<html>
<head><title> Long Quiz 2 </title></head>
<body>
<h2>Problem 1</h2>
<?php

//net pay for 15 days with 600/day , 30% tax 
$Salary_rate = 600;
$Salary = $Salary_rate*15;
$Taxable_amount = $Salary*.3;
$Net_pay = $Salary-$Taxable_amount;

echo "This is your Net Pay every 15days with 30% tax";
echo "<br>";
echo "Salary rate per day: ". $Salary_rate;
echo "<br>";
echo "Salary = ". $Salary_rate*15;
echo "<br>";
echo "Taxable Amount = ".  $Salary*.3;
echo "<br>";
echo "Your Net Pay is = ". $Salary-$Taxable_amount;
?>

<h2>Problem 2</h2>
<?php

//adding positive integers from 1 to 50
$maxint =50;
$sum = 0;

echo "The sum of positive integers 1-50";
echo "The sum of positive integers from 1 to 50 is: ";

for($a = 1; $a<= $maxint; $a++)
{
	$sum += $a;
}
echo "<b>".$sum."</b>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
//proving
echo "To prove";
echo "<br>";
$maxint =50;
$sum = 0;
for($a = 1; $a<= $maxint; $a++)
{
	if ($a == $maxint)
	{
		echo $a." = ";
	}
	else
	{
		echo $a." + ";
	}
	
	$sum += $a;
}
echo $sum;


?>
</body>
</html>