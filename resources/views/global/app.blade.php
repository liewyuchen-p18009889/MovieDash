<body>
    <div id="app">
        <div class="container-fluid" style="background: #8860D0;" id="header">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5 d-flex justify-content-start align-items-center">
                    <a href="{{ url('home') }}" class="text-decoration-none">
                        <h1 class="text-light" style="margin: 20px 0;">Movie Dash</h1>
                    </a>
                </div>
                <div class="col-5 d-flex justify-content-end align-items-center">
                    <!-- {{-- @if(session()->has('loggedUser')) --}} -->
                    <!-- @if(Session::has('loggedUser')) -->
                    <div class="dropdown">
                        <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>&nbsp;&nbsp;
                            <!-- {{ Session::get('loggedUser')['username'] }} -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow bg-white rounded"
                            aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('addRestaurant') }}" target="_blank"><i
                                    class="fas fa-plus-square" style="color: #3AAFA9"></i>&nbsp; Add New Restaurants</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"
                                    style="color: #3AAFA9"></i>&nbsp;Logout</a>
                        </div>
                    </div>
                    <!-- @else -->
                    <a href="{{ url('login') }}" class="btn btn-outline-light">LOGIN</a>
                    <!-- @endif -->

                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <script type="text/javascript">
            $('.dropdown-toggle').dropdown();
        </script>
        <main>
        {{-- <main class="py-4"> --}}
            @yield('content')
        </main>
        <footer>
            <div class="container-fluid" style="background: #8860D0; padding: 30px;">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10 d-flex justify-content-start text-light">&#169; Copyright 2022 Movie Dash. All
                        rights reserved.</div>
                    <div class="col-1"></div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>