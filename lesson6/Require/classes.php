<?php

class Human {
    private $weight = 0;
    private $height = 0;

    private $name = 'Иван';
    private $lastName = 'Иванов';

    // Дкоратор
    public function getWeight() {
        return $this->weight;
    }

    public function getHeight() {
        return $this->height;
    }

    // Конструктор
    public function __construct($name, $lastName, $weight, $height)
    {
        if( !is_string($name) ){
            die("Имя необходимо написать с типом данных строка!");
        }


        $this->name = $name;
        $this->lastName = $lastName;
        $this->weight = $weight;
        $this->height = $height;

        Nation::increasePopulation();
    }

    public function __destruct()
    {
        Nation::decreasePopulation();
    }

    public function getFullName()
    {
        return "{$this->name} {$this->lastName}";
    }
}


class Nation
{
    private $population = [];

    private static $allPopulation = 0;



    public static function increasePopulation($count = 1) {
        self::$allPopulation += $count;
    }

    public static function decreasePopulation($count = 1) {
        self::$allPopulation -= $count;
    }

    public static function getPopulation() {
        return self::$allPopulation;
    }


    public function add(Human $human)
    {
        $this->population[spl_object_id($human)] = $human;
    }

    public function remove(Human $human)
    {
        $objectId = spl_object_id($human);
        if (in_array($objectId, $this->population)) {
            unset($this->population[$objectId]);
        }
    }


    public function getFullInfo(Human $human)
    {
        if($human instanceof Human) {
            return "Полное имя: {$human->getFullName()}, Вес: {$human->getWeight()}, Рост: {$human->getHeight()}" . PHP_EOL;
        } else {
            return 'Некорреектный тип данных' . PHP_EOL;
        }

    }

    public function getAllHumanInformation(Human $item) {
        return "Полное имя: ".$item->getFullName().", Вес: ".$item->getWeight().", Рост: ".$item->getHeight() . PHP_EOL;
    }


    public function getFullInfoAboutAllPopulation() {
//        print_r($this->population[1]); // Вывод массив объектов
//        $ras = $this->population[1]; // Объявляем переменную для первого объекта
//        var_dump($ras->getFullName()); // Вызываем метод у объекта

        foreach ($this->population as $item) {
            echo $this->getAllHumanInformation($item);
        }
    }
}



$human1 = new Human('Rasyl', 'Sylaev', 60, 165);
$human2 = new Human('Michael', 'Jackson', 80, 185);

$nation = new Nation(); // Объявляем новый объект $nation

echo $nation->add($human1); // Добавляем $human1 в массив $population
echo $nation->add($human2); // Добавляем $human2 в массив $population
//echo $nation->remove($human1); // Удаляем $human2 из массив $population
//echo $nation->getFullInfo($human1); // Выводит всю инфу о $human1

echo var_dump($nation) . "<br>" . PHP_EOL; // Выводит весь массив population

//echo Nation::getPopulation();
unset($human1); // Удаляет переменную $human1
//echo Nation::getPopulation();

//echo $human1->getFullName(); // Выываем метод у объекта $human1 метод который выводит полное имя

echo $nation->getFullInfoAboutAllPopulation(); // Выводим всю инфу о human которые находятся в population

