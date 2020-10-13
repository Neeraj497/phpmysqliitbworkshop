<?php

$m1=array(array(1,2),array(2,3));
$m2=array(array(3,4),array(5,6));

echo "Addition of matrix is<br>";

for ($i=0; $i <2 ; $i++) 
{ 
	for ($j=0; $j <2 ; $j++) 
	{ 
		echo $m1[$i][$j]+$m2[$i][$j]." ";
	}
	echo "<br>";
}
?>