<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../nods/css/zametki.css"> <!-- Подключение файла стилей CSS -->
    <link rel="stylesheet" href="../nods/css/meny.css">

    <title>Заметки</title>
</head>

<body>
    <h1>Добавить Заметку</h1> <!-- Форма для добавления заметок, отправляющая данные на display_notes.php -->
    <form method="post" action="display_notes.php"> <label for="name">Название:</label> <input type="text" id="name" name="name" required><br> <label for="category">Категория:</label> <!-- Выбор категории из выпадающего списка --> <select id="category" name="category" required>
            <option value="Книга">Книга</option>
            <option value="Мультфильм">Мультфильм</option>
            <option value="Фильм">Фильм</option>
            <option value="Сериал">Сериал</option>
            <option value="Аниме">Аниме</option>


        </select><br> <input type="submit" value="Добавить"> </form>
    <h2>Заметки</h2>
    <table border="1">
        <tr>
            <th>Название</th>
            <th>Категория</th>
        </tr> <!-- Подключение display_notes.php --> <?php include 'display_notes.php'; ?>
    </table>
    <div class="meny">
        <ul class="meny_list">
            <li class="meny_item"><a href="../index.html" class="link">Главная</a></li>
            <li class="meny_item"><a href="../DZ1-2.html" class="link">Первый проект</a></li>
            <li class="meny_item"><a href="../calk.html" class="link">Калькулятор</a></li>
            <li class="meny_item"><a href="../guess-the-number.html" class="link">Игра</a></li>
            <li class="meny_item"><a href="../test.html" class="link">Тест</a></li>
            <li class="meny_item"><a href="../chek.html" class="link">Чек лист</a></li>
            <li class="meny_item"><a href="../nods/zametki.php" class="link">Заметки</a></li>

        </ul>
    </div>
</body>

</html>