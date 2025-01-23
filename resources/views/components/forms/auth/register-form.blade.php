<form method="POST" action="{{route('auth.register.store')}}" class="flex flex-col gap-4">
    @csrf

    <x-ui-elements.input name="email" label="Email" type="email"/>
    <x-ui-elements.input name="name" label="Name" type="text"/>
    <x-ui-elements.input name="password" label="Password" type="password"/>
    <x-ui-elements.input name="password_confirmation" label="Password confirmation" type="password"/>

    <button type="submit" class="bg-primary py-1.5 rounded-xl text-white">Register</button>
</form>
