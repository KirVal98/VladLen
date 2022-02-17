<?php
    echo "Задача 1".PHP_EOL;

$x = 6;
$y = 15;
$z = 4;
echo "Переменная x = $x<br />";
echo "Переменная y = $y<br />";
echo "Переменная z = $z<br />";

echo "Результат следующей операции $x += $y - $x++ * $z будет =";
echo $x += $y - $x++ * $z;
echo "<br />";
echo "Результат следующей операции $z = - $x - $y * 5 будет =";
echo $z = - $x - $y * 5;
echo "<br />";
echo "Результат следующей операции $y /= $x + 5 % $z будт =";
echo $y /= $x + 5 % $z;
echo "<br />";
echo "Результат следующей операции $z = $x++ + $y * 5 будет =";
echo $z = $x++ + $y * 5;
echo "<br />";
echo "Результат следующей операции $x = $y - $x++ * $z будет =";
echo $x = $y - $x++ * $z;
echo "<br />";
    echo "Задача 2<br />";
$x = 6;
$y = 15;
$z = 4;
$sum = $x + $y + $z;
$diff = $x - $y;
$mult = $x * $y;
$dil = $x / $y;
//$ostatok = $x % %y;
echo "Сумма из $x и $y и $z = $sum<br />";
echo "Средняе арефмитическое будет =";
echo $sum / 3;
echo "<br />";
    echo "Задача 3 <br />";
$V=1;
$S=1;
$r=2;
$h=3;
define("PI",3.14);
echo "Результатом V = ";
echo $V = PI*$r*2*$h;
echo"<br />";
//echo $S = "Результатом формулы  2*PI*$r*$h + 2*PI*$r*2 = 2*PI*$r ($r+ $h) будет <br />";
//echo $S = 2*PI*$r*$h+2*PI*$r*2 = 2*PI*$r*($r+ $h);
echo "Результатом S = ";
echo  2*PI*$r*$h+2*PI*$r*2 ;
echo "<br />";
echo "Результатом S = ";
echo  2*PI*$r*($r+$h);
echo "<br />";
    echo "Задача 4";
echo "<br />";
$A = 10;
$B = 50;
$sum = 0;
$sum = ($A + $B) / 2 * ($B - $A + 1);
echo  "($A + $B) / 2 * ($B - $A + 1)<br />";
echo $sum;
echo"<br />";
echo"Вторая часть задачи<br />";
$A = 10;
$B = 50;

for ($A = 10; $A < 50; $A++)
{
    if ($A % 2 == 0 && $A != 0){
        echo($A);
    }
}
echo "<br />";
//Обязательно объясни мне что такое &&
echo "Задача 7";
echo "<br />";
$array = array (1,2,3,4,5,6,7,8,9,10,20);
echo $array[0];




