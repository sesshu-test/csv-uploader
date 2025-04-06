@extends('layouts.app')

@section('title', '投稿一覧')
@section('content')
    <h1 class="text-2xl font-bold mb-4">投稿一覧</h1>

    <ul class="mb-4">
        @foreach ($posts as $post)
            <li class="mb-2">
                <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="text-blue-600 hover:underline">
                  {{ $post->user->name }}
                  {{ $post->content }}
                  {{ $post->created_at }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links('vendor/pagination/posts') }}
@endsection