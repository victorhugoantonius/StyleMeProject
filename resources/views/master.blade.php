<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StyleMe | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/productDetail.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/stylist.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
   

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          {{-- <div class="nav-item">
            <img src="{{asset('img/logo.png')}}" alt="" class="logoo">
          </div> --}}
          <a class="navbar-brand" href="/">StyleMe</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/categories">Categories</a>
              </li>
              @if (Auth::user())
                  @if (Auth::user()->role == 'admin')
                  <li class="nav-item">
                    <a class="nav-link" href="/manageproduct">Manage Products</a>
                  </li>
                  @elseif (Auth::user()->role == 'customer')
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Checkout
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/cart">Product</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/stylistcart">Stylist</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     History
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/history">Product</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/stylisthistory">Stylist</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/bookstylist">Book Stylist</a>
                  </li>
                  @endif
              @endif
            </ul>
            @auth
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome Back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/profile">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                  </li>
                </ul>
              </li>

            </ul>
            @else
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/register" class="nav-link">Register</a>
              </li>
            </ul>
            @endauth
          </div>
        </div>
      </nav>
      <div class="container mt-4">
        @yield('content')
      </div>
      <div class="footer">
        <footer class="footer-section">
            <div class="container">
                <div class="footer-content">
                    <a href="index.html">
                        <img src="{{asset('img/logo.png')}}" alt="blank">
                    </a>
                </div>
                <div class="footer-content">
                    <h3>About</h3>
                    <div class="footer-details">
                        <a href="#">About</a>
                        <a href="#">Profile Page</a>
                        <a href="#">Shop</a>
                        <a href="#">Categories</a>
                    </div>
                </div>
                <div class="footer-content">
                    <h3>Products</h3>
                    <div class="footer-details">
                        <a href="#">Shirts</a>
                        <a href="#">Pants</a>
                        <a href="#">Suits</a>
                        <a href="#">Shoes</a>
                        <a href="#">Accesories</a>
                    </div>
                </div>
                <div class="footer-content">
                    <h3>Support</h3>
                    <div class="footer-details">
                        <a href="#">Help Center</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Terms and Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <p class="copyright">Copyright © 2023, StyleMe All Rights Reserved</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
