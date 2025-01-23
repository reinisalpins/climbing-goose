<header class="bg-white">
    <div class="border-b py-4">
        <div class="container flex justify-between items-center">
            <a href="{{route('posts.index')}}" class="text-2xl font-bold uppercase">Blog</a>
            @guest
                <a class="bg-primary text-white py-2 px-4 rounded-xl" href="{{route('auth.login')}}">Login</a>
            @endguest
            @auth
                <div class="flex gap-3 items-center">
                    <a href="{{route('profile.posts.index')}}" class="bg-primary text-white py-2 px-4 rounded-xl">Manage posts</a>
                    <form method="POST" action="{{route('auth.logout')}}">
                        @csrf
                        <button class="bg-primary text-white py-2 px-4 rounded-xl" type="submit">Logout</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</header>
