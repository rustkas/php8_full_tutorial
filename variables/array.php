<?php
// Создаст массив с ключами 0, "surname" и "name"
$arr = [
  0 => "Нулевой элемент",
  "surname" => "Гейтс",
  "name" => "Билл",
];
echo $arr["surname"];       // Гейтс
$arr[1] = "Первый элемент"; // создаст элемент и присвоит ему значение
$arr["name"] = "Вильям";    // присвоит существующему элементу новое значение