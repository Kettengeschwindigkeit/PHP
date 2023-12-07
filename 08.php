<?php
// Работа со строками в PHP. Обзор топ функций, удаление тегов, экранирование

echo "\n\n=================================================================== Строки ===================================================================n\n";

"\n"; // ======================================================================================================================================= длина строки

$s = 'The Big Lebowski';

echo strlen($s), "\n";                                          // -> 16

"\n"; // ===================================================================================================================================== перебор строкиc

$out = '';

for ($i = 0; $i < strlen($s); $i = $i + 1) {
  $out .= $s[$i].'-';
}

echo $out, "\n";                                                // -> T-h-e- -B-i-g- -L-e-b-o-w-s-k-i-

echo $s[1], "\n";                                               // -> h

"\n"; // ===================================================================================================================================== реверс строки

$s2 = strrev($s);
echo $s2, "\n";                                                 // -> ikswobeL giB ehT (исходная строка не меняется!)

$s2 = strrev($s2);
echo $s2, "\n";                                                 // -> The Big Lebowski

"\n"; // =================================================================================================================================== поиск подстроки
"\n"; // str_contains ------------------------------------------------------------------------------------------------------------ (возвращает true / false)

$s3 = 'Breaking Bad';

var_dump(str_contains($s3, 'e'));                               // -> bool(true)
var_dump(str_contains($s3, 'j'));                               // -> bool(false)
var_dump(str_contains($s3, 'aki'));                             // -> bool(true)
var_dump(str_contains($s3, 'akir'));                            // -> bool(false)
var_dump(str_contains($s3, 'b'));                               // -> bool(false)
var_dump(str_contains($s3, 'B'));                               // -> bool(true)
var_dump(str_contains($s3, ' '));                               // -> bool(true)
var_dump(str_contains($s3, ''));                                // -> bool(true) (возвращает true в любой строке)

"\n"; // strpos ------------------------------------------------------------------------------------------------------- (возвращает индекс начала пдстроки)

echo strpos($s3, 'k'), "\n";                                    // -> 4
echo strpos($s3, 'kin'), "\n";                                  // -> 4
var_dump(strpos($s3, 'j'));                                     // -> bool(false)
var_dump(strpos($s3, 'a'));                                     // -> int(3) (находится первый символ слева направо)
var_dump(strpos($s3, 'b'));                                     // -> bool(false)
var_dump(strpos($s3, 'B'));                                     // -> int(0)

"\n"; // stripos ------------------------------------------------------------------------------ (возвращает индекс начала пдстроки, не зависит от регистра)

var_dump(stripos($s3, 'b'));                                    // -> int(0)

"\n"; // strripos -------------------------------------------------------------- (возвращает индекс начала пдстроки, не зависит от регистра, справа налево)

var_dump(strripos($s3, 'a'));                                   // -> int(10)
var_dump(strripos($s3, 'b'));                                   // -> int(9)

"\n"; // strrpos ------------------------------------------------------------------ (возвращает индекс начала пдстроки, зависит от регистра, справа налево)

var_dump(strrpos($s3, 'a'));                                    // -> int(10)
var_dump(strrpos($s3, 'b'));                                    // -> bool(false)

"\n"; // ================================================================================================================================= изменение строки

$s3[8] = '|';

echo $s3, "\n";                                                 // -> Breaking|Bad

"\n"; // ========================================================================================================================= преобразование регистров

$s4 = 'sons of Anarchy';

echo ucfirst($s4), "\n";                                        // -> Sons of anarchy
echo strtoupper($s4), "\n";                                     // -> SONS OF ANARCHY
echo strtolower($s4), "\n";                                     // -> sons of anarchy

"\n"; // ================================================================================================================================ удаление пробелов

$s5 = '   Trait  ';

var_dump($s5);                                                  // -> string(10) "    Trait   "
var_dump(trim($s5));                                            // -> string(5) "Trait"

"\n"; // ==================================================================================================================================== экранирование

$s6 = "in'correctl/y \ used to try to";
var_dump($s6);                                                  // -> string(30) "in'correctl/y \ used to try to"

$s7 = addslashes($s6);
var_dump($s7);                                                  // -> string(32) "in\'correctl/y \\ used to try to"

$s8 = "in 'ttt' to";
$s9 = addslashes($s8);
var_dump($s9);                                                  // -> string(13) "in \'ttt\' to"

$s10 = stripcslashes($s7);
var_dump($s10);                                                 // -> string(30) "in'correctl/y \ used to try to"

"\n"; // ==================================================================================================================== комментирование спецсимволами

$s11 = '<span><b>go</b></span>';
$s12 = htmlspecialchars($s11);

var_dump($s12);                                                 // -> "&lt;span&gt;&lt;b&gt;go&lt;/b&gt;&lt;/span&gt;" (теги не будут обработаны браузером)

"\n"; // =================================================================================================================================== удаление тегов

$s13 = '<span>go went 444</span>';

echo strip_tags($s13), "\n";                                    // -> go went 444

"\n"; // ============================================================================================================================ форматирование вывода

$price = 12234.4555;

echo number_format($price, 2, '.', ' '), "\n";                  // -> 12 234.46

"\n"; // ================================================================================================================================= замена подстроки

echo str_replace('bb', 'c', 'aaaaabbbbaaabbaaadddbbb'), "\n";   // -> aaaaaccaaacaadddcb
