@props(['categories' => []])

<form class="flex flex-col mt-6 gap-6" method="POST" action="{{ route('posts.store') }}">
    @csrf
    @include('components.ui-elements.input', [
        'name' => 'title',
        'type' => 'text',
        'label' => 'Title'
    ])
    @include('components.ui-elements.select', [
        'name' => 'categories',
        'label' => 'Categories',
        'options' => $categories,
    ])
    @include('components.ui-elements.textarea', [
        'name' => 'body',
        'label' => 'Body'
    ])
    <div>
        <button class="bg-primary text-white py-2 px-4 rounded-xl" type="submit">Save post</button>
    </div>
</form>
