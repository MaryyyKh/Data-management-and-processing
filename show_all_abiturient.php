<?php
	$data_file = 'students_data.txt';
	
	if (!file_exists($data_file) || filesize($data_file) === 0) {
        echo "Нет данных для отображения.<br><br>";
		echo '<br><a href="start.php">Главная страница</a>';
        return;
    }
	
    echo nl2br(file_get_contents($data_file));
    echo '<br><a href="start.php">Главная страница</a>';
?>
