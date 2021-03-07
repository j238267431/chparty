<div>
    <div id="message_answer" class="massage_answer" style="overflow-y: auto">
        @forelse($messages as $message)
            <p class="font-weight-bold">От {{ $message->from_user_id }} к {{ $message->to_user_id }}</p>
            <p>{{ $message->message}}</p>
        @empty
            <p>Нет сообщений</p>
        @endforelse
    </div>
    <textarea name="message" id="message_sender" cols="30" rows="10"></textarea>
    <div onclick="sendMessage()">отправить</div>
</div>
