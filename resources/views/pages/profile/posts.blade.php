@php
    use Illuminate\Support\Str;
    use App\Models\Post;

    /** @var $post Post */
@endphp

@extends('layouts.app')
@section('content')
    <div class="container py-6">
        <h1 class="font-bold text-2xl">Your posts ({{$postsCount}}):</h1>
        <div class="mt-4">
            <a href="{{route('profile.posts.create')}}" class="bg-primary text-white py-2 px-4 rounded-xl">Add post</a>
        </div>
        <ul class="mt-6 flex flex-col gap-4">
            @forelse($posts as $post)
                @include('components.profile.posts.post-card', ['post' => $post])
            @empty
                <p class="mt-4">You have no posts...</p>
            @endforelse
        </ul>
    </div>
@endsection
