<div class="col-lg-2 border my-2 py-2">
    @auth
        <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
        <a href="{{ route('posts.create') }}">Create Post</a>

        <form action="{{ route('logout') }}" method="POST" class="w-50">
            @csrf
            <button type="submit" class="btn btn-dark btn-lg ml-2">Logout</button>
        </form>

    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif
    @endauth

</div>
