<?php
// Функции в PHP, области видимости, перезагрузка функций, функции в функции

echo "\n\n================== Синтаксис функций ==================n\n";

function t1() {
  $a = 7;
  echo $a, "\n";
}

t1();                                               // -> 7
t1();                                               // -> 7
t1();                                               // -> 7

echo "\n\n================== Перезагрузка функций ==================n\n";

// function t1() {
//   $a = 7;
//   echo $a, "\n";                                                                                                                                         // PHP Fatal error: Cannot redeclare t1()
// }

echo "\n\n==================== Области видимости ===================n\n";

$b = 77;

function t2() {
  $b = 7;
  echo $b, "\n";                                    // -> 7
}

t2();

function t3() {
  echo $b, "\n";                                                                                                                                        // PHP Warning: Undefined variable $b in ...
}

t3();

function t4() {
  $b = 66;
  echo $b, "\n";                                    // -> 66
}

t4();

echo $b, "\n";                                      // -> 77

echo "\n\n================== Глобальные переменные =================n\n";

function t5() {
  global $b;
  $b = $b + 5;
  echo $b, "\n";                                    // -> 82
}

t5();

echo $b, "\n";                                      // -> 82

echo "\n\n================ Вызов функции до создания ===============n\n";

t6();                                               // -> it works!

function t6() {
  echo 'it works!';
}

echo "\n\n==================== Функция в функции ===================n\n";

function t7() {
  $f = 100;

  function t8() {
    $f = 200;
    echo $f, "\n";
  }
  echo $f, "\n";
}

// t8();                                                                                                                                  // PHP Fatal error: Call to undefined function t8() in ...

echo $f, "\n";

echo "\n"; // -------------------------

function t9() {
  $f = 100;

  function t10() {
    $f = 200;
    echo $f, "\n";
  }
  echo $f, "\n";
}

t9();                                               // -> 100
t10();                                              // -> 200

echo $f, "\n";                                                                                                                                          // PHP Warning: Undefined variable $f in ...

echo "\n"; // -------------------------

function t11() {
  $f = 100;

  function t12() {
    $f = 200;
    echo $f, "\n";                                  // -> 200
  }

  t12();
  echo $f, "\n";
}

t11();                                               // -> 100

echo "\n"; // -------------------------

function t13() {
  // t14();                                                                                                                               // PHP Fatal error: Call to undefined function t8() in ...

  $f = 100;

  function t14() {
    $f = 200;
    echo $f, "\n";                                  // -> 200
  }
}

t13();

echo "\n\n======================= Применение =======================n\n";

$n1 = 5;
$n2 = 4;

function increase() {
  global $n1, $n2;

  if ($n1 > $n2) {
    $t = $n1;
    $n1 = $n2;
    $n2 = $t;
  }

  echo '$n1 = '.$n1, "\n";                          // -> $n1 = 4
  echo '$n2 = '.$n2, "\n";                          // -> $n2 = 5
}

increase();

$n1 = 35;
$n2 = 46;
increase();                                         // -> $n1 = 35
                                                    // -> $n2 = 46
$n1 = 355;
$n2 = 42;
increase();                                         // -> $n1 = 42
                                                    // -> $n2 = 355
