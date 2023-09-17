<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Gem</title>
  <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/logo.png')}}">
 
</head>
<body>
<section id="sign-in">
  <div class="container2">
    <header id="sign-in-header">
        <img src="{{asset('assets/images/E-Gem logo.png')}}" alt="E-Gem logo.png">
    </header>
    <section class="sign-in-form">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
          <!-- email icon -->
          
          <span class="input-group-text" id="email-icon">@</span>
          <input type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required id="email-sign" placeholder="Email" style="border-left-color: transparent;" aria-label="Email" aria-describedby="addon-wrapping">
        </div>
        @error('email')
        <strong>{{ $message }}</strong>
        @enderror
        <!-- input-password -->
        <div class="input-group mb-3">
          <!-- lock icon -->
          <span class="input-group-text" id="lock-icon">
            <img src="{{asset('assets/images/icons/password.png')}}" alt="password img" loading="lazy">
          </span>
          <!-- input password -->
          <input type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required id="password-input" placeholder="Password" aria-label="Password">
          <!-- eye icon -->
          <span type="button" id="toggle-password" class="input-group-text">
            <img src="{{asset('assets/images/icons/eye.png')}}" alt="password img" loading="lazy">
          </span>
        </div>
        @error('password')

      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
            @enderror
        <!-- remember-forget -->
        <div class="remember-forget mb-3">
          <!-- Remember me -->
          <div class="input-group">
            <input class="form-check-input" type="checkbox" id="checkbox">
            <label class="form-check-label mx-1" for="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              Remember me
            </label>
          </div>
          <span>Forget password ?</span>
        </div>
        <button id="sign-btn" type="submit">Sign in</button>
      </form>
      <div class="mb-3 or">or</div>
      <button id="loginButton">
        <img src="{{asset('assets/images/icons/icon-google.png')}}" alt="icon-google">
        <span>Login with Google</span>
      </button>
      <div>
        <span>Don't have an account?</span>
        <a href="/register" class="red-text">Signup Here</a><br>
        <a href="/" class="red-text">Continue without Login</a>
      </div>
    </section>
  </div>
</section>
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>