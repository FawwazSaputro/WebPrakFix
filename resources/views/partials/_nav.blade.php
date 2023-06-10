<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/products">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item  d-flex justify-content-center align-items-center">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="/products/new"><span class="material-symbols-rounded">
                        add_box
                        </span> Jual</a>
                    
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="material-symbols-rounded me-1">
                            person
                        </span>Akun
                    </a>
                    <ul class="dropdown-menu">
                        @auth
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        @else
                        <li><a class="dropdown-item" href="/login">Login</a></li>
                        <li><a class="dropdown-item" href="/register">Register</a></li>
                        @endauth
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>