<form class="border-b pb-4" method="POST" action="{{route('posts.comments.store', ['post_id' => $post->id])}}">
    @csrf
    @include('components.ui-elements.textarea', ['name' => 'body', 'class' => 'min-h-[80px]', 'placeholder' => 'Add your comment...'])
    <button type="submit" class="bg-primary text-white py-2 px-4 rounded-xl mt-4">Submit comment</button>
</form>
