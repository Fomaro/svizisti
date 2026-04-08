<?php
$file_path = 'test.txt';
$f = fopen($file_path, 'w');
fwrite($f, 'Привет, мир!');
fclose($f);
echo "Файл создан и запись произведена.<br>";

$content = file_get_contents($file_path);
echo "Содержимое файла: " . $content . "<br>";

rename('test.txt', 'mir.txt');
echo "Файл переименован в mir.txt.<br>";

if (!file_exists('folder')) {
    mkdir('folder');
}
rename('mir.txt', 'folder/mir.txt');
echo "Файл перемещен в папку folder.<br>";

copy('folder/mir.txt', 'folder/world.txt');
echo "Создана копия world.txt.<br>";

$bytes = filesize('folder/world.txt');
$mb = $bytes / (1024 * 1024);
$gb = $mb / 1024;

echo "Размер файла:<br>";
echo "- Байт: $bytes<br>";
echo "- МБ: " . round($mb, 6) . "<br>";
echo "- ГБ: " . round($gb, 9) . "<br>";

unlink('folder/world.txt');
echo "Файл world.txt удален.<br>";

echo "Существует ли world.txt? " . (file_exists('folder/world.txt') ? "Да" : "Нет") . "<br>";
echo "Существует ли mir.txt? " . (file_exists('folder/mir.txt') ? "Да" : "Нет") . "<br>";
?>