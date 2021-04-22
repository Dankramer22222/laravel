@extends('layout')
@section('title')Главная страница @endsection
@section('main content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Как поймать льва в пустыне?</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        body { margin: 0; }
        header {
            display: block;
            background: #00b0d8 url(https://infanoj.ru/upload/resize_cache/uf/8a3/480_720_1/8a302cade180850337ac01e36d9c54ae.jpeg) repeat-x;
            /* Градиент */
        }
        .header-bg {
            background: url(https://infanoj.ru/upload/resize_cache/uf/8a3/480_720_1/8a302cade180850337ac01e36d9c54ae.jpeg) repeat-x center bottom;
            /* Животные */
            height: 405px; /* Высота шапки */
            text-align: center; /* Выравнивание по центру */
        }
        .header-bg img {
            position: relative; /* Относительное позиционирование */
            top: 40px; /* Сдвигаем картинку вниз */
        }
    </style>
</head>
<body>
<header>
    <div class="header-bg">
        <img src="images/header-title.png" alt="Как поймать льва в пустыне"
             width="456" height="166">
    </div>
</header>
</body>
</html>
    @endsection
