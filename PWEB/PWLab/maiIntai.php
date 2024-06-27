<!DOCTYPE html>
<html>
<head>
<?php
	$s1="abcd";
	$s2="123";
	$s3="ana are mere";
	$celMaiLung=$s1;
	if(strlen($s2)>strlen($celMaiLung))
		$celMaiLung=$s2;
	if(strlen($s3)>strlen($celMaiLung))
		$celMaiLung=$s3;
	echo "cel mai lung cuvant dintre $s1, $s2 si $s3 este: $celMaiLung";
?>
</html>
