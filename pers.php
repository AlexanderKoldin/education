<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;
  private $grandFather;
  private $grandMother;
  private $secondGrandMother;
  private $secondGrandFather;

  function __construct($name, $lastname, $age, $mother = null, $father = null, $grandFather = null, $grandMother = null, $secondGrandMother = null, $secondGrandFather = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->grandFather = $grandFather;
    $this->grandMother = $grandMother;
    $this->secondGrandMother = $secondGrandMother;
    $this->secondGrandFather = $secondGrandFather;
    $this->hp = 100;
  }
 
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getLastName()
  {
    return $this->lastname;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getGrandFather()
  {
    return $this->grandFather;
  }
  function getGrandMother()
  {
    return $this->grandMother;
  }
  function getSecondGrandMother()
  {
    return $this->secondGrandMother;
  }
  function getSecondGrandFather()
  {
    return $this->secondGrandFather;
  }
  function getInfo()
  {
    return "
<h1>Моя семья</h1><br>" . "Меня зовут: "
      . $this->getName() . "<br> Фамилия: " . $this->getLastname() . "<br>Мой отец: " . $this->getFather()->getName() . "<br>Моя мать: " . $this->getMother()->getName() . "<br>Мой дедушка: " . $this->getGrandFather()->getName() . "<br>Моя бабушка: " . $this->getGrandMother()->getName() . "<br>Моя вторая бабушка: " . $this->getSecondGrandMother()->getName() . "<br>Мой второй дедушка: " . $this->getSecondGrandFather()->getName();
  }
}
$igor = new Person("Igor", "Petrov", 62);
$anna = new Person("Anna", "Petrova", 60);
$bella = new Person("Bella", "Grigoreva", 64);
$dmitriy = new Person("Dmitriy", "Grigorev", 66);

$alex = new Person("Alex", "Ivanov", 42, $bella, $dmitriy);
$olga = new Person("Olga", "Ivanova", 42, $anna, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex, $igor, $anna, $bella, $dmitriy);
// echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();