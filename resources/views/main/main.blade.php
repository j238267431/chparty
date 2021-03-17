@extends('layouts.main')
@section('content')
    @include('components.art')

<div class="container_ch">
    <sector class="sector_one">
        <div>
            <div class="sector_one_header">Маркетплейс <br> услуг и товаров для детских праздников</div>
            <div class="sector_one_text">Здесь важно сказать о том, кто мы такие, какую боль и задачу решает наш сервис и в чём его уникальность. Может быть, девиз/кредо или
                что-то такое, нужно подумать, чем зацепить.</div>
        </div>
        <div class="main_carousel">
            @include('carousel')
        </div>
    </sector>
    <div class="popular_services">Популярные услуги</div>
    <sector class="sector_three">
        <a href="#">
            <div class="sector_three_block">
                <div><img src="{{asset('img/popular/balloon.jpg')}}" alt=""></div>
                <div class="sector_three_header">Аниматоры</div>
                <div class="sector_three_text">Мультгерои, сказки,
                    супергерои, игрушки и звери.</div>
            </div>
        </a>
        <a href="#">
            <div class="sector_three_block">
                <div><img src="{{asset('img/popular/camp.jpg')}}" alt=""></div>
                <div class="sector_three_header">Локации</div>
                <div class="sector_three_text">Мультгерои, сказки,
                    супергерои, игрушки и звери.</div>
            </div>
        </a>
        <a href="#">
            <div class="sector_three_block">
                <div><img src="{{asset('img/popular/cake.jpg')}}" alt=""></div>
                <div class="sector_three_header">Угощения</div>
                <div class="sector_three_text">Мультгерои, сказки,
                    супергерои, игрушки и звери.</div>
            </div>
        </a>
        <a href="#">
            <div class="sector_three_block">
                <div><img src="{{asset('img/popular/pencil.jpg')}}" alt=""></div>
                <div class="sector_three_header">Мастерклассы</div>
                <div class="sector_three_text">Мультгерои, сказки,
                    супергерои, игрушки и звери.</div>
            </div>
        </a>

    </sector>
    <a href="#"><div class="button">все услуги</div></a>
    <div class="how_it_works">Мы в социальных сетях</div>
    <sector class="sector_two">
        <div class="sector_two_block">
            <div class="vk_block">
                <div class="top_block_ad"><img src="{{asset('img/social/vk.png')}}" alt="vk"></div>
                <div class="middle_block_ad">
                    <div><span>Опрос:</span></div>
                    <div><span>поиск товаров и услуг
                        для детских праздников</span></div>
                    <div><img src="{{asset('img/social/1.png')}}" alt=""></div>
                </div>
                <a href="#"><div class="bottom_block_ad">Пройти опрос</div></a>
            </div>
            <div class="fb_block">
                <div style="background: #375A9E" class="top_block_ad"><img src="{{asset('img/social/fb.png')}}" alt=""></div>
                <div class="middle_block_ad">
                    <div><span>Украшаем дом:</span></div>
                    <div><span>
                            что нужно для праздника,
                            если он - в квартире
                        </span></div>
                    <div><img src="{{asset('img/social/2.png')}}" alt=""></div>
                </div>
                <a href="#"><div style="background: #375A9E" class="bottom_block_ad">Открыть публикацию</div></a>
            </div>
            <div class="social_block">
                <div style="background: linear-gradient(91.67deg, #495ED1 6.37%, #A31DCC 40.57%, #FE365C 71.01%, #FFBF2D 96.3%);" class="top_block_ad"></div>
                <div class="middle_block_ad">
                    <div><span>Готовим вместе:</span></div>
                    <div><span>
                            как приготовить угощенье для гостей за час
                        </span></div>
                    <div><img src="{{asset('img/social/3.png')}}" alt=""></div>
                </div>
                <a href="#"><div style="background: linear-gradient(91.67deg, #495ED1 6.37%, #A31DCC 40.57%, #FE365C 71.01%, #FFBF2D 96.3%);" class="bottom_block_ad">Перейти в приложение</div></a>
            </div>
        </div>
        <div class="sector_two_right">
            <div class="sector_two_ad"><span style="text-transform: uppercase">реклама</span><br>
                автомотически слайдшоу</div>
            <div class="sector_two_ad"><span style="text-transform: uppercase">реклама</span><br>
                автомотически слайдшоу</div>
        </div>
    </sector>
    <footer>
        <div class="footer_top">
            <span class="footer_top_text">реклама</span>
        </div>
    </footer>
</div>
@stop
