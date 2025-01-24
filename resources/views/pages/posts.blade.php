@extends('layouts.app')

@section('content')
    <div class="py-6 border-b">
        <div class="container">
            @include('components.search-bar')
        </div>
    </div>
    <div class="container py-6">
        @include('components.posts.posts-list')
    </div>
@endsection
