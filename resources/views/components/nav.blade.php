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
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form action="/user/login">
                        <button class="nav-link btn btn-link" tabindex="-1">Login</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="/user/signup" method="POST">@csrf
                        <button class="nav-link btn btn-link" tabindex="-1">Sign Up</button>
                    </form>
                </li>
            </ul>
            <form class="d-flex" action="/?search={{request('search')}}">
                <input class="form-control me-2" name="search" value="{{request('search')}}" type="search"
                    placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
