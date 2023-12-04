<?php
// Основы синтаксиса, переменные, базовые операции PHP

echo 4;                                               // -> 4
echo (4);                                             // -> 4 
echo "\n";
echo '\n';                                            // -> \n
echo PHP_EOL;                                                                                                                                                                      // перенос строки
echo '5';                                             // -> 5
echo "\n";
echo 4, 5, 'Hello';                                   // -> 45Hello

echo "\n\n==================== Вывод переменных ====================\n\n";

$foo = 15;
$bar = 7;
echo $foo + $bar;                                     // -> 22
echo "\n";
echo $foo + 88;                                       // -> 103
echo "\n";
echo $foo - $bar;                                     // -> 8
echo "\n";
echo $foo * $bar;                                     // -> 105
echo "\n";
echo $foo / $bar;                                     // -> 2.1428571428571
echo "\n";
echo $foo % $bar;                                     // -> 1
echo "\n";

$s1 = 'Hi';
$s2 = 'Test';
// echo $s1 + $s2;                                                                                                   PHP Fatal error: Uncaught TypeError: Unsupported operand types: string + string
echo $s1 . $s2;                                       // -> HiTest                                                                                                                   // конкатенация
echo "\n";
echo $s1 . '5555';                                    // -> Hi5555
echo $s1 . 5555;                                      // -> Hi5555
echo "\n";
echo '15 + 7 = ' . ($foo + $bar);                     // -> 15 + 7 = 22

echo "\n\n========================== Дроби =========================\n\n";

$d = 8.5;
$e = 13.2;
echo $d + 11;                                         // -> 19.5
echo "\n";
echo $d + $e;                                         // -> 21.7
echo "\n";
echo $d - $e;                                         // -> -4.7
echo "\n";
echo $d * $e;                                         // -> 112.2
echo "\n";
echo $d / $e;                                         // -> 0.64393939393939
echo "\n";
echo $d % $e;                                         // -> 8

echo "\n\n========================= Строки =========================\n\n";

$d = 'string';
echo $d;                                              // -> string
echo "\n";
$f = "$d 888";                                                                                                                                      // двойные кавычки обрабатываются как инструкция
echo $f;                                              // -> string 888
echo "\n";
$g = '$d 888';                                                                                                                                 // одинарные кавычки обрабатываются как просто строка
echo $g;                                              // -> $d 888
echo "\n";

echo "\n\n========================= Скобки =========================\n\n";

$a = 3;
$b = 4;
$c = ($a**2 + $b**2)**0.5;                                                                                                                               // возведение в степень и корень квадратный
echo $c;                                              // -> 5

echo "\n\n================ Некоторые полезные штуки ================\n\n";

var_dump($a);                                         // -> int(3)
var_dump($e);                                         // -> float(13.2)
var_dump($f);                                         // -> string(10) "string 888"
var_dump(True);                                       // -> bool(true)

phpinfo();

exec ('start calc');
