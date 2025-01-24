<form class="flex flex-col gap-4" method="POST" action="{{route('auth.login.store')}}">
    @csrf
    <x-ui-elements.input name="email" label="Email" type="email"/>
    <x-ui-elements.input name="password" label="Password" type="password"/>

    <button type="submit" class="bg-primary py-1.5 rounded-xl text-white">Login</button>
</form>
