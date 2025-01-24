<?php /** @var $post \App\Models\Post */ ?>

<form class="flex flex-col mt-6 gap-6" method="POST" action="{{ route('posts.update', ['post_id' => $post->id]) }}">
    @csrf
    @method('PATCH')
    @include('components.ui-elements.input', [
        'name' => 'title',
        'type' => 'text',
        'label' => 'Title',
        'value' => $post->title
    ])
    @include('components.ui-elements.select', [
        'name' => 'categories',
        'label' => 'Categories',
        'options' => $categories,
        'selected' => $post->categories->pluck('id')->toArray()
    ])
    @include('components.ui-elements.textarea', [
        'name' => 'body',
        'label' => 'Body',
        'value' => $post->body
    ])
    <div>
        <button class="bg-primary text-white py-2 px-4 rounded-xl" type="submit">Update post</button>
    </div>
</form>
