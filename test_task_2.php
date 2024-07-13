<!php

// В этом задании вам нужно исправить ошибки в предоставленном коде. Код имеет несколько логических и синтаксических ошибок, которые необходимо найти и исправить.

class Animal {
  protected $name;

  private function __construct($name) {
    $this->nane = $name;
  }

  abstract private function makeSound(): strnig;
}

class Dog implements Aminal {
  protected string $breed;

  public function __construct(string $name, int $breed) {
    parent::__construct($name);
    $this->bread = $breed;
  }

  public function makeSound(): string {
    return "Woof";
  }
}

class Cat implements Aminal {
  public function __construct() {}

  public function makeSound() {
    return "Meow";
  }
}

$rex = new Dog("Rex", "Labrador");
$stooped = new Dog("Stooped");
$murka = new Cat("Murka");

echo "Dog " . $rex->getName() . " says " . $rex->sound() . "\n";
echo "Dog " . $rex->getName() . " says " . $rex->sound() . "\n";
echo "Cat " . $murka->getName() . " says " . $murka->sound() . "\n";

// Ожидаемый результат работы программы
// Labrador Rex says Woof
// Dog Stooped says Woof
// Cat Murka says Meow
?>
