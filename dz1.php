<?php
/* Задание №1 */
$name='Игорь';
$age=20;
echo 'Меня зовут: ' . $name . '<br>';
echo 'Мне ' . $age . ' лет' . '<br>';
echo '“!|\\/’”\\' . '<br>';

/* Задание №2 */
$x = 80;
$y = 40;
$z = 23;
$b;
$a;
if ($b = $y + $z) {
    echo $a = $x - $b . '<br>';
}

/* Задание №4 */
$c= 18;
$e= 65;
if ($age >= $c && $age < $e) {
 echo 'Вам еще работать и работать' . '<br>';
} elseif ($age >= $e && $age <= 100) {
    echo 'Вам пора на пенсию' . '<br>';
} elseif ($age <= $c && $age > 0) {
    echo 'Вам еще рано работать' . '<br>';
} elseif ($age <= 0 || $age >= 100) {
    echo 'Неизвестный возраст' . '<br>';
}

/* Задание № 5 */
$day= 3;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
}
?>