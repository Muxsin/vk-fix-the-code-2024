<?php

// Доработайте код из test_task_2.php так, чтобы он мог выполняться на сайте с возможностью выбора языка отображения
// Для простоты считаем, что имя животного может быть на любом языке, при этом порода собаки только на выбранном языке
// Пример псевдо-кода такого сайта:

require_once('./test_task_2.php');

class ConfigReader {
  public const LOCALE_RU = 'ru';
  public const LOCALE_EN = 'en';
}

class Translator {
  public string $locale;

  public function __construct(string $locale) {
    $this->locale = $locale;
  }

  private array $data = [
    'Dog' => [
      'ru' => 'Собака',
      'en' => 'Dog',
    ],
    'Cat' => [
      'ru' => 'Кошка',
      'en' => 'Cat',
    ],
    'Labrador' => [
      'ru' => 'Лабрадор',
      'en' => 'Labrador',
    ],
    'Woof' => [
      'ru' => 'Гав',
      'en' => 'Woof',
    ],
    'Meow' => [
      'ru' => 'Мяу',
      'en' => 'Meow',
    ],
    '%s %s says %s' => [
      'ru' => '%s %s говорит %s',
      'en' => '%s %s says %s',
    ],
  ];

  public function translate(string $key) {
    return $this->data[$key][$this->locale] ?? $key;
  }
}

class Controller {
  public Translator $translator;
  
  public function __construct(string $locale) {
    $this->translator = new Translator($locale);
  }

  public function index() {
    $rex = new Dog('Rex', 'Labrador');
    $murka = new Cat('Мурка');

    $this->showLine($rex);
    $this->showLine($murka);
  }

  public function showLine(Animal $animal) {
    $sentence = $this->translator->translate("%s %s says %s") . "\n";
    $name = $this->translator->translate($animal->getName());
    $sound = $this->translator->translate($animal->makeSound());

    if ($animal instanceof Dog) {
      printf(
        $sentence,
        $this->translator->translate($animal->getBreed() ?? 'Dog'),
        $name,
        $sound
      );
    } else if ($animal instanceof Cat) {
      printf(
        $sentence,
        $this->translator->translate('Cat'),
        $name,
        $sound
      );
    } else {
      printf(
        $sentence,
        $this->translator->translate('Animal'),
        $name,
        $sound
      );
    }
  }
}

$controller = new Controller(ConfigReader::LOCALE_RU);
$controller->index();
$controller_en = new Controller(ConfigReader::LOCALE_EN);
$controller_en->index();

// Ожидаемый результат работы программы
// Лабрадор Rex говорит Гав
// Кошка Мурка говорит Мяу
// Labrador Rex says Woof
// Cat Мурка says Meow
