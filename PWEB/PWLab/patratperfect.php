<html>
<body>
<form action = "estePatratPerfect.php" method= "get">
numar:<input type = "number" name="tf1">
<br>
<input type ="submit">
<?php 
$nr=$_GET["tf1"];
if($nr<0) echo "<br> nu este patrat perfect";
else{
$radical = floor(sqrt($nr));
if($radical*$radical==$nr)
echo "<br> nu este patrat perfect";
}
?>
</body>
</html>