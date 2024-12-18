<?php

class User {
    // Свойства класса
    private string $name;
    private int $age;

    // Конструктор класса
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    // Метод для получения имени пользователя
    public function getName() {
        return $this->name;
    }
    // Метод для установки нового имени пользователя
    public function getAge() {
        return $this->age;
    }
}

?>
