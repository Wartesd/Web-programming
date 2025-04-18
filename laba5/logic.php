<?php
// Создаём папки категорий, если их нет
$categories = ['Программы', 'Игры', 'Приложения'];
foreach ($categories as $category) {
    if (!is_dir("categories/$category")) {
        mkdir("categories/$category", 0777, true);
    }
}

// Обработка формы
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    // Удаляем запрещённые символы из названия файла
    $filename = preg_replace('/[\/:*?"<>|]/', '', $title);
    $filepath = "categories/$category/$filename.txt";

    // Сохраняем объявление в файл
    file_put_contents($filepath, "Email: $email\nТекст: $text");
}

// Вывод всех объявлений
foreach ($categories as $category) {
    $files = glob("categories/$category/*.txt");
    foreach ($files as $file) {
        $content = file_get_contents($file);
        $lines = explode("\n", $content);
        $email = str_replace('Email: ', '', $lines[0]);
        $text = str_replace('Текст: ', '', $lines[1]);
        $title = basename($file, '.txt');
        
        echo "<tr>
                <td>$email</td>
                <td>$category</td>
                <td>$title</td>
                <td>$text</td>
              </tr>";
    }
}
?>
