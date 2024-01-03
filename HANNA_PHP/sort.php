<?php

$students=array('1'=>'Raifa','2'=>'Faizal','3'=>'Hanna','4'=>'Diya');


echo "Array before sorting:";
print_r($students);
echo"<br><br>";
asort($students);
echo "Array after sorting in ascending order :";
print_r($students);
echo"<br><br>";
arsort($students);
echo "Array after sorting in descending order :";
print_r($students);


?>