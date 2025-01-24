<form method="POST" action="{{route('auth.register.store')}}" class="flex flex-col gap-4">
    @csrf
    @include('components.ui-elements.input', [
        'name' => 'email',
        'label' => 'Email',
        'type' => 'email'
    ])
    @include('components.ui-elements.input', [
        'name' => 'name',
        'label' => 'Name',
        'type' => 'text'
    ])
    @include('components.ui-elements.input', [
        'name' => 'password',
        'label' => 'Password',
        'type' => 'password'
    ])
    @include('components.ui-elements.input', [
        'name' => 'password_confirmation',
        'label' => 'Password confirmation',
        'type' => 'password'
    ])

    <button type="submit" class="bg-primary py-1.5 rounded-xl text-white">Register</button>
</form>
