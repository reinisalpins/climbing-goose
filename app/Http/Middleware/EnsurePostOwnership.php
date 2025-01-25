<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Repositories\PostRepository;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsurePostOwnership
{
    public function __construct(
        private readonly PostRepository $postRepository,
    )
    {
    }

    public function handle(Request $request, Closure $next): Response
    {
        $postId = (int)$request->route('post_id');
        $post = $this->postRepository->getById($postId);

        if ($post->user_id !== auth()->id()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
