@extends('layouts.app')
@section('content')
    <div class="container flex flex-col items-center justify-center mt-10">
        <h1 class="font-semibold text-2xl mb-6">Register</h1>
        <div class="max-w-[500px] w-full">
            @include('components.forms.auth.register-form')
        </div>
        <p class="mt-6">Already have an account? <a class="underline" href="/login">Login</a></p>
    </div>
@endsection
