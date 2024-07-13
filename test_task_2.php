<?php

// В этом задании вам нужно исправить ошибки в предоставленном коде. Код имеет несколько логических и синтаксических ошибок, которые необходимо найти и исправить.

abstract class Animal {
  protected $name;

  protected function __construct($name) {
    $this->name = $name;
  }

  public function getName(): string {
    return $this->name;
  }

  abstract protected function makeSound(): string;
}

class Dog extends Animal {
  protected ?string $breed;

  public function __construct(string $name, string $breed = null) {
    parent::__construct($name);
    $this->breed = $breed;
  }

  public function makeSound(): string {
    return "Woof";
  }
}

class Cat extends Animal {
  public function __construct(string $name) {
    parent::__construct($name);
  }

  public function makeSound(): string {
    return "Meow";
  }
}

$rex = new Dog("Rex", "Labrador");
$stooped = new Dog("Stooped");
$murka = new Cat("Murka");

echo "Labrador " . $rex->getName() . " says " . $rex->makeSound() . "\n";
echo "Dog " . $stooped->getName() . " says " . $stooped->makeSound() . "\n";
echo "Cat " . $murka->getName() . " says " . $murka->makeSound() . "\n";

// Ожидаемый результат работы программы
// Labrador Rex says Woof
// Dog Stooped says Woof
// Cat Murka says Meow
?>
