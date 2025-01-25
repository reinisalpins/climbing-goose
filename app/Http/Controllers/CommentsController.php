<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Comments\CreateCommentRequest;
use App\Http\Requests\Comments\DeleteCommentRequest;
use App\Repositories\CommentRepository;
use Illuminate\Http\RedirectResponse;

class CommentsController extends Controller
{
    public function __construct(
        private readonly CommentRepository $commentRepository
    )
    {
    }

    public function createComment(CreateCommentRequest $request): RedirectResponse
    {
        $this->commentRepository->createComment($request->getData());

        return redirect()->back()->with('success', 'Comment created.');
    }

    public function deleteComment(DeleteCommentRequest $request): RedirectResponse
    {
        $this->commentRepository->deleteComment($request->getCommentId());

        return redirect()->back()->with('success', 'Comment deleted.');
    }
}
