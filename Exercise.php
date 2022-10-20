<html>
<head><title> Exercise 	</title></head>
<body align=center><h3>Check Your Grade<h3>

<?php
//input grade is 65

$grade = 65;
echo "Your Equivalent Grade is: ";

if($grade >= 70)
{
	$score = "Passed";
}
elseif ($grade >= 65 && $grade <= 69)
{
	$score = "Remedial";
}
else
{
	$score = "Failed";
}
echo $score;
?>
</body>
</html>