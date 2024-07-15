<?php

// В этом задании вам нужно исправить ошибки в предоставленном коде. Код имеет несколько логических и синтаксических ошибок, которые необходимо найти и исправить.

abstract class Animal {
  private string $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  public function getName(): string {
    return $this->name;
  }

  abstract public function makeSound(): string;
}

class Dog extends Animal {
  private ?string $breed;

  public function __construct(string $name, string $breed = null) {
    parent::__construct($name);
    $this->breed = $breed;
  }

  public function makeSound(): string {
    return "Woof";
  }

  public function getBreed(): ?string {
    return $this->breed;
  }
}

class Cat extends Animal {
  public function makeSound(): string {
    return "Meow";
  }
}

$rex = new Dog("Rex", "Labrador");
$stooped = new Dog("Stooped");
$murka = new Cat("Murka");

echo ($rex->getBreed() ?? "Dog") . " " . $rex->getName() . " says " . $rex->makeSound() . "\n";
echo ($stooped->getBreed() ?? "Dog") . " " . $stooped->getName() . " says " . $stooped->makeSound() . "\n";
echo "Cat " . $murka->getName() . " says " . $murka->makeSound() . "\n";

// Ожидаемый результат работы программы
// Labrador Rex says Woof
// Dog Stooped says Woof
// Cat Murka says Meow
?>
