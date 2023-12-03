<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Link ke CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&family=Inter:wght@500&family=Jost:wght@500&family=League+Spartan:wght@500;600;700&family=Montserrat:wght@500&display=swap"
        rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        :root {
            /* color */
            --primaryColor: #F498B0;
            --secondColor: #FBDDE5;
            --button: #B77284;
            --link: #9C6170;
            --icon: #FFFFFF;
            --rating: #ED537B;
            --video: #F6ADC0;

            /* font */
            --spartan: 'League Spartan', sans-serif;
            --inter: 'Inter', sans-serif;
            --heebo: 'Heebo', sans-serif;
            --montserrat: 'Montserrat', sans-serif;
            --jost: 'Jost', sans-serif;
        }

        body {
            background: linear-gradient(to bottom, #ff7eb6, #ffffff);
        }

        .form-control {
            border-color: #ff7eb6;
        }

        .form-control:focus {
            border-color: #ff7eb6;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #ff7eb6;
            border-color: #ff7eb6;
        }

        .btn-primary:hover {
            background-color: #e6669e;
            border-color: #e6669e;
        }

        .card {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .judul-register {
            font-family: var(--spartan);
            font-weight: 800;
            font-size: 36px;
            color: white;
        }

        .lead {
            font-family: var(--spartan);
            font-weight: 400;
            font-size: 24px;
            color: #e6669e;
        }

        .lead a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-5">
                    <img src="{{asset('img/brand.png')}}" alt="Logo" class="img-fluid">
                    <h1 class="judul-register mt-3">LET'S GET STARTED!</h1>
                    <p class="lead">Already have an account, <a href="{{route('view.login')}}">Sign in</a></p>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Register</h3>
                        @if (session()->has('failed'))
                            <div class="alert alert-danger" role="alert">
                                {{session('failed')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('validasi.register')}}">
                            @csrf
                            <input type="hidden" name="level" value="user">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                    required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <p class="text-center mb-3">Or register with:</p>
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary" type="button"><i
                                        class='bx bxl-facebook-square'></i>Login with Facebook</button>
                                <button class="btn btn-outline-danger" type="button"><i class='bx bxl-google'></i>Login
                                    with Google</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Link ke JS Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax