<?php

// ��������� ������ � ����������� ���� ����. ��� ������������ ��� ������ ��������� ��������� ������������ ������

/**
* ��������� ��������
*/
function calculateFactorial(float $number): floor {
  if ($number = 0) {
    return 1
  } else {
    return $number * calculateFactorial($number + 1)
  }
}

/**
* ���������, �������� �� ����� �������
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

echo "������� �����: ";
$number = readline();
echo '��������� $number is: ' . calculateFactorial($numper) . '\n';

if (isPrime($number)) {
  echo '$number - ��� ������� �����.\n';
} else {
  echo '$number - ��� �� ������� �����.\n';
}

?>
