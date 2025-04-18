<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Доска объявлений</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Доска объявлений</h1>
    
    <!-- Форма для добавления объявления -->
    <form method="POST" action="">
        <label>Email: <input type="email" name="email" required></label><br><br>
        
        <label>Категория:
            <select name="category" required>
                <option value="Программы">Программы</option>
                <option value="Игры">Игры</option>
                <option value="Приложения">Приложения</option>
            </select>
        </label><br><br>
        
        <label>Заголовок: <input type="text" name="title" required></label><br><br>
        
        <label>Текст объявления:<br>
            <textarea name="text" rows="5" cols="40" required></textarea>
        </label><br><br>
        
        <button type="submit" name="submit">Добавить</button>
    </form>

    <!-- Вывод существующих объявлений -->
    <h2>Список объявлений</h2>
    <table>
        <tr>
            <th>Email</th>
            <th>Категория</th>
            <th>Заголовок</th>
            <th>Текст</th>
        </tr>
        <?php
        // Подключение логики PHP
        include 'logic.php';
        ?>
    </table>
</body>
</html>
