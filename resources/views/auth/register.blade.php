<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Gem</title>
  <link rel="stylesheet" href="{{ asset('assets/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icons/logo.png')}}">
</head>
<body>
  <section id="sign-up">
    <div class="container2">
      <header id="sign-up-header">
        <img src="{{ asset('assets/images/E-Gem logo.png')}}" alt="E-Gem logo.png">
      </header>
      <section class="sign-up-form">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="input-group mb-3">
            <!-- email icon -->
            <span class="input-group-text" id="email-icon">@</span>
            <input type="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control" id="email-sign" placeholder="Email" style="border-left-color: transparent;" aria-label="Email" aria-describedby="addon-wrapping">
          </div>
          @error('email')
            <strong>{{ $message }}</strong>
          @enderror
          <!-- input-password -->
          <div class="input-group mb-3">
            <!-- lock icon -->
            <span class="input-group-text" id="lock-icon">
              <img src="{{ asset('assets/images/icons/password.png')}}" alt="password img" loading="lazy">
            </span>
            <!-- input password -->
            <input type="password" class="form-control" onclick="showPassword ()" id="password-input" placeholder="Password" aria-label="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <!-- eye icon -->
            <span type="button" id="toggle-password" class="input-group-text">
              <img src="{{ asset('assets/images/icons/eye.png')}}" alt="password img" loading="lazy">
            </span>
          </div>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="row g-3 mb-3">
            <div class="input-group col">
              <span class="input-group-text" id="lock-icon">
                <img src="{{ asset('assets/images/icons/user.png')}}" alt="user img" loading="lazy">
              </span>
              <input type="number" name="age" class="form-control" placeholder="Age" aria-label="Age">
            </div>
            @error('age')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
              <div class="input-group col">
              <span class="input-group-text" id="lock-icon">
                <img src="{{ asset('assets/images/icons/user.png')}}" alt="user img" loading="lazy">
              </span>
              <select id="input-gender" class="form-select" placeholder="Gender" aria-label="Gender">
                <option selected disabled>Gender</option>
                <option>Female</option>
                <option>Male</option>
              </select>
            </div>
          </div>
          <div class="input-group mb-3">
            <!-- lock icon -->
            <span class="input-group-text" id="lock-icon">
              <img src="{{ asset('assets/images/icons/password.png')}}" alt="password img" loading="lazy">
            </span>
            <!-- input password -->
            <input type="password" class="form-control" id="password-confirm" placeholder="Confirm Password" aria-label="Password"  name="password_confirmation" required autocomplete="new-password" >
            <!-- eye icon -->
            <span type="button" id="toggle-password2" class="input-group-text">
              <img src="{{ asset('assets/images/icons/eye.png')}}" alt="password img" loading="lazy">
            </span>
          </div>
          
          <!-- remember-forget -->
          <div class="remember-forget mb-3">
            <!-- Remember me -->
            <div class="input-group">
              <input class="form-check-input" type="checkbox" id="checkbox">
              <label class="form-check-label" for="checkbox" id="checkbox-label">
                Remember me
              </label>
            </div>
            <span>Forget password ?</span>
          </div>
          <button id="sign-btn">Sign up</button>
        </form>
        <div class="mb-3 or">or</div>
        <button id="loginButton">
          <img src="{{ asset('assets/images/icons/icon-google.png')}}" alt="icon-google">
          <span>Sign up with Google</span>
        </button>
        <div id="sign-in-text">
          <span>Already have an account?</span>
          <a href="{{ route('login') }}" class="red-text">Login</a><br>
        </div>
      </section>
    </div>
  </section>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('https://cdn.auth0.com/js/lock/11.34/lock.min.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>
</body>
</html>
