<header class="" style="background-color: lightgoldenrodyellow;">
    <h1 class="p-2">Gallery Shop</h1>
    <nav class="nav p-2 d-flex justify-content-between">
            <div class="d-flex">
                @if (!Auth::check())
                <a href="/" class="px-2">Login</a>
                <a href="/register" class="px-2">Register</a>
                @else
                    @if (Auth::user()->id == "1")
                    <a href="/users" class="px-2">User</a>
                    @endif
                    <a href="/gallary" class="px-2">Gallary</a>
                    <a href="/albums" class="px-2">My Albums</a>
                    <a href="/logout" class="px-2">Logout</a>
                    @endif
            </div>
            @if (Auth::check())
                <a class="px-2">Lynnax</a>
            @endif
    </nav>
</header>
