<body>
<form action="calcule.php" method="get">
n1:<input type ="number" name ="tf1"><br>
n2:<input type ="number" name ="tf2"><br>
n3:<input type ="number" name ="tf3"><br>
<input type="submit"> <br>
<?php
function treiRezultate($nr1,$nr2,$nr3,&$minim,&$maxim,&$medie){
$minim=$nr1;
if($nr2<$minim)$minim=$nr2;
if($nr3<$minim)$minim=$nr3;
$maxim=$nr1;
if($nr2>$maxim)$maxim=$nr2;
if($nr3>$maxim)$maxim=$nr3;
$medie=($nr1+$nr2+$nr3)/3;
}
$a=$_GET["tf1"];
$b=$_GET["tf2"];
$c=$_GET["tf3"];
$minim;
$maxim;
$medie;
treiRezultate($a,$b,$c,$minim,$maxim,$medie);
echo "minim=$minim, maxim=$maxim, medie=$medie";
?>
</body>