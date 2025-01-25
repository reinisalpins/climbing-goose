<div class="py-4 border-b flex flex-col gap-2">
    <div class="flex items-center gap-2">
        <h1 class="uppercase font-bold">{{$comment->user->name}}</h1>
        <span>&bull;</span>
        <span class="text-sm">{{$comment->created_at->diffForHumans()}}</span>
    </div>
    <p>{{$comment->body}}</p>
    @if($comment->user_id === auth()->user()?->id)
        <form method="POST" action="{{route('comments.delete', ['comment_id' => $comment->id])}}">
            @method('DELETE')
            @csrf
            <button type="submit" class="underline underline-offset-2">Delete comment</button>
        </form>
    @endif
</div>
