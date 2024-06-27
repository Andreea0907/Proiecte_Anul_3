<!DOCTYPE html>
<html>
<head>
<title> PHP </title>
</head>
<body>
<form action="divizori.php" method="get">
nr:<input type="number" name="tf1">
<br>
<input type="submit">
<br>
<?php
$x=$_GET["tf1"];
$a=array();
$ia=0;
for($i=1;$i<=$x;$i++)
if($x % $i==0){
$a[$ia]=$i;
$ia++;
}
for($i=0;$i<count($a); $i++)
echo "$a[$i]<br>";
?>
</body>
</html>