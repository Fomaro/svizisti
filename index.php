<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="reg-card">
        <h2>Регистрация</h2>
        <form action="action.php" method="POST">
            <label>Имя:</label>
            <input type="text" name="username" placeholder="Введите имя" required>

            <label>Почта:</label>
            <input type="email" name="email" placeholder="name@example.ru" required>

            <label>Пароль:</label>
            <input type="password" name="password" placeholder="Введите пароль" required>

            <label>Подтвердите пароль:</label>
            <input type="password" name="confirm_password" placeholder="Повторите пароль" required>

            <button type="submit" class="btn-submit">Зарегистрироваться</button>

            <div class="agreement">
                <input type="checkbox" checked required>
                <span>Создавая учетную запись, вы соглашаетесь с нашим <a href="#">Условием</a>.</span>
            </div>

            <div class="login-link">
                Уже зарегистрированы? <a href="#">Войти</a>
            </div>
        </form>
    </div>
</body>
</html>
