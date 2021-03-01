<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/529067b2e2.js" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/message.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

</head>
<body>

    <div id="app">
        <x-header/>
        <x-art/>
        <main class="py-4">

            @yield('content')
            <x-modal></x-modal>

        </main>
        <x-footer/>
    </div>

</body>
</html>

@push('js')
<script>
function showModal() {
    document.getElementById('modal_back').classList.remove('modal_display_none');
    document.getElementById('modal_register').classList.remove('modal_display_none');
}
function closeModal(){
    document.getElementById('modal_back').classList.add('modal_display_none');
    document.getElementById('modal_register').classList.add('modal_display_none');
}
function getMessageScreen(){
    // var homeScreens = $('#home_screens');
    event.preventDefault();
    $.ajax({
        url: '/message',
        data: {},
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function (data)
        {
            $('#home_screens').html(data)
        },
        error: function (msg)
        {
            console.log(msg)
        }

    })
}
function sendMessage(){
 var message = $('#message_sender').val();
 $.ajax({
     url: '/message/send',
     data: {message: message},
     headers: {
         'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
     },
     success: function (data)
     {
         $('#message_answer').html(data)
     },
     error: function (msg)
     {
         console.log(msg)
     }
 })
}
</script>
@endpush
@stack('js')
