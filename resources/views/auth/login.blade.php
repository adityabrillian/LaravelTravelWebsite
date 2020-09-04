<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login NOMADS</title>
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}">
</head>
<body>
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">We explore the new<br>life much better</h1>
                    <img 
                        src="{{ url('frontend/images/login-images.png') }}" 
                        class="w-75 d-none d-sm-flex" 
                        alt=""
                    >
                </div>
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img 
                                    src="frontend/images/logo.png" 
                                    alt="" 
                                    class="w-50 mb-4"
                                >
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input 
                                        type="email" 
                                        class="form-control @error('email') is-invalid @enderror" 
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email" 
                                        autofocus
                                        id="email" 
                                        aria-describedby="emailHelp" 
                                    >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input 
                                        type="password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        name="password"
                                        value="{{ old('password') }}"
                                        required
                                        autocomplete="password" 
                                        autofocus
                                        id="password" 
                                    >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group form-check">
                                    <input 
                                        type="checkbox" 
                                        class="form-check-input" 
                                        name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                <button 
                                    type="submit" 
                                    class="btn btn-login btn-block"
                                >
                                    Sign In
                                </button>
                                <p class="text-center mt-4">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Saya lupa password</a>
                                    @endif
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="{{ url('frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
</body>
</html>