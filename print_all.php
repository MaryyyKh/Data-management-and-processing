<?php
// Читаем содержимое файла
$content = file_get_contents("students.txt");

// Выводим содержимое файла
echo nl2br($content);
?>
