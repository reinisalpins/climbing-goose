@extends('layouts.app')
@section('content')
    <div class="container flex flex-col items-center justify-center mt-10">
        <h1 class="font-semibold text-2xl mb-6">Login</h1>
        <div class="max-w-[500px] w-full">
            @include('components.forms.auth.login-form')
        </div>
        <p class="mt-6">Don't have an account? <a class="underline" href="{{route('auth.register')}}">Register</a></p>
    </div>
@endsection
