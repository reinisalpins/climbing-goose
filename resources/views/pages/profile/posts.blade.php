@php
    /** @var $post \App\Models\Post */
@endphp

@extends('layouts.app')
@section('content')
    <div class="container py-6">
        <h1 class="font-bold text-2xl">Your posts ({{$postsCount}}):</h1>
        <div class="mt-4">
            <a href="{{route('profile.posts.create')}}" class="bg-primary text-white py-2 px-4 rounded-xl">Add post</a>
        </div>
        <ul class="mt-6">
            @foreach($posts as $post)
                <li class="border-b py-4 flex flex-col gap-2">
                    <h2 class="font-bold text-lg">{{$post->title}}</h2>
                    <span class="text-sm text-gray-600">{{ $post->created_at->toFormattedDateString() }}</span>
                    <p>{{$post->body}}</p>
                    <div class="flex gap-3">
                        <a class="underline underline-offset-2"
                           href="{{route('profile.posts.edit', ['post_id' => $post->id])}}">Edit</a>
                        <span>&bull;</span>
                        <form method="POST" action="{{route('posts.delete', ['post_id' => $post->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="underline underline-offset-2">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
