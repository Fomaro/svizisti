<?php
mkdir('test');
echo "Папка test создана.<br>";

rename('test', 'www');
echo "Папка переименована в www.<br>";

rmdir('www');
echo "Папка www удалена.<br>";

if (!file_exists('test')) mkdir('test');

$folders = ['images', 'documents', 'archive', 'temp'];
foreach ($folders as $name) {
    $path = "test/$name";
    if (!file_exists($path)) {
        mkdir($path);
        echo "Создана подпапка: $path<br>";
    }
}

echo "Список JPG-файлов:<br>";
$jpg_files = glob("*.jpg");
if (empty($jpg_files)) {
    echo "Файлов .jpg не найдено.<br>";
} else {
    foreach ($jpg_files as $filename) {
        echo $filename . "<br>";
    }
}
?>