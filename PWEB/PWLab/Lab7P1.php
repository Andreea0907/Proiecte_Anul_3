<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>	
</head>
<body>
<?php
	$nume=array(
		array("Ion",12),
		array("Maria",20),
		array("George","Marius",15),
		array("Vasile",30));
	for ($i=0;$i<count($nume);$i++){
		for($j=0;$j<count($nume[$i]);$j++)
			echo $nume[$i][$j]." ";
			echo "<br>";
	}
	?>
</body>
</html>
