<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SSF Marketing dashboard login">
    <title>Login - SSF Marketing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/auth.css') }}">
</head>
<body>
    <main class="auth-vuexy">
        <section class="auth-preview" aria-label="Dashboard preview">
            <a class="brand-mark" href="{{ route('home') }}" aria-label="SSF Marketing home">
                <img src="{{ url('frontend/assets/images/logo/logo.png') }}" alt="SSF Marketing">
            </a>

            <div class="preview-shell" aria-hidden="true">
                <div class="window-bar"><span></span><span></span><span></span></div>
                <div class="preview-grid">
                    <div class="mini-card wide">
                        <small>Total Revenue</small>
                        <strong>$128.4k</strong>
                        <div class="progress"><i style="width: 74%"></i></div>
                    </div>
                    <div class="mini-card accent">
                        <i class="fa-solid fa-chart-line"></i>
                        <strong>5.8x</strong>
                        <small>ROAS</small>
                    </div>
                    <div class="side-list">
                        <span></span><span></span><span></span><span></span>
                    </div>
                    <div class="bars">
                        <span style="height: 45%"></span>
                        <span style="height: 72%"></span>
                        <span style="height: 58%"></span>
                        <span style="height: 86%"></span>
                        <span style="height: 64%"></span>
                    </div>
                </div>
            </div>

            <div class="preview-copy">
                <span>Role based dashboard</span>
                <h1>Welcome to your marketing control center.</h1>
                <p>Super admin, admin, and author accounts can access the workspace securely.</p>
            </div>
        </section>

        <section class="auth-panel">
            <div class="login-card">
                <a class="mobile-mark" href="{{ route('home') }}" aria-label="SSF Marketing home">
                    <img src="{{ url('frontend/assets/images/logo/logo.png') }}" alt="SSF Marketing">
                </a>

                <div class="login-heading">
                    <h2>Welcome back</h2>
                    <p>Please sign in to your account and start managing campaigns.</p>
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
                        <label for="email">Email</label>
                        <div class="input-control @error('email') has-error @enderror">
                            <i class="fa-regular fa-envelope"></i>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="admin@ssfmarketing.com" autocomplete="email" required autofocus>
                        </div>
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field-group">
                        <label for="password">Password</label>
                        <div class="input-control @error('password') has-error @enderror">
                            <i class="fa-solid fa-lock"></i>
                            <input id="password" name="password" type="password" placeholder="Enter password" autocomplete="current-password" required>
                        </div>
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-options">
                        <label class="remember"><input type="checkbox" name="remember"> <span>Remember me</span></label>
                        <span>Secure access</span>
                    </div>

                    <button type="submit">Sign in</button>
                </form>

                <div class="role-row" aria-label="Available roles">
                    <span>Super Admin</span>
                    <span>Admin</span>
                    <span>Author</span>
                </div>

                <a class="back-link" href="{{ route('home') }}"><i class="fa-solid fa-arrow-left"></i> Back to website</a>
            </div>
        </section>
    </main>
</body>
</html>