@extends('layouts.app')

@section('content')
    <div class="py-6 border-b">
        <div class="container">
            @include('components.search-bar')
        </div>
    </div>
    <div class="container py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            @include('components.posts.post-card')
            @include('components.posts.post-card')
            @include('components.posts.post-card')
            @include('components.posts.post-card')
            @include('components.posts.post-card')
        </div>
    </div>
@endsection
