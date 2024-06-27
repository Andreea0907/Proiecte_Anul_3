<body>
<form action="esteNumarPrim.php" method ="get">
numar:<input type = "number" name ="tf1">
<br>
<input type = "submit">
<br>
<?php
$nr=$_GET["tf1"];
if($nr==1) echo "nu este numar prim";
else{
$este=true;
for($i=2; $i<=floor(sqrt($nr)); $i++)
	if($nr % $i==0){
	$este=false;
	break;}
if($este==true) echo"$nr este numar prim";
else echo "$nr nu este numar prim";
}
?>
</body>