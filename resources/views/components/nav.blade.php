<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid my-3">
        <a class="navbar-brand" href="/">Blogs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#body">Home</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @if (auth()->user()->avatar)
                        <img width="40" height="40" src="/storage/{{auth()->user()->avatar}}" alt="">
                        @else
                        {{strtoupper(substr(auth()->user()->name,0,1))}}
                        @endif
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/user/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/user/logout">
                                <button class="btn btn-link dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/blog/create" class="nav-link">Create Blogs</a>
                </li>
                @else
                <li class="nav-item">
                    <form action="/user/login">
                        <button class="nav-link btn btn-link" tabindex="-1">Login</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="/user/signup">
                        <button class="nav-link btn btn-link" tabindex="-1">Sign Up</button>
                    </form>
                </li>
                @endauth
            </ul>
            <form class="d-flex" action="/?search={{request('search')}}">
                <input class="form-control me-2" name="search" value="{{request('search')}}" type="search"
                    placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
