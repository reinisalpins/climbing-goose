@extends('layouts.app')
@section('content')
    <div class="container py-6">
        <h1 class="font-bold text-2xl">Your posts (10):</h1>
        <div class="mt-4">
            <a href="/profile/posts/create" class="bg-primary text-white py-2 px-4 rounded-xl">Add post</a>
        </div>
        <ul class="mt-6">
            <li class="border-b py-4 flex flex-col gap-2">
                <h2 class="font-bold text-lg">Where can I get some?</h2>
                <span class="text-sm text-gray-600">2018. gada 26. nov</span>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout...</p>
                <a class="underline underline-offset-2" href="/profile/posts/1/edit">Edit</a>
            </li>
        </ul>
    </div>
@endsection
