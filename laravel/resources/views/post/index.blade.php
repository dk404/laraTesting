@extends('sht')

@section('content')
    <ul>
        @foreach($posts as $post)
        <li>
            Заголовок: {{$post->title}} <br>
            уникальный url: {{$post->slug}} <br>
            Опубликованно в : {{$post->published_at}} <br>
            Текст: {!! $post->content !!} <br>
        </li>
        @endforeach

    </ul>
@stop