<!DOCTYPE html>
<html>
<head>
<title> PHP </title>
</head>
<?php
	$nr=175;
	$nrInitial=$nr;
	$max=0;
	do{
		$cifra = $nr%10;
		if($cifra>$max)$max=$cifra;
		$nr=floor($nr/10);
	}while($nr!=0);


echo "cifra maxima a lui $nrInitial este: $max";
?>
</html>