
<?php
//uso: php prog. php 1 6 1
$a0 = $argv[0];
$a = $argv[1];
$b = $argv[2];
$c = $argv[3];
$delta = $b * $b - 4 * ($a*$c) ;
if ($delta >=0 ){
$delta = sqrt($delta);
echo "Delta = $delta\n";
}

?>
