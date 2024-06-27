<!DOCTYPE html>
<html>
<head>
<title> PHP </title>
</head>
<body>
<form action = "afisarePare.php" method="get">
N:<input type="number" name ="tf1">
<br><br>
<input type="submit">
<br>
<?php
$N=$_GET["tf1"];
$a=array();
for($i=0; $i<$N;$i++)
$a[$i]=2*$i;
$s="";
for($i=0; $i<$N; $i++)
$s=$s.$a[$i]." ";
echo "<h2>Vectorul a:</h2>";
echo $s;
?>
</body>
</html>