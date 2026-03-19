<?php
$result = "";
if (isset($_POST['expression'])) {
    $expression = $_POST['expression'];
    
    $expression = preg_replace('/[^0-9\+\-\*\/\.]/', '', $expression);
    
    if ($expression !== "") {
        try {
            $result = @eval("return $expression;");
            if ($result === false || $result === null) {
                $result = "Ошибка";
            }
        } catch (Throwable $e) {
            $result = "Ошибка";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP Калькулятор</title>
    <style>
        body { 
            font-family: "Times New Roman", Times, serif; 
            background-color: #f4f4f4; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            padding: 40px 0;
            margin: 0; 
        }

        .card { 
            background: #fff; 
            padding: 20px; 
            border-radius: 12px; 
            text-align: center; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.1); 
            margin-bottom: 20px;
            width: 320px;
        }

        img { max-width: 100%; border-radius: 8px; }

        /* Стили калькулятора */
        .calc-box {
            background-color: #2c3e50;
            padding: 15px;
            border-radius: 15px;
            width: 280px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .display {
            width: 100%;
            height: 50px;
            background: #ecf0f1;
            border: none;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: right;
            padding: 10px;
            font-size: 20px;
            box-sizing: border-box;
            color: #333;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
        }

        .btn {
            padding: 15px 5px;
            background: #34495e;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn:hover { background: #4e6a85; }
        .btn-op { background: #f39c12; }
        .btn-res { background: #27ae60; grid-column: span 2; }
        .btn-clr { background: #c0392b; grid-column: span 2; }

        .btn-back { margin-top: 20px; color: #7a7a7a; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>

    <div class="card">
        <h3>Вход выполнен!</h3>
        <img src="https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExNHRreXByZzZueXByZzZueXByZzZueXByZzZueXByZzZueXByZyZjdD1n/kyLYXonQpkUsLYvIKa/giphy.gif" alt="Success">
    </div>

    <div class="calc-box">
        <form method="POST" id="calcForm">
            <input type="text" name="expression" id="screen" class="display" 
                   value="<?php echo ($result !== "") ? $result : ""; ?>" autocomplete="off">
            
            <div class="grid">
                <button type="button" class="btn btn-clr" onclick="document.getElementById('screen').value=''">C</button>
                <button type="button" class="btn btn-op" onclick="add('/')">/</button>
                <button type="button" class="btn btn-op" onclick="add('*')">*</button>

                <button type="button" class="btn" onclick="add('7')">7</button>
                <button type="button" class="btn" onclick="add('8')">8</button>
                <button type="button" class="btn" onclick="add('9')">9</button>
                <button type="button" class="btn btn-op" onclick="add('-')">-</button>

                <button type="button" class="btn" onclick="add('4')">4</button>
                <button type="button" class="btn" onclick="add('5')">5</button>
                <button type="button" class="btn" onclick="add('6')">6</button>
                <button type="button" class="btn btn-op" onclick="add('+')">+</button>

                <button type="button" class="btn" onclick="add('1')">1</button>
                <button type="button" class="btn" onclick="add('2')">2</button>
                <button type="button" class="btn" onclick="add('3')">3</button>
                <button type="submit" class="btn btn-res">=</button>

                <button type="button" class="btn" onclick="add('0')" style="grid-column: span 2;">0</button>
                <button type="button" class="btn" onclick="add('.')">.</button>
            </div>
        </form>
    </div>

    <a href="index.php" class="btn-back">← Назад к регистрации</a>

    <script>
        function add(char) {
            document.getElementById('screen').value += char;
        }
    </script>
</body>
</html>
