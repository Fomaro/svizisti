<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
	<title>Виноградов</title>
</head>
<body>
<?php
header('Content-Type: text/html; charset=utf-8');
// 1
$str = "Привет"; 
$num = 42; 
$bool = true; 
$empty = null; 

echo "<p><strong>"; echo 'str'; echo "</strong>: " . htmlspecialchars($str, ENT_QUOTES, 'UTF-8') . " — тип: " . gettype($str) . "</p>";
echo "<p><strong>num</strong>: " . $num . " — тип: " . gettype($num) . "</p>";
echo "<p><strong>bool</strong>: " . ($bool ? 'true' : 'false') . " — тип: " . gettype($bool) . "</p>";
echo "<p><strong>empty</strong>: "; var_export($empty); echo " — тип: " . gettype($empty) . "</p>";

// 2
echo "<h1>Виноградов</h1>";

// 3
$condition = true; 
if ($condition) {
	echo "<p>ЭЕдиница — «за счастье». За отличные успехи ставилась оценка «1», и по нарастающей до четверки — за успехи «посредственные». А вот «выражение отсутствия всякого знания» грозило нулем. За каждый предмет лицеист получал три отметки, первые две менялись, а третья оставалась неизменна во время всего обучения: за способности или за талант.</p>";
} else {
	$imgUrl = "https://media.tenor.com/0FefgWaVTG4AAAAM/fire.gif  "; 
	echo '<img src="' . htmlspecialchars($imgUrl, ENT_QUOTES, 'UTF-8') . '" alt="gif" />';
}

// 4
$a = 5; 
$s = $a * $a;
echo "<p>Площадь квадрата со стороной $a равна $s.</p>";

// 5
$a = 5; $b = 8; 
$p = 2 * ($a + $b);
echo "<p>Периметр прямоугольника со сторонами $a и $b равен $p.</p>";

// 6
echo "<p><i>Это курсивный текст, выведенный с помощью тега i.</i></p>";

// 7
echo "<p>";
for ($i = 1; $i <= 9; $i++) {
	echo $i . "<br>";
}
echo "</p>";

// 8
$sample = "Программа";
$lastChar = mb_substr($sample, mb_strlen($sample, 'UTF-8') - 1, 1, 'UTF-8');
echo "<p>Последний символ строки \"$sample\" — $lastChar</p>";

// 9
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;
echo "<p>Результат упрощённых операций: $num</p>";

// 10
$secondsPerDay = 24 * 60 * 60;
echo "<p>Количество секунд в сутках: $secondsPerDay</p>";

?>
<!-- Кнопка для перехода на index2.php -->
<form action="index2.php" method="get">
    <button type="submit">Перейти на index2.php</button>
</form>
</body>
</html>