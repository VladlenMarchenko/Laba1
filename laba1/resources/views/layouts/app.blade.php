<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/about">О нас</a></li>
                <li><a href="/contact">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>ФИО: Марченко Владлен Витальевич, Группа: 231-321</p>
    </footer>
</body>
</html>