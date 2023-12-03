<?php
// Ввод и вывод информации, типы данных PHP

echo "\n\n=============================== Типы данных ===============================\n\n";

// -------------------------------------------------------------------------------- integer

$a = 55555;
$b = -44;

var_dump($a);                               // -> int(55555)
var_dump($b);                               // -> int(-42) 

// --------------------------------------------------------------------------- float/double

$a = 7.40;
$b = -7.4;
$c = .65;

var_dump($a);                               // -> float(7.4)
var_dump($b);                               // -> float(-7.4)
var_dump($c);                               // -> float(0.65)

$a = 0.2 + 0.4;

var_dump($a);                               // -> float(0.6000000000000001)
var_dump(0.6 === $a);                       // -> bool(false)

// -------------------------------------------------------------------------------- boolean

$a = true;

var_dump($a);                               // -> bool(true)
echo($a);                                   // -> 1

$b = false;

var_dump($b);                               // -> bool(false)
echo($b);                                   // ->

// --------------------------------------------------------------------------------- string

$a = 'choose your power';

var_dump($a);                               // -> string(17) "choose your power"

$l = strlen($a);                            // длина строки

echo $l;                                    // -> 17
echo 'Bazuem ' .$a;                         // -> Bazuem choose your power

$c = 'Bazuem ' .$a;

echo $c;                                    // -> Bazuem choose your power

echo "\n\n============================== Проверка типа ==============================\n\n";

$a = 5;
$b = 4.5;
$c = false;
$d = 'str111111';

echo gettype($a);                           // -> integer
echo gettype($b);                           // -> double
echo gettype($c);                           // -> boolean
echo gettype($d);                           // -> string

var_dump(gettype(5.5) === 'integer');       // -> bool(false)
var_dump(gettype(5.5) === 'double');        // -> bool(true)

echo "\n\n========================== Преобразование типов ===========================\n\n";

$a = 5.0;
$b = $a * $a;

echo gettype($a);                           // -> double
echo gettype($b);                           // -> double
var_dump($b);                               // -> float(25)

echo "\n\n=============================== Округление ================================\n\n";

$a = 5.55;
$b = round($a);                             // округление до целого
$c = round($a, 1);                          // округление до одного знака после запятой

echo gettype($a);                           // -> double
echo gettype($b);                           // -> double

echo "\n\n============================ Проверка на тип ==============================\n\n";

$a = 11.5;

var_dump(is_int($a));                       // -> bool(false)
var_dump(is_float($a));                     // -> bool(true)
var_dump(is_bool($a));                      // -> bool(false)
var_dump(is_string($a));                    // -> bool(false)
