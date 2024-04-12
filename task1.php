<?php
// Путь к исходному файлу
$sourceFile = 'students.txt';
// Путь к выходному файлу
$outputFile = 'students_new1.txt';

// Читаем содержимое исходного файла
$content = file_get_contents($sourceFile);

// Разбиваем содержимое на отдельные записи
$records = explode("\n", $content);

// Открываем выходной файл для записи
$file = fopen($outputFile, 'w') or die("Не удалось открыть файл для записи");

foreach ($records as $record) {
    // Разбиваем запись на отдельные поля
    $fields = explode(";", $record);

    // Извлекаем год рождения и год выпуска
    list($key, $birthYear) = explode(":", $fields[1]);
	$birthYear = intval(trim($birthYear));

	list($key, $graduationYear) = explode(":", $fields[2]);
	$graduationYear = intval(trim($graduationYear));


    // Проверяем условия
    if ($graduationYear - $birthYear <= 17) {
        // Если год выпуска - год рождения <= 17, проверяем оценки
        list($key, $grades) = explode(":", $fields[4]);
		$grades = trim($grades);
        // Проверяем, что все оценки равны 5
        // Используем ereg для проверки наличия всех пятерки
        if (preg_match('/\b\w+\s*-\s*5\b(?:,\s*\b\w+\s*-\s*5\b){4}/', $grades)) {
		// Если все оценки равны 5, запись не сохраняется
		continue;
		}

    }

    // Если запись не удалена, записываем её в выходной файл
    fwrite($file, $record . "\n");
}

// Закрываем выходной файл
fclose($file);
// Выводим содержимое выходного файла
echo nl2br(file_get_contents($outputFile));

$sourceFile = 'students_new1.txt';
// Путь к файлу, содержимое которого нужно заменить
$targetFile = 'students.txt';

// Читаем содержимое исходного файла
$content = file_get_contents($sourceFile);

// Записываем содержимое исходного файла в целевой файл
$result = file_put_contents($targetFile, $content);
?>