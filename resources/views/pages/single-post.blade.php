@extends('layouts.app')
@section('content')
    <div class="container py-6 flex flex-col gap-6">
        <h1 class="text-2xl font-bold">{{$post->title}}</h1>
        <span class="text-sm text-gray-600">{{$post->created_at->toFormattedDayDateString()}}</span>
        <div class="flex flex-wrap gap-2">
            @foreach($post->categories as $category)
                @include('components.posts.post-category-chip', ['name' => $category->name])
            @endforeach
        </div>
        <p>{{$post->body}}</p>
        <hr/>
        <div>
            <h2 class="text-xl font-bold mb-4">Comments ({{$post->comments_count}}):</h2>
            @auth
                @include('components.forms.posts.add-comment-form', ['post' => $post])
            @endauth
            @guest
                <div class="mt-4 border-b pb-4">
                    <a class="underline underline-offset-2" href="{{route('auth.login')}}">Login to comment on this
                        post</a>
                </div>
            @endguest
            <div class="flex flex-col">
                @forelse($post->comments as $comment)
                    @include('components.posts.post-comment-card', ['comment' => $comment])
                @empty
                    <p class="mt-4">Be first to comment...</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
