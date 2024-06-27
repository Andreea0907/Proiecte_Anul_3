<!DOCTYPE html>
<html>
<head>
<title> PHP </title>
</head>
<?php
	$nr=175;
	$nrInitial=$nr;
	$max=0;
	for(;;){
		$cifra=$nr%10;
		if($cifra>$max)
			$max=$cifra;
			$nr=floor($nr/10);
		if($nr==0)
			break;
}
echo "cifra maxima a lui $nrInitial este: $max";
?>
</html>