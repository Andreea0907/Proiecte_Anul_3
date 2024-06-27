<!DOCTYPE html>
<html>
<head>
<title> PHP </title>
</head>
<body>
<?php
function numerePare($a){
	$contor=0;;
	for($i=0; $i<count($a);$i++)
		for($j=0;$j<count($a[$i]);$j++)
			if($a[$i][$j]%2==0)
				$contor++;
	return $contor;
}
?>
</body>
</html>
