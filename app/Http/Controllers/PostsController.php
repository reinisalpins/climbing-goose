<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

class PostsController extends Controller
{
    public function showUserPosts(): View
    {
        return view('pages.profile.posts');
    }
}
