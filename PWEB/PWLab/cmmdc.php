<!DOCTYPE html>
<html>
<head>
<title> PHP </title>
</head>
<body>
<?php
	$nr1=12;
	$nr2=18;
	$a=$nr1;
	$b=$nr2;
	while($a!=$b)
	{
	if($a>$b)
		$a=$a-$b;
	else
		$b=$b-$a;
	}
echo "cmmdc nr $nr1 si $nr2 este: $a";
?>
</body>
</html>