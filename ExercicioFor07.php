<?php
$a=0;
$b=1;
$n=10;
//echo "pos 0 = $a ";
//echo "pos 1 = $b ";
echo "$a ";
echo "$b ";
for($i=2;$i<=$n;$i++){
    $c=$a+$b;
    $a=$b;
    $b=$c;
    //echo "pos $i = $c ";
    echo "$c ";
}
 ?>
