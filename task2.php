<?php
// Завдання 2: Робота зі змінними
$number = 123;                 // Число
$string = strval($number);    // Перетворення на рядок
$combined = "Результат: " . $string; // Об'єднання рядків
$type = gettype($string);     // Визначення типу

echo "<h2>Завдання 2</h2>";
echo $combined . "<br>";
echo "Тип змінної \$string: $type";
?>
