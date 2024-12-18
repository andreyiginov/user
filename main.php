<?php
// Подключение файла с классом User
require_once "App/User.php";
require_once "App/Entry.php";

$entry = new Entry();
$nameText = "Введите имя:\n";
$name = $entry->getDataFromUser();
$ageText = "Введите возраст:\n";
$age = $entry->getDataFromUser();
$user = new User($name, $age);
echo "Имя пользователя: " . $user->getName() . "\n";
echo "Возраст пользователя: " . $user->getAge() . "\n";

