<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Объявления: Программы</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { color: #0066cc; text-decoration: none; }
    </style>
</head>
<body>
    <h1>Объявления в категории "Программы"</h1>
    <a href="index.php">← Назад к общей доске</a>
    
    <table>
        <tr>
            <th>Email</th>
            <th>Заголовок</th>
            <th>Текст</th>
        </tr>
        <?php
        $category = "Программы";
        $files = glob("categories/$category/*.txt");
        
        foreach ($files as $file) {
            $content = file_get_contents($file);
            $lines = explode("\n", $content);
            $email = str_replace('Email: ', '', $lines[0]);
            $text = str_replace('Текст: ', '', $lines[1]);
            $title = basename($file, '.txt');
            
            echo "<tr>
                    <td>$email</td>
                    <td>$title</td>
                    <td>$text</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
