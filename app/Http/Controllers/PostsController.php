<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\DeletePostRequest;
use App\Http\Requests\Posts\ShowEditPostFormRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostsController extends Controller
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
        private readonly PostRepository     $postRepository
    )
    {
    }

    public function showCreatePostForm(): View
    {
        $categories = $this->categoryRepository
            ->getAll()
            ->pluck('name', 'id');

        return view('pages.profile.create-post', [
            'categories' => $categories,
        ]);
    }

    public function showEditPostForm(ShowEditPostFormRequest $request): View
    {
        $post = $this->postRepository->getById($request->getPostId());
        $categories = $this->categoryRepository
            ->getAll()
            ->pluck('name', 'id');

        return view('pages.profile.edit-post', [
            'categories' => $categories,
            'post' => $post,
        ]);
    }

    public function showUserPosts(Request $request): View
    {
        $userPosts = $this->postRepository->getUserPosts($request->user());
        $userPostsCount = $userPosts->count();

        return view('pages.profile.posts', [
            'posts' => $userPosts,
            'postsCount' => $userPostsCount
        ]);
    }

    public function createPost(CreatePostRequest $request): RedirectResponse
    {
        $this->postRepository->createPost($request->getData());

        return redirect()
            ->route('profile.posts.index')
            ->with('success', 'Post created.');
    }

    public function updatePost(UpdatePostRequest $request): RedirectResponse
    {
        $post = $this->postRepository->updatePost($request->getData());

        return redirect()
            ->route('profile.posts.edit', ['post_id' => $post->id])
            ->with('success', 'Post updated.');
    }

    public function deletePost(DeletePostRequest $request): RedirectResponse
    {
        $this->postRepository->deletePost($request->getPostId());

        return redirect()
            ->route('profile.posts.index')
            ->with('success', 'Post deleted.');
    }

    public function showPost(): View
    {


        return view('pages.single-post');
    }
}
