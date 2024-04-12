<!DOCTYPE html>
<html>
<head>
    <title>Успеваемость</title>
</head>
<body>
    <form action="save_data.php" method="post">
        <input type="hidden" name="surname" value="<?php echo $_POST['surname']; ?>">
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="patronymic" value="<?php echo $_POST['patronymic']; ?>">
        <input type="hidden" name="birth_year" value="<?php echo $_POST['birth_year']; ?>">
        <input type="hidden" name="school_year" value="<?php echo $_POST['school_year']; ?>">
        <input type="hidden" name="needs_dormitory" value="<?php echo $_POST['needs_dormitory']; ?>">
        <h3>Оценки в аттестате<br></h3>
        <label for="att1">Предмет:</label>
        <select id="att1" name="att1" required>
            <option value="">Выберите предмет</option>
            <option value="math">Математика</option>
            <option value="rus">Русский язык</option>
            <option value="chem">Химия</option>
            <option value="bio">Биология</option>
            <option value="eng">Английский язык</option>
            <option value="phys">Физика</option>
            <option value="info">Информатика</option>
        </select>
        <label for="grade1">Оценка:</label>
        <input type="text" id="grade1" name="grade1" required><br>
		<label for="att2">Предмет:</label>
        <select id="att2" name="att2" required>
            <option value="">Выберите предмет</option>
            <option value="math">Математика</option>
            <option value="rus">Русский язык</option>
            <option value="chem">Химия</option>
            <option value="bio">Биология</option>
            <option value="eng">Английский язык</option>
            <option value="phys">Физика</option>
            <option value="info">Информатика</option>
        </select>
        <label for="grade2">Оценка:</label>
        <input type="text" id="grade2" name="grade2" required><br>
		<label for="att3">Предмет:</label>
        <select id="att3" name="att3" required>
            <option value="">Выберите предмет</option>
            <option value="math">Математика</option>
            <option value="rus">Русский язык</option>
            <option value="chem">Химия</option>
            <option value="bio">Биология</option>
            <option value="eng">Английский язык</option>
            <option value="phys">Физика</option>
            <option value="info">Информатика</option>
        </select>
        <label for="grade3">Оценка:</label>
        <input type="text" id="grade3" name="grade3" required><br>
		<label for="att4">Предмет:</label>
        <select id="att4" name="att4" required>
            <option value="">Выберите предмет</option>
            <option value="math">Математика</option>
            <option value="rus">Русский язык</option>
            <option value="chem">Химия</option>
            <option value="bio">Биология</option>
            <option value="eng">Английский язык</option>
            <option value="phys">Физика</option>
            <option value="info">Информатика</option>
        </select>
        <label for="grade4">Оценка:</label>
        <input type="text" id="grade4" name="grade4" required><br>
		<label for="att5">Предмет:</label>
        <select id="att5" name="att5" required>
            <option value="">Выберите предмет</option>
            <option value="math">Математика</option>
            <option value="rus">Русский язык</option>
            <option value="chem">Химия</option>
            <option value="bio">Биология</option>
            <option value="eng">Английский язык</option>
            <option value="phys">Физика</option>
            <option value="info">Информатика</option>
        </select>
        <label for="grade5">Оценка:</label>
        <input type="text" id="grade5" name="grade5" required><br>
        <h3>Оценки за вступительные экзамены<br></h3>
		<label for="vst1">Предмет:</label>
        <select id="vst1" name="vst1" required>
            <option value="">Выберите предмет</option>
            <option value="math">Математика</option>
            <option value="rus">Русский язык</option>
            <option value="chem">Химия</option>
            <option value="bio">Биология</option>
            <option value="eng">Английский язык</option>
            <option value="phys">Физика</option>
            <option value="info">Информатика</option>
        </select>
        <label for="vgrade1">Оценка:</label>
        <input type="text" id="vgrade1" name="vgrade1" required><br>
		<label for="vst2">Предмет:</label>
        <select id="vst2" name="vst2" required>
            <option value="">Выберите предмет</option>
            <option value="math">Математика</option>
            <option value="rus">Русский язык</option>
            <option value="chem">Химия</option>
            <option value="bio">Биология</option>
            <option value="eng">Английский язык</option>
            <option value="phys">Физика</option>
            <option value="info">Информатика</option>
        </select>
        <label for="vgrade2">Оценка:</label>
        <input type="text" id="vgrade2" name="vgrade2" required><br>
		<label for="vst3">Предмет:</label>
        <select id="vst3" name="vst3" required>
            <option value="">Выберите предмет</option>
            <option value="math">Математика</option>
            <option value="rus">Русский язык</option>
            <option value="chem">Химия</option>
            <option value="bio">Биология</option>
            <option value="eng">Английский язык</option>
            <option value="phys">Физика</option>
            <option value="info">Информатика</option>
        </select>
        <label for="vgrade3">Оценка:</label>
        <input type="text" id="vgrade3" name="vgrade3" required><br>
        <input type="submit" value="Сохранить данные">
    </form>
</body>
</html>
