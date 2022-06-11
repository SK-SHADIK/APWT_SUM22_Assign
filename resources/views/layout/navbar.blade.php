    <nav>
        <div id="navbarNav">
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">Message</a>
            </li>
            <li>
              <a href="#">User List</a>
            </li>
          </ul>
          <a href="{{route('user.login')}}"><button type="button">Log Out</button></a>
        </div>
    </nav>
    @yield('content')
