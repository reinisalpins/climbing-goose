<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Repositories\CommentRepository;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCommentOwnership
{
    public function __construct(
        private readonly CommentRepository $commentRepository,
    ) {}

    public function handle(Request $request, Closure $next): Response
    {
        $commentId = (int) $request->route('comment_id');
        $comment = $this->commentRepository->getById($commentId);

        if ($comment->user_id !== auth()->id()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
