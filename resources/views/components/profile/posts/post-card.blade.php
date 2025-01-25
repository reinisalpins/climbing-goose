<li class="border p-3 rounded-2xl flex flex-col gap-2">
    <h2 class="font-bold text-lg">{{$post->title}}</h2>
    <span class="text-sm text-gray-600">{{ $post->created_at->toFormattedDateString() }}</span>
    <p>{{Str::limit($post->body, 150)}}</p>
    <div class="flex gap-3 mt-auto">
        <a class="underline underline-offset-2"
           href="{{route('profile.posts.edit', ['post_id' => $post->id])}}">Edit</a>
        <span class="text-gray-500">|</span>
        <form method="POST" action="{{route('posts.delete', ['post_id' => $post->id])}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="underline underline-offset-2">Delete</button>
        </form>
        <span class="text-gray-500">|</span>
        <a class="underline underline-offset-2"
           href="{{route('posts.show', ['post_id' => $post->id])}}">View</a>
    </div>
</li>
