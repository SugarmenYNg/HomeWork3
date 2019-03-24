<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork3</title>
</head>
<body>
<h2>Домашнее задание:</h2>
<p><b>1) Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода
        при этом не должно измениться. Код для переделки:</b></p>
<ul style="list-style-type: none;">
    <li>$var = 1;</li>
    <li>$var = $var + 12;</li>
    <li>$var = $var - 14;</li>
    <li>$var = $var * 5;</li>
    <li>$var = $var / 7;</li>
    <li>$var = $var + 1;</li>
    <li>$var = $var - 1;</li>
    <li>echo $var;</li>
</ul>
<?php
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var++;
    $var--;
    echo "Результат данных математических действий это: ".$var;
?>
<p><b>2) Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте
переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите
        на экран значение переменной $result.</b></p>
<?php
$a = 17;
$b = 10;
$c = $a -= $b;
$d = 7;
$result = $c + $d;
echo $result;
?>
<p><b>3) Создайте переменную $age и присвойте ей ваш возраст и заменить его в данной строке 'Мне много лет!', вместо слова - много.</b></p>
<?php
$age = 35;
$str = "Мне много лет!";
$str = str_replace("много", $age, $str);
echo $str;
?>
<p><b>4)Создание сокращенного варианта ФИО. Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.</b></p>
<?php
$fio = "Иванов Иван Петрович";
$arFio = explode(" ", $fio);
$arFio[1] = mb_substr($arFio[1], 0, 1).".";
$arFio[2] = mb_substr($arFio[2], 0, 1).".";
$fio = implode(" ", $arFio);
echo $fio;
?>
</body>
</html>