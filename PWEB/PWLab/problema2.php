
<!DOCTYPE html>
<html>
<head>
<title> PHP </title>
</head>
<body>
<?php

$MAX = 100;
 
function maxMin($arr, $n)
{
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
 
for ($i = 0; $i < $n; $i++)
 {
  for ($j = 0; $j <= $n/2; $j++)
    {
     if ($arr[$i][$j] > $arr[$i][$n - $j - 1])
      {
       if ($min > $arr[$i][$n - $j - 1])
         $min = $arr[$i][$n - $j - 1];
          if ($max< $arr[$i][$j])
         $max = $arr[$i][$j];
            }
       else
        {
         if ($min > $arr[$i][$j])
         $min = $arr[$i][$j];
          if ($max < $arr[$i][$n - $j - 1])
         $max = $arr[$i][$n - $j - 1];
            }
        }
 }
    echo "Valoarea maxima = " , $max 
        ,"<br> Valoarea minima = " , $min;
}
 
    $arr = array(array(100, 96, 411, 1),
                array(25, 10, 14, 52),
                array(21, 56, 4, 51),
				array(50, 80, 74, 50)
				);
    maxMin($arr, 4);
     
?>
</body>
</html>