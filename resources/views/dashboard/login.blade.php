<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SSF Marketing dashboard login">
    <title>Login - SSF Marketing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <link rel="stylesheet" href="{{ url('frontend/assets/css/auth.css') }}">
</head>
<body>
    <main class="auth-page">
        <section class="login-card" aria-label="Admin login">
            <a class="login-logo" href="{{ route('home') }}" aria-label="SSF Marketing home">
                <img src="{{ url('frontend/assets/images/logo/logo.png') }}" alt="SSF Marketing">
            </a>

            <div class="login-heading">
                <h1>Dashboard <span>Access</span></h1>
                <p>Sign in to manage SSF Marketing content, campaigns, and website updates.</p>
            </div>

            @if ($errors->any())
                <div class="alert" role="alert">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('login.store') }}" class="login-form">
                @csrf

                <div class="field-group">
                    <label for="email">Email address</label>
                    <div class="input-control @error('email') has-error @enderror">
                        <i class="fa-regular fa-envelope"></i>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="email" required autofocus>
                    </div>
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                <div class="field-group">
                    <label for="password">Password</label>
                    <div class="input-control @error('password') has-error @enderror">
                        <i class="fa-solid fa-lock"></i>
                        <input id="password" name="password" type="password" placeholder="Password" autocomplete="current-password" required>
                    </div>
                    @error('password')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                <label class="remember">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>

                <button type="submit" class="login-submit"><span>Sign In</span><lord-icon src="https://cdn.lordicon.com/vduvxizq.json" trigger="hover" target=".login-submit" colors="primary:#ffffff" aria-hidden="true"></lord-icon></button>
            </form>
        </section>
    </main>
</body>
</html>