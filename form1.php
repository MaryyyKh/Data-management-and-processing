<!DOCTYPE html>
<html>
<head>
    <title>Основные данные</title>
</head>
<body>
    <form action="form2.php" method="post">
        <label for="surname">Фамилия:</label>
        <input type="text" id="surname" name="surname" required><br>
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="patronymic">Отчество:</label>
        <input type="text" id="patronymic" name="patronymic"><br>
        <label for="birth_year">Год рождения:</label>
        <input type="number" id="birth_year" name="birth_year" required><br>
        <label for="school_year">Год выпуска из школы:</label>
        <input type="number" id="school_year" name="school_year" required><br>
        <label for="needs_dormitory">Нуждается в общежитии:</label>
        <input type="checkbox" id="needs_dormitory" name="needs_dormitory"><br>
        <input type="submit" value="Перейти далее">
    </form>
</body>
</html>