<div>
    <div class="header_top container_ch" >
        <div class="header_left_part">
            <a href="{{route('/')}}"><img class="logo_img" src="img/logo.png" alt="logo"></a>
            <ul class="header_left_part_links">
                <a href="{{route('/')}}"><li style="margin-right: 32px">О нас</li></a>
                <a href="{{route('products')}}"><li style="margin-right: 32px">Все услуги</li></a>
                <a href="#"><li style="margin-right: 32px">Контакты</li></a>
            </ul>
        </div>
        <div class="header_right_part">
            @if(!\Illuminate\Support\Facades\Auth::user())
                <a onclick="showModal()" href=""><div class="button">вход</div></a>
            @else
                <a href="{{route('home')}}"><i class="far fa-user header_user"></i></a
            @endif
        </div>
    </div>
</div>
