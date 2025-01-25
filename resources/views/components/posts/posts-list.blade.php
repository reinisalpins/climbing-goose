<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
    @forelse ($posts as $post)
    @include('components.posts.post-card', ['post' => $post])
    @empty
        <p class="mt-4">No posts found...</p>
    @endforelse
</div>
