<!DOCTYPE html>  
<html>  
<body>  
<?php  
$a = array(     
            array(1, 2, 3),  
            array(8, 4, 6),  
            array(4, 5, 7)  
         );  
    
$b = array(    
            array(1, 2, 3),  
            array(8, 4, 6),  
            array(4, 5, 7)  
          );  
$flag = true;  
       
$row1 = count($a);  
$col1 = count($a[0]);  
    
$row2 = count($b);  
$col2 = count($b[0]);  
   
if($row1 != $row2 || $col1 != $col2){  
    print("Matricile nu sunt egale. <br>");  
}  
else {  
    for($i = 0; $i < $row1; $i++){  
        for($j = 0; $j < $col1; $j++){  
          if($a[$i][$j] != $b[$i][$j]){  
              $flag = false;
              break;  
          }  
        }  
    }  
      
    if($flag)  
        print("Matricile sunt egale. <br>");  
    else  
        print("Matricile nu sunt egale. <br>");  
}  
?>  
</body>  
</html>  