    <div>
        <a href="{{route('welcome')}}"><button type="button">Welcome</button></a>
        <a href="{{route('user.login')}}"><button type="button">Sign In</button></a>
        <a href="{{route('user.registration')}}"><button type="button">Sign Up</button></a>
    </div>
    @yield('content')
