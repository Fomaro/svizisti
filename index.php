<?php
// --- ЛОГИКА ОБРАБОТКИ (PHP) ---
$message = ""; // Переменная для вывода уведомлений

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Простая валидация
    if (empty($name) || empty($email) || empty($password)) {
        $message = "<p style='color:red;'>Пожалуйста, заполните все поля.</p>";
    } elseif ($password !== $confirm_password) {
        $message = "<p style='color:red;'>Пароли не совпадают!</p>";
    } else {
        // Здесь можно добавить сохранение в базу данных
        $message = "<p style='color:green;'>Регистрация прошла успешно для $name!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        /* --- СТИЛИ (CSS) --- */
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .reg-card {
            background: #fff;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            border: 1px solid #ddd;
        }

        h2 {
            text-align: center;
            color: #555;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: normal;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 12px; /* Округлая форма как на картинке */
            font-size: 18px;
            box-sizing: border-box;
            color: #666;
        }

        input::placeholder {
            color: #bbb;
        }

        input:focus {
            outline: none;
            border-color: #000;
        }

        .btn-submit {
            width: 100%;
            background-color: #7a7a7a;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 12px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background-color: #555;
        }

        .agreement {
            margin-top: 20px;
            font-size: 13px;
            line-height: 1.4;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .agreement a {
            color: #5dade2;
            text-decoration: underline;
        }

        .status-msg {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="reg-card">
    <h2>Регистрация</h2>

    <div class="status-msg">
        <?php echo $message; ?>
    </div>
    
    <form action="" method="POST">
        <div class="form-group">
            <label>Имя:</label>
            <input type="text" name="username" placeholder="Введите имя" required>
        </div>

        <div class="form-group">
            <label>Почта:</label>
            <input type="email" name="email" placeholder="name@example.ru" required>
        </div>

        <div class="form-group">
            <label>Пароль:</label>
            <input type="password" name="password" placeholder="Введите пароль" required>
        </div>

        <div class="form-group">
            <label>Подтвердите пароль:</label>
            <input type="password" name="confirm_password" placeholder="Повторите пароль" required>
        </div>

        <button type="submit" class="btn-submit">Зарегистрироваться</button>

        <div class="agreement">
            <input type="checkbox" name="terms" checked required>
            <label style="font-weight: normal; font-size: 13px;">
                Создавая учетную запись, вы соглашаетесь с нашим <br>
                <a href="#">Условием и конфиденциальностью</a>.
            </label>
        </div>
    </form>
</div>

</body>
</html>
