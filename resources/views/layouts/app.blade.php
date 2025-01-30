<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<header>Заголовок страницы</header>
<nav>Меню навигации</nav>
<nav aria-label="Breadcrumb" class="breadcrumb">
    <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/tasks">Tasks</a></li>
    </ol>
</nav>
<aside>Боковая колонка SideBar</aside>
<article>
    <h1>@yield('title')</h1>
    <div>@yield('content')</div>

</article>
<footer>Подвал сайта</footer>
</body>
</html>
