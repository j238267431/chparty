@extends('layouts.main')

@section('content')
    <img style="position:absolute; z-index: -100;" src="{{asset('img/decor/home/1.png')}}" alt="">
    <img style="position:absolute; top: 32px; right: 0; z-index: -100" src="{{asset('img/decor/home/2.png')}}" alt="">
    <div class="container_ch">
<div class="home_header">Кабинет партнера</div>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
    <div class="home_main">
        <div class="home_left">
            <ul class="home_ul">
                <a href="#"><li style="width: 100px" class="home_li">Профиль</li></a>
                <a href="{{route('proposal')}}"><li style="width: 240px" class="home_li">Создать предложение</li></a>
                <a onclick="getMessageScreen()" href="{{route('messages')}}"><li style="width: 130px" class="home_li">Сообщения</li></a>
                <a href="#"><li style="width: 90px" class="home_li">Отзывы</li></a>
                <a  href=""
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <li style="width: 75px" class="home_li">Выйти</li>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
        <div id="home_screens" class="home_middle">
            <form  style="margin-right: 133px" action="POST" action="">
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
        <div class="rate">рейтинг</div>
        <div></div>
    </div>
</div>
</div>
@endsection
