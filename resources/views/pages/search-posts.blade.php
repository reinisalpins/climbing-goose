@extends('layouts.app')
@section('content')
    <div class="py-6 border-b">
        <div class="container">
            @include('components.search-bar', [
            'searchTerm' => $searchTerm
            ])
        </div>
    </div>
    <div class="container py-6">
        <h1 class="font-bold text-xl mb-6">Search results for: {{$searchTerm}}</h1>
        @include('components.posts.posts-list', ['posts' => $posts])
    </div>
@endsection
t
