<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>WALTECH ICT SERVICES AND CONSULTANT LTD | ICT Solutions & Training</title>
    <meta name="description" content="WALTECH ICT SERVICES AND CONSULTANT LTD provides professional website development, app & software development, computer repairs, graphic design, laptop sales, and ICT training.">
    <meta name="keywords" content="ICT training, website development, software development, computer repairs, laptop sales, ICT company in Nigeria">
    <meta name="author" content="WALTECH ICT SERVICES AND CONSULTANT LTD">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-caption {
            background: rgba(0,0,0,0.55);
            padding: 20px;
            border-radius: 8px;
        }
        .service-card i {
            font-size: 40px;
            color: #0d6efd;
        }
        .achievement-icon {
            font-size: 45px;
            color: #0d6efd;
        }
        .cta-section {
            background: linear-gradient(135deg, #0d6efd, #031633);
            color: #fff;
        }
    </style>
</head>
<body>

<!-- ===================== NAVBAR ===================== -->
@include('includes.nav')

{{-- form section --}}
<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title mb-4 text-center">Login to Your Account</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf   
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Remember Me -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember_token" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===================== FOOTER ===================== -->
<footer class="bg-dark text-light py-4">
    <div class="container text-center">
        <p class="mb-0">&copy; 2026 WALTECH ICT SERVICES AND CONSULTANT LTD. All Rights Reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>