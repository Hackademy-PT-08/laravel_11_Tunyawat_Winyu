<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    {{-- integrazione del font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- integrazione del bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 1px 2px 2px 1px rgba(50, 50, 50, 0.252);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('allArticle.index')}}">News</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Who we are?</a></li>
                  <li><a class="dropdown-item" href="#">Work together</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
            </ul>
              @if (auth()->check())
                <ul class="navbar-navbar ms-auto mb-2 mb-lg-0" style="display: flex; list-style: none;">
                    <li class="px-3 mt-2">
                        <a href="{{route('profile')}}">
                            <i class="fa-solid fa-circle-user fa-2xl" style="color: #6e6e6e;"></i>
                        </a>
                    </li>
                    <li class="px-3 mt-2">
                        <a href="{{route('addnewpost')}}">
                            <i class="fa-solid fa-circle-plus fa-2xl" style="color: #6e6e6e;"></i>
                        </a>
                    </li>
                    <li class="px-3">
                        <form action="/logout" method="post">

                          @csrf
                          <button type="submit" class="btn btn-secondary">Logout</button>
                        
                        </form>
                    </li>
                </ul>
              @endif
              @if (!auth()->check())
                <ul class="navbar-navbar ms-auto mb-3 mb-lg-0" style="display: flex; list-style: none;">
                    <li class="px-3">
                        <a href="/login" class="btn btn-primary">
                          Login
                        </a>
                    </li>
                    <li>
                        <a href="/register" class="btn btn-primary">
                            Sign In
                        </a>
                    </li>
                </ul>
              @endif
          </div>
        </div>
      </nav>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>