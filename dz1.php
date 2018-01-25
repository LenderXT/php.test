<?php
/* Задание №1 */
$name = 'Игорь';
$age = 20;
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
$c = 18;
$e = 65;
if ($age >= $c && $age <= $e) {
 echo 'Вам еще работать и работать' . '<br>';
} elseif ($age >= $e && $age <= 100) {
    echo 'Вам пора на пенсию' . '<br>';
} elseif ($age <= $c && $age >= 0) {
    echo 'Вам еще рано работать' . '<br>';
} elseif ($age <= 0 || $age >= 100) {
    echo 'Неизвестный возраст' . '<br>';
}

/* Задание № 5 */
$day = 3;
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

/* Задание №6 */
$bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015];
$toyota = ['model' => 'X4', 'speed' => 110, 'doors' => 4, 'year' => 2014];
$opel = ['model' => 'X3', 'speed' => 100, 'doors' => 3, 'year' => 2013];
$auto = [$bmw, $toyota, $opel]
?>
<html>
<head>
</head>
<body>
<table>
    <caption>CAR bmw</caption>
 <tr>
  <td><?= $bmw['model']?></td>
  <td><?= $bmw['speed']?></td>
  <td><?= $bmw['doors']?></td>
  <td><?= $bmw['year']?></td>
 </tr>
</table>
<table>
    <caption>CAR toyota</caption>
    <tr>
        <td><?= $toyota['model']?></td>
        <td><?= $toyota['speed']?></td>
        <td><?= $toyota['doors']?></td>
        <td><?= $toyota['year']?></td>
    </tr>
</table>
<table>
    <caption>CAR opel</caption>
    <tr>
        <td><?= $opel['model']?></td>
        <td><?= $opel['speed']?></td>
        <td><?= $opel['doors']?></td>
        <td><?= $opel['year']?></td>
    </tr>
</table>
</body>
</html>


