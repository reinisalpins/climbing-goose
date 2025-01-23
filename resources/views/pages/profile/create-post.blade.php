@extends('layouts.app')
@section('content')
    <div class="container py-6">
        <h1 class="font-bold text-2xl">Create post</h1>
        @include('components.forms.posts.post-form')
    </div>
@endsection
