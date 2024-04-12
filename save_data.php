<html lang="ru">
<head>
    <title>Управление абитуриентами</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $birth_year = $_POST['birth_year'];
    $school_year = $_POST['school_year'];
    $needs_dormitory = isset($_POST['needs_dormitory']) ? 'Да' : 'Нет';

    // Формируем строку для сохранения в файл
    $data = "ФИО: $surname $name $patronymic; Год рождения: $birth_year; Год выпуска: $school_year; Нуждается в общежитии: $needs_dormitory; Оценки в аттестате: ";
    for ($i = 1; $i <= 5; $i++) {
        $att = $_POST["att$i"];
        $grade = $_POST["grade$i"];
        $data .= "$att - $grade";
		if ($i < 5)
			$data .= ", ";
		else
			$data .= ";";
    }
    $data .= " Оценки за вступительные экзамены: ";
    for ($i = 1; $i <= 3; $i++) {
        $vst = $_POST["vst$i"];
        $vgrade = $_POST["vgrade$i"];
        $data .= "$vst - $vgrade";
		if ($i < 3)
			$data .= ", ";
		else
			$data .= ".";
    }
	$data .= "\n";
    // Сохраняем данные в файл
    $filename = "students.txt";
    file_put_contents($filename, $data, FILE_APPEND);

    echo nl2br("Данные успешно сохранены!\n");
} else {
    echo nl2br("Данные не были отправлены.\n");
}
?>
<button onclick="window.location.href='main_page.php'">Вернуться на главную страницу</button><br>
</body>
</html>