@extends('layouts.main')
@section('content')

    <div class="container_ch">
        <h1>Страница создания предложений</h1>
        <div class="proposal_block_image">
            <div>
                <form action="{{route('image.store')}}" method="post" id="myform" enctype="multipart/form-data">
                    @csrf
                    <p><label id="mylabel"><input name="image" id="myfile" type="file">@if(!session('url'))загрузить фото@else<img class="proposal_image" src="{{\Illuminate\Support\Facades\Storage::disk('uploads')->url(session('url'))}}" alt="">@endif</label></p>
                </form>
            </div>
        </div>
        <form name=loadavatar class="proposal_form" action="{{route('proposal.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="image" value="{{session('url')}}">
            <label for="proposal_text"></label>
            <div><textarea placeholder="расскажите о вашем предложении. Не забудьте указать цену." name="description" id="proposal_text" cols="80" rows="3"></textarea></div>
            <select name="category" id="">
                <option value="1">торты</option>
                <option value="2">аниматоры</option>
            </select>
            <div><label for="proposal_price"></label></div>
            <div><input name="price" id="proposal_price" type="number" placeholder="цена за программу"></div>
            <input style="margin-top: 32px" class="button" type="submit" value="Сохранить">
        </form>
    </div>
@stop
