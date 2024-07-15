<?php

// Исправьте ошибки в приведенном ниже коде. Ваш исправленный код должен корректно выполнять поставленные задачи

/**
 * Вычисляет факториал
 */
function calculateFactorial(int $number): int {
  if ($number === 0) {
    return 1;
  }
  
  return $number * calculateFactorial($number - 1);
}

/**
 * Проверяет, является ли число простымS
 */
function isPrime(int $num): bool {
  if ($num <= 1) {
    return false;
  }

  $sqrt_num = sqrt($num);

  for ($i = 2; $i <= $sqrt_num; $i++) {
    if ($num % $i === 0) {
      return false;
    }
  }
  
  return true;
}

echo "Введите число: ";
$number = readline();
echo "Факториал $number is: " . calculateFactorial($number) . "\n";

if (isPrime($number)) {
  echo "$number - это простое число.\n";
} else {
  echo "$number - это не простое число.\n";
}

?>
