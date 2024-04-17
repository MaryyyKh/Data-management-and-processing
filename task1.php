<?php
	// открытие файлов
	$file = fopen('students.txt', 'r');
	$file2 = fopen('students_new1.txt', 'w');

	// читаем файлы по строке
	while (!feof($file)) {
		$line = fgets($file);
		// извлекаем год рождения
		preg_match('/Год рождения: (\d{4})/', $line, $matches);
		$birthYear = $matches[1];
		
		// извлекаем год выпуска
		preg_match('/Год выпуска: (\d{4})/', $line, $matches);
		$graduationYear = $matches[1];
		
		$type = settype($birthYear, 'int');
		$type = settype($graduationYear, 'int');

		// извлекаем оценки аттестата
		preg_match('/Оценки в аттестате: (.*);/', $line, $matches);
		$grades = explode(', ', $matches[1]);
		$gradesOnly = array_map(function($grade) {
			return (int) preg_replace('/\D/', '', $grade);
		}, $grades);
		
		// проверка на наличие в аттестате только пятерок
		$wow = true;
		foreach ($gradesOnly as $grade) {
			if ($grade != 5) {
				$wow = false;
				break;
			}
		}
		$dis = $graduationYear - $birthYear;
		// проверка условия
		if ($wow && $dis > 17)
			continue;
		else
			fwrite($file2, $line);
	}
	// закрытие файлов
	fclose($file);
	fclose($file2);

	file_put_contents('students.txt', file_get_contents('students_new1.txt'));
	
	// вывод данных на экран
	$content = file_get_contents("students.txt");
	echo nl2br($content);

	file_put_contents('students_new1.txt', '');
?>
