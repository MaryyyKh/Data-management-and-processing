<!DOCTYPE html>
<html>
<head>
    <title>�������� ������</title>
</head>
<body>
    <form action="form2.php" method="post">
        <label for="surname">�������:</label>
        <input type="text" id="surname" name="surname" required><br>
        <label for="name">���:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="patronymic">��������:</label>
        <input type="text" id="patronymic" name="patronymic"><br>
        <label for="birth_year">��� ��������:</label>
        <input type="number" id="birth_year" name="birth_year" required><br>
        <label for="school_year">��� ������� �� �����:</label>
        <input type="number" id="school_year" name="school_year" required><br>
        <label for="needs_dormitory">��������� � ���������:</label>
        <input type="checkbox" id="needs_dormitory" name="needs_dormitory"><br>
        <input type="submit" value="������� �����">
    </form>
</body>
</html>