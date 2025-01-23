@extends('layouts.app', ['hideSearch' => true])
@section('content')
    <div class="container py-6 flex flex-col gap-6">
        <h1 class="text-2xl font-bold">What is Lorem Ipsum?</h1>
        <span class="text-sm text-gray-600">2018. gada 26. nov</span>
        <div class="flex flex-wrap gap-2">
            @include('components.posts.post-category-chip')
            @include('components.posts.post-category-chip')
            @include('components.posts.post-category-chip')
            @include('components.posts.post-category-chip')
            @include('components.posts.post-category-chip')
            @include('components.posts.post-category-chip')
        </div>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
            literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
            Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
            Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable
            source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
            of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
            during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
            section 1.10.32.
            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
            1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
            original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        <hr/>
        <div>
            <h2 class="text-xl font-bold mb-4">Comments (0):</h2>
            @include('components.forms.posts.add-comment-form')

{{--            <div class="mt-4 border-b pb-4">--}}
{{--                <a class="underline underline-offset-2" href="/login">Login to comment on this post</a>--}}
{{--            </div>--}}

            <div class="flex flex-col">
                @include('components.posts.post-comment-card')
                @include('components.posts.post-comment-card')
                @include('components.posts.post-comment-card')
            </div>
        </div>
    </div>
@endsection
