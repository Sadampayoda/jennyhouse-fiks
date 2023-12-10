<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&family=Inter:wght@500&family=Jost:wght@500&family=League+Spartan:wght@500;600;700&family=Montserrat:wght@500&display=swap"
        rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Jennyhouse | Jennyhouse</title>
</head>

<body>
    <!-- Navbar Start -->
<section id="topbar" class="d-flex align-items-center" style="background-color: #F498B0;">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <a class="logo" href="#"><img src="{{asset('img/brand.png')}}" alt="Jennyhouse"></a>
        </div>
        <div class="icons-home mt-2 ms-5">
           
            @if (auth()->user())
                @if (auth()->user()->level != 'admin')
                
                    <a href="{{route('order')}}"><i class='bx bx-cart'></i></a>
                    <a href="{{route('admin.index')}}"><i class='bx bx-user-circle ms-3'> {{auth()->user()->name}}</i></a>
                @else
                    <a href="{{route('profile.index')}}"><i class='bx bx-user-circle ms-3'> {{auth()->user()->name}}</i></a>
                @endif
               
                <a href="{{route('logout')}}"><i class="bi bi-box-arrow-right ms-4"></i></a>
                {{-- <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit" ><i class="bi bi-box-arrow-right">Logout</i></button>
                </form> --}}
                
            @else
                <a class="btn btn-outline-danger ms-2 pb-2" href="{{ route('view.login')}}">Login</a>
            @endif
        </div>
    </div>
</section>

<header>
    <nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color: #FBDDE5;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  {{ ($active === "home") ? 'active' : '' }}" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ ($active === "about") ? 'active' : '' }} " href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ ($active === "products") ? 'active' : '' }} dropdown-toggle" href="{{route('product')}}" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('product')}}">All Product</a></li>
                            <li><a class="dropdown-item" href="{{route('option.product',['id' => 'hair-care'])}}">Haircare</a></li>
                            <li><a class="dropdown-item" href="{{route('option.product',['id' => 'Cosmetiks'])}}">Cosmterics</a></li>
                            <li><a class="dropdown-item" href="{{route('option.product',['id' => 'hair-color'])}}">Hair Color</a></li>
                        </ul>
                    </li>
                    @if (auth()->user())
                        @if (auth()->user()->level == 'admin')
                            
                            {{-- <a class="btn btn-outline-danger" href="{{route('logout')}}">Tambah Product</i></a> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ ($active === "admin") ? 'active' : '' }} dropdown-toggle" href="{{route('product')}}" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{route('admin.index')}}">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{route('admin.product')}}">Product</a></li>
                                    <li><a class="dropdown-item" href="{{route('admin.log')}}">log Audit</a></li>
                                    {{-- <li><a class="dropdown-item" href="{{route('option.product',['id' => 'hair-color'])}}">Hair Color</a></li> --}}
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('transaksi.index')}}">Store</a>
                            </li>
                        @endif 
                    @endif
                    
                    
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Navbar End -->

    @yield('conten')


    <!-- footer End -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- My JS -->
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>