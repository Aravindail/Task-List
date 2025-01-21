<!doctype html>
<html lang="ru">
	<head>
	  <meta charset="utf-8" />
	  <title></title>
	  <link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<header>Заголовок страницы</header>
		<nav>Меню навигации</nav>
		<aside>Боковая колонка SideBar</aside>
		<article>
            @isset($product)
                <h1>{{$product}}</h1>
            @endisset
            <div>
                @forelse($tasks as $task)
                    <div>
                        <div>{{$task->title}}</div>
                        <div>{{$task->description}}</div>

                    </div>
                @empty
                    <div>There are no tasks!</div>
                @endforelse
            </div>
		</article>
		<footer>Подвал сайта</footer>
	</body>
</html>
