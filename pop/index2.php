<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лаба 9</title>
    <style>
        .task { border-bottom: 1px solid #ccc; padding: 10px; font-family: monospace; }
        h4 { margin: 0 0 5px 0; font-family: sans-serif; }
    </style>
</head>
<body>

<div class="task">
    <h4>1. array_map (A, B, C...)</h4>
    <?php
    $a = ['a', 'b', 'c', 'd', 'e'];
    print_r(array_map('strtoupper', $a));
    ?>
</div>

<div class="task">
    <h4>2. Последний элемент</h4>
    <?php
    $arr = [1, 2, 3, 4, 5];
    echo $arr[count($arr) - 1];
    ?>
</div>

<div class="task">
    <h4>3. Поиск 3</h4>
    <?php
    $arr = [1, 2, 3, 4, 5];
    echo array_search(3, $arr) !== false ? 'есть' : 'нет';
    ?>
</div>

<div class="task">
    <h4>4. Слияние</h4>
    <?php
    print_r(array_merge([1, 2, 3], ['a', 'b', 'c']));
    ?>
</div>

<div class="task">
    <h4>5. Срез (2, 3, 4)</h4>
    <?php
    print_r(array_slice([1, 2, 3, 4, 5], 1, 3));
    ?>
</div>

<div class="task">
    <h4>6. Ключи и значения</h4>
    <?php
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    $keys = array_keys($arr);
    $values = array_values($arr);
    print_r($keys); print_r($values);
    ?>
</div>

<div class="task">
    <h4>7. Комбинирование</h4>
    <?php
    print_r(array_combine(['a', 'b', 'c'], [1, 2, 3]));
    ?>
</div>

<div class="task">
    <h4>8. Позиция '-'</h4>
    <?php
    echo array_search('-', ['a', '-', 'b', '-', 'c', '-', 'd']);
    ?>
</div>

<div class="task">
    <h4>9. Сортировки</h4>
    <?php
    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    asort($arr); print_r($arr);
    ksort($arr); print_r($arr);
    arsort($arr); print_r($arr);
    ?>
</div>

<div class="task">
    <h4>10. Сумма цифр</h4>
    <?php
    echo array_sum(str_split('1234567890'));
    ?>
</div>

<div class="task">
    <h4>11. Заполнение 'x'</h4>
    <?php
    print_r(array_fill(0, 10, 'x'));
    ?>
</div>

<div class="task">
    <h4>12. Схождение</h4>
    <?php
    print_r(array_intersect([1, 2, 3, 4, 5], [3, 4, 5, 6, 7]));
    ?>
</div>

</body>
</html>