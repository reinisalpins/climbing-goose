@props([
    'searchTerm' => null
])

<form class="flex w-full justify-center" method="GET" action="{{route('posts.search')}}">
    @include('components.ui-elements.input', ['value' => $searchTerm, 'name' => 'term', 'placeholder' => 'Search...', 'class' => 'w-[300px] md:w-[400px] border px-3 h-[50px] rounded-2xl'])
    <button type="submit"
            class="p-3 border w-[50px] h-[50px] rounded-2xl ml-1 bg-primary flex justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
    </button>
</form>
