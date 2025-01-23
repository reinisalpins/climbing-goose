<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\AuthRepository;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthManager    $authManager,
        private readonly AuthRepository $authRepository,
    )
    {
    }

    public function showLogin(): View
    {
        return view('pages.login');
    }

    public function showRegister(): View
    {
        return view('pages.register');
    }

    public function login(LoginRequest $request)
    {
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = $this->authRepository->createUser($request->getData());

        $this->authManager->login($user);

        return redirect()->route('profile.posts.index')->with('success', 'Registration successful!');
    }

    public function logout(Request $request): RedirectResponse
    {
        $this->authManager->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('posts.index');
    }
}
