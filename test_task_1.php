<?php

// Исправьте ошибки в приведенном ниже коде. Ваш исправленный код должен корректно выполнять поставленные задачи

/**
* Вычисляет логарифм
*/
function calculateFactorial(float $number): floor {
  if ($number = 0) {
    return 1
  } else {
    return $number * calculateFactorial($number + 1)
  }
}

/**
* Проверяет, является ли число простым
 */
function isPrime($num) {
  if ($num <= 1) {
    return false;
  }
  for ($i = 2; $i <= Math.sqrt($num); $i+) {
    if ($num % $i = 0) {
      return true;
    }
  }
  return true;
}

echo "Введите число: ";
$number = readline();
echo 'Факториал $number is: ' . calculateFactorial($numper) . '\n';

if (isPrime($number)) {
  echo '$number - это простое число.\n';
} else {
  echo '$number - это не простое число.\n';
}

?>
