@extends('layouts.app')
@section('content')
    <div class="container py-6">
        <h1 class="font-bold text-2xl">Edit post {{$post->id}}: </h1>
        @include('components.forms.posts.edit-post', ['categories' => $categories, 'post' => $post])
    </div>
@endsection
