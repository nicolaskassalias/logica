<?php
//camel case
$nota = 7;

//operadores aritméticos
//<, >, >=, ==, !=

//operadores booleanos
//==, ===
//>, >=, <, <=

$a = true && false;
$b = true and false; //($b = true) and false;
$c = (true and false);
echo "\n\tVeja os valores\n";
var_dump($a);
var_dump($b);
var_dump($c);
echo "\n\tVeja os valores\n";
var_dump(10=="10 maças");//volta true
var_dump(10==="10 maças");//volta tipo diferente
echo "\n\tVeja os valores\n";
if ($nota >= 5){
  echo "\n\tVocê foi aprovado\n";
}elseif ($nota >=3) {
  echo "Você está em recuperação";
}else {
  echo "Você foi reprovado";
}
echo "\n";
echo "\n\tVeja os valores\n";
var_dump(2 <=> 5);//volta int(-1)
var_dump(2 <=> 2);//volta int(0)
var_dump(5 <=> 2);//volta int(1)

for($i=1;$i<=5;$i++){
  //echo '$i + 1';
  echo "$i + 1" .PHP_EOL;
}
for($i=1;$i<=5;$i++){
  echo '$i + 1';
}
//exercícios https://mrezende.github.io/curso-verao-ime-usp-php-2018/
