<?php
// Файл пусть называется Task1 без финишь :) Ты только комитам названия давай.
// Сейчас работай в ветке develop, как что-то сделаешь, пушь в ветку девелоп и делай мердж реквест на мастер, в гите выбирай меня проверяющим.
//111
    echo "Задача 1".PHP_EOL; // Отступы
$x = 6;
$y = 15;
$z = 4;
echo $x += $y - $x++ * $z;
echo $z = - $x - $y * 5;
echo $y /= $x + 5 % $z;
echo $z = $x++ + $y * 5;
echo $x = $y - $x++ * $z;
echo "new".PHP_EOL;
echo "Задача 2".PHP_EOL;
$x = 6;
$y = 15;
$z = 4;
$sum = $x + $y + $z;
//$diff = $x - $y;
//$mult = $x * $y;
//$dil = $x / $y;
//$ostatok = $x % %y;
echo "Сумма из $x и $y и $z = $sum<br />";
echo "Средняе арефмитическое будет =";
echo $sum / 3;
echo "<br />";
    echo "Задача 3 <br />";
$V=1; // Почитай стандарты PSR,  писать нужно так $V = 1;
$S=1;
$r=2;
$h=3;

define("PI",3.14);
echo "Результатом V = ";
echo $V = PI*$r*2*$h; // Выноси вычисления, в echo мы печатаем резльтат + используй конкатенцаию строк.
// $V = PI * $r * 2 * $h;
// echo "Результатом V = " . $V;
echo"<br />";
//echo $S = "Результатом формулы  2*PI*$r*$h + 2*PI*$r*2 = 2*PI*$r ($r+ $h) будет <br />";
//echo $S = 2*PI*$r*$h+2*PI*$r*2 = 2*PI*$r*($r+ $h);
echo "Результатом S = ";
echo  2*PI*$r*$h+2*PI*$r*2 ; // Тоже самое смотри выше.
echo "<br />";
echo "Результатом S = ";
echo  2*PI*$r*($r+$h); // Тоже самое смотри выше.
echo "<br />";
echo "Задача 4";
echo "<br />";
$A = 10; // Хорошо сделана, математическим подходом.
$B = 50;
$sum = 0;
$sum = ($A + $B) / 2 * ($B - $A + 1);
echo  "($A + $B) / 2 * ($B - $A + 1)<br />"; // Вынеси вычисления из echo
echo $sum;
echo"<br />";
echo"Вторая часть задачи<br />";
$A = 10;
$B = 50;

for ($A = 10; $A < 50; $A++)
{
    if ($A % 2 == 0 ){
        echo($A);
    }
}
echo "<br />";


echo "Задача 7"; // Все хорошо
echo "<br />";
$array = array (1,2,3,4,5,6,7,8,9,10,20);
echo max($array) ."<br/>";
echo min($array) ."<br/>";
echo array_sum($array) ."<br/>";
echo array_sum($array) / count($array)."<br/>";
foreach ($array as $value) {
    if ($value % 2 != 0) {
        echo $value . '<br />';
    }
}
echo "Задача 8"; // Тут точно переделать.
echo "<hr />";
$array = array (array(3,4,-3,-4,-1), array(-2,-3,6,8,9), array(4,-9,7,-6,9), array(-5,5,-4,3,-2), array(-6,6,4,-5,8));
// Смысл этого цикла ??? Ты просто 5 раз обращаешься к одним и тем же элементам, а не массив перебираешь.
// Я не думаю что тут тебе хватит 1 цикла, и выбор foreach не самый лучший.

foreach ($array as &$value) {
    $array[0][0] = 1; // Никаких обращиний, типа  $array[0][0], обращайся через переменные
    $array[1][1] = 0; // Это хардкод
    $array[2][2] = 1;
    $array[3][3] = 1;
    $array[4][4] = 1;
}
//echo '<pre>';
//print_r($array);
//echo '</pre>';

echo "<hr />";
for ($i = 0; $i < count($array); $i++) {
    for ($u = 0; $u <count($array[$i]); $u++){
        echo $array[$i][$u]." ";
    }

    echo "<br/>";
}





