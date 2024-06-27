<!DOCTYPE html>
<html>
<head>
<title> PHP </title>
</head>
<body>
<form action="sumaV.php" method="get">
N:<input type="number" name="tf1">
<br>
<input type="submit">
<br>
<?php
function suma($v){
$s=0;
for($i=0; $i<count($v); $i++)
$S=$S+$v[$i];
return $S;
}
$N=$_GET["tf1"];
$v=array();
for($i=0; $i<$N; $i++)
$v[$i]=rand(1,100);
for($i=0; $i<count($v); $i++)
echo "<br>";
$S=suma($v);
echo "suma=$S";
?>
</body>
</html>