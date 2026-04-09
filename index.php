<?php
declare(strict_types=1);

class Page
{
    private string $name = "page";
    private string $template = "<div><p>Это главная страница</p></div>";

    public function render(): void
    {
        echo $this->template;
    }
}

class BookPage extends Page
{
    private string $name = "read";
    private string $template = '
        <div style="margin-top: 20px;">
            <h2>Чтение: Царёв город</h2>
            <embed src="caryov-gorod_RuLit_Me_403887.pdf" type="application/pdf" width="100%" height="600px" />
        </div>';

    public function render(): void
    {
        echo $this->template;
    }
}

class InfoPage extends Page
{
    private string $name = "info";
    private string $template = '
        <div class="book-info">
            <h2>Информация о книге</h2>
            <p><strong>Название:</strong> Царёв город</p>
            <p><strong>Автор:</strong> Крупняков Аркадий Степанович</p>
            <p><strong>Жанр:</strong> Историческая проза</p>
            <p><strong>Язык:</strong> русский</p>
            <p><strong>Год:</strong> 1984</p>
            <p><strong>Издатель:</strong> Марийское книжное издательство</p>
            <p><strong>Город:</strong> Йошкар-Ола</p>
            <hr>
            <p><small>Статус: <span class="status-badge">Закончена</span> | Добавил: Admin</small></p>
        </div>';

    public function render(): void
    {
        echo $this->template;
    }
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Библиотека - Лабораторная 14</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Библиотечная система</h1>

    <nav>
        <a href="?page=page">Главная</a>
        <a href="?page=read">Читать книгу</a>
        <a href="?page=info">Данные книги</a>
    </nav>

    <main>
        <?php
        $action = $_GET['page'] ?? 'page';

        switch ($action) {
            case 'read':
                $view = new BookPage();
                $view->render();
                break;
            case 'info':
                $view = new InfoPage();
                $view->render();
                break;
            case 'page':
            default:
                $view = new Page();
                $view->render();
                break;
        }
        ?>
    </main>

    <hr>
    <h4>Отладочная информация ($_GET):</h4>
    <pre><?php var_dump($_GET); ?></pre>

</body>
</html>