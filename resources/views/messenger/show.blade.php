@extends('layouts.master')

@section('content')
    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>
        <div  id="message_body">
            @each('messenger.partials.messages', $thread->messages, 'message')
        </div>
        @include('messenger.partials.form-message')
    </div>
@stop
