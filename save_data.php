<html lang="ru">
<head>
    <title>���������� �������������</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $birth_year = $_POST['birth_year'];
    $school_year = $_POST['school_year'];
    $needs_dormitory = isset($_POST['needs_dormitory']) ? '��' : '���';

    // ��������� ������ ��� ���������� � ����
    $data = "���: $surname $name $patronymic; ��� ��������: $birth_year; ��� �������: $school_year; ��������� � ���������: $needs_dormitory; ������ � ���������: ";
    for ($i = 1; $i <= 5; $i++) {
        $att = $_POST["att$i"];
        $grade = $_POST["grade$i"];
        $data .= "$att - $grade";
		if ($i < 5)
			$data .= ", ";
		else
			$data .= ";";
    }
    $data .= " ������ �� ������������� ��������: ";
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
    // ��������� ������ � ����
    $filename = "students.txt";
    file_put_contents($filename, $data, FILE_APPEND);

    echo nl2br("������ ������� ���������!\n");
} else {
    echo nl2br("������ �� ���� ����������.\n");
}
?>
<button onclick="window.location.href='main_page.php'">��������� �� ������� ��������</button><br>
</body>
</html>