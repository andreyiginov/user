<?php
require_once "App/User.php"; // Подключение файла с классом User
require_once "App/Entry.php"; // Подключение файла с классом Entry

$entry = new Entry(); // Создание экземпляра класса Entry
$nameText = "Введите имя:\n"; // Сообщение пользователю
$name = $entry->getDataFromUser(); // Ввод данных пользователем
$ageText = "Введите возраст:\n"; // Сообщение пользователю
$age = $entry->getDataFromUser(); // Ввод данных пользователем
$user = new User($name, $age); // Создание экземпляра класса User
echo "Имя пользователя: " . $user->getName() . "\n"; // Вывод имени пользователя
echo "Возраст пользователя: " . $user->getAge() . "\n"; // Вывод возраста пользователя

