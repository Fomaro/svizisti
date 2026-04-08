<?php

class Worker 
{
    public $name;
    private $age; // Свойство скрыто по заданию
    public $salary;

    public function __construct($name, $age, $salary) 
    {
        $this->name = $name;
        $this->salary = $salary;
        // Используем метод проверки при создании
        $this->setAge($age);
    }

    // Метод для получения имени
    public function getName() 
    {
        return $this->name;
    }

    // Метод для получения возраста
    public function getAge() 
    {
        return $this->age;
    }

    // Метод для получения зарплаты
    public function getSalary() 
    {
        return $this->salary;
    }

    // Приватный метод проверки возраста (из задания 9)
    private function checkAge($age) 
    {
        return $age >= 18;
    }

    // Публичный метод установки возраста с использованием приватной проверки
    public function setAge($age) 
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        } else {
            echo "<b>{$this->name}</b>: Вам работать в нашей компании еще рано (указано: $age).<br>";
        }
    }
}

// 1. Создание объектов
$worker1 = new Worker("Иван", 25, 1000);
$worker2 = new Worker("Вася", 26, 2000);

// 2. Вывод суммы зарплат и возрастов
$sumSalary = $worker1->getSalary() + $worker2->getSalary();
$sumAge = $worker1->getAge() + $worker2->getAge();

echo "Сумма зарплат: " . $sumSalary . "<br>";
echo "Сумма возрастов: " . $sumAge . "<br>";

echo "<hr>";

// 3. Демонстрация работы методов getName, getAge, getSalary
echo "Работник 1: " . $worker1->getName() . ", Возраст: " . $worker1->getAge() . ", Зарплата: " . $worker1->getSalary() . "<br>";
echo "Работник 2: " . $worker2->getName() . ", Возраст: " . $worker2->getAge() . ", Зарплата: " . $worker2->getSalary() . "<br>";

echo "<hr>";

// 4. Проверка работы логики setAge (Задание 7-9)
echo "Попытка установить возраст 17 лет для нового сотрудника:<br>";
$worker3 = new Worker("Дима", 17, 500);

?>
