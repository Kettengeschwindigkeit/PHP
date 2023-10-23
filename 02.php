<?php
// Комментарий

echo 4;
echo (4);
echo "\n";
echo '\n';
echo PHP_EOL;
echo '5';
echo "\n";
echo 4, 5, 'Hello';

echo "\n\n========== Вывод переменных ==========\n\n";

$foo = 15;
$bar = 7;
echo $foo + $bar;
echo "\n";
echo $foo + 88;
echo "\n";
echo $foo - $bar;
echo "\n";
echo $foo * $bar;
echo "\n";
echo $foo / $bar;
echo "\n";
echo $foo % $bar;
echo "\n";

$s1 = 'Hi';
$s2 = 'Test';
// echo $s1 + $s2;                                                                                                    PHP Fatal error: Uncaught TypeError: Unsupported operand types: string + string
echo $s1 . $s2;                                                                                                                                                                       // конкатенация
echo "\n";
echo $s1 . '5555';
echo $s1 . 5555;
echo "\n";
echo '15 + 7 = ' . ($foo + $bar);

echo "\n\n========== Дроби ==========\n\n";

$d = 8.5;
$e = 13.2;
echo $d + 11;
echo "\n";
echo $d + $e;
echo "\n";
echo $d - $e;
echo "\n";
echo $d * $e;
echo "\n";
echo $d / $e;
echo "\n";
echo $d % $e;

echo "\n\n========== Строки ==========\n\n";

$d = 'string';
echo $d;
echo "\n";
$f = "$d 888";                                                                                                                                       // двойные кавычки обрабатываются как инструкция
echo $f;
echo "\n";
$g = '$d 888';                                                                                                                                  // одинарные кавычки обрабатываются как просто строка
echo $g;
echo "\n";

echo "\n\n========== Скобки ==========\n\n";

$a = 3;
$b = 4;
$c = ($a**2 + $b**2)**0.5;                                                                                                                                // возведение в степень и корень квадратный
echo $c;

echo "\n\n========== Некоторые полезные штуки ==========\n\n";

var_dump($a);
var_dump($e);
var_dump($f);
var_dump(True);

phpinfo();

exec ('start calc');
