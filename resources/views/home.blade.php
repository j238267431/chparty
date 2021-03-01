@extends('layouts.main')

@section('content')
<div class="home_header">Мой кабинет</div>
    <div class="home_main">
        <div class="home_left">
            <ul class="home_ul">
                <a href="#"><li style="width: 100px" class="home_li">Профиль</li></a>
                <a href="#"><li style="width: 240px" class="home_li">Создать предложение</li></a>
                <a onclick="getMessageScreen()" href=""><li style="width: 130px" class="home_li">Сообщения</li></a>
                <a href="#"><li style="width: 90px" class="home_li">Отзывы</li></a>
                <a href="#"><li style="width: 75px" class="home_li">Выйти</li></a>
            </ul>
        </div>
        <div id="home_screens" class="home_middle">
            <form action="POST" action="">
                <div><input class="home_input" type="text" placeholder="Имя / Название"></div>
                <div><input class="home_input" type="text" placeholder="Категория"></div>
                <div><input class="home_input" type="text" placeholder="Стоимость"></div>
                <div><input class="home_input" type="text" placeholder="Электронная почта"></div>
                <div><input class="home_input" type="text" placeholder="Пароль"></div>
                <input id="remember" type="checkbox">
                <label for="remember">Установить пароль и запомнить меня</label>
                <div><button class="home_button" type="submit">Сохранить</button></div>
            </form>
        </div>
    <div>
        <div class="home_right"><img src="{{asset('img/Ellipse9.png')}}" alt=""></div>
        <div>рейтинг</div>
        <div></div>
    </div>
</div>
@endsection
