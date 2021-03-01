@extends('layouts.main')
@section('content')
        <header>
            <div class="header_bottom">
                <div class="header_bottom_left">
                    <ul class="header_left_part_links">
                        <!--                    <input class="bottom_header_input" type="text" placeholder="Что празднуем?">-->
                        <a href="#"><li class="bottom_header_li">Что празднуем?</li></a>
                        <div class="line_first"></div>
                        <!--                    <input class="bottom_header_input" type="text" placeholder="Когда?">-->
                        <a href="#"><li class="bottom_header_li">Когда?</li></a>
                        <div class="line_second"></div>
                        <a href="#"><li class="bottom_header_li">Выберите услуги<i style="margin-left: 12px" class="fas fa-caret-down"></i></li></a>
                    </ul>
                </div>
                <a style="margin: 4px 3px;" href="#"><div class="button_second">Выбрать программу</div></a>
            </div>
        </header>
        <sector class="sector_one">
            <div>
                <div class="sector_one_header">Маркетплейс <br> услуг и товаров для детских праздников</div>
                <div class="sector_one_text">Здесь важно сказать о том, кто мы такие, какую боль и задачу решает наш сервис и в чём его уникальность. Может быть, девиз/кредо или
                    что-то такое, нужно подумать, чем зацепить.</div>
            </div>
            <div><img  class="picture_carousel" src="img/smiling-girl-with-birthday-cake.png" alt="girl"></div>
        </sector>
        <div class="how_it_works">Как это работает</div>
        <sector class="sector_two">
            <div class="sector_two_block">
                <div>
                    <div ><img class="sector_two_ellipse_one" src="img/Ellipse%206.png" alt=""></div>
                    <div class="sector_two_header">Вы выбираете
                        услуги и товары</div>
                    <div class="sector_two_text">Более подробный текст, раскрывающий суть и смысл данного действия.</div>
                </div>
                <div>
                    <div ><img class="sector_two_ellipse_one" src="img/Ellipse%206.png" alt=""></div>
                    <div class="sector_two_header">Мы подбираем
                        исполнителей</div>
                    <div class="sector_two_text">Более подробный текст, раскрывающий суть и смысл данного действия.</div>
                </div>
                <div>
                    <div ><img class="sector_two_ellipse_one" src="img/Ellipse%206.png" alt=""></div>
                    <div class="sector_two_header">Вы получаете
                        программу</div>
                    <div class="sector_two_text">Более подробный текст, раскрывающий суть и смысл данного действия.</div>
                </div>
            </div>
            <div class="sector_two_right">
                <div class="sector_two_ad"><span style="text-transform: uppercase">реклама</span><br>
                    автомотически слайдшоу</div>
                <div class="sector_two_ad"><span style="text-transform: uppercase">реклама</span><br>
                    автомотически слайдшоу</div>
            </div>
        </sector>
        <div class="popular_services">Популярные услуги</div>
        <sector class="sector_three">
            <a href="#">
                <div class="sector_three_block">
                    <div><img src="img/Image%20Placeholder.png" alt=""></div>
                    <div class="sector_three_header">Аниматоры</div>
                    <div class="sector_three_text">Мультгерои, сказки,
                        супергерои, игрушки и звери.</div>
                </div>
            </a>
            <a href="#">
                <div class="sector_three_block">
                    <div><img src="img/Image%20Placeholder.png" alt=""></div>
                    <div class="sector_three_header">Локации</div>
                    <div class="sector_three_text">Мультгерои, сказки,
                        супергерои, игрушки и звери.</div>
                </div>
            </a>
            <a href="#">
                <div class="sector_three_block">
                    <div><img src="img/Image%20Placeholder.png" alt=""></div>
                    <div class="sector_three_header">Угощения</div>
                    <div class="sector_three_text">Мультгерои, сказки,
                        супергерои, игрушки и звери.</div>
                </div>
            </a>
            <a href="#">
                <div class="sector_three_block">
                    <div><img src="img/Image%20Placeholder.png" alt=""></div>
                    <div class="sector_three_header">Мастерклассы</div>
                    <div class="sector_three_text">Мультгерои, сказки,
                        супергерои, игрушки и звери.</div>
                </div>
            </a>

        </sector>
        <a href="#"><div class="button">все услуги</div></a>
        <footer>
            <div class="footer_top">
                <span class="footer_top_text">реклама</span>
            </div>
        </footer>
@stop
