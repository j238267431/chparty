<div class="container_ch">
    <div class="header_top">
        <div class="header_left_part">
            <img class="logo_img" src="img/logo.png" alt="logo">
            <ul class="header_left_part_links">
                <a href="#"><li style="margin-right: 32px">О нас</li></a>
                <a href="#"><li style="margin-right: 32px">Все услуги</li></a>
                <a href="#"><li style="margin-right: 32px">Контакты</li></a>
            </ul>
        </div>
        <div class="header_right_part">
            <a href="#"><div class="button_partner">Кабинет партнера</div></a>
            @if(!\Illuminate\Support\Facades\Auth::user())
                <a onclick="showModal()" href="#"><div class="button">вход</div></a>
            @else
                <a href="{{route('home')}}"><div class="button">Личный кабинет</div></a
            @endif
        </div>
    </div>
</div>

