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
  <header id="header">
    <div class="container2">
      <a href="#" id="logo">
        <img src="{{asset('assets/images/E-Gem logo.png')}}" alt="Logo">
      </a>
      <label for="menuControl">
        <i class="fa-solid fa-bars"></i>
      </label>
      <input type="checkbox" id="menuControl">
      <nav>
        <a href="/#landing">Main</a>
        <a href="/#training">Programs</a>
        <a href="/#top-rated">Coach</a>
        <a href="#" class="active">Contact Us</a>
        @if (Route::has('login'))
          @auth
            <a href={{ url('/dashboard') }}>Dashboard</a>
          @else
                <a href="{{ route('login') }}">Sign in</a>
          @endauth
        @endif
      </nav>
      <div class="part3">
        @guest
          @if (Route::has('login'))
        <button><a href="{{ route('login') }}">Sign in</a></button>
          @endif
        @else
        <button><a href="{{ url('/dashboard') }}">Dashboard</a></button>
        @endguest
        <span id="nav-lan">EN</span>
      </div>
    </div>
  </header>
<div class="header-contact"></div>
<section class="contact-us">
  <div class="container2">
    <div class="form">
      <h1>
        contact us
      </h1>
      <form action="">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingName" placeholder="the name">
          <label for="floatingName">the name</label>
        </div>
        <div class="form-floating">
          <input type="phone number" class="form-control" id="floatingPhoneNumber" placeholder="Phone number">
          <label for="floatingPhoneNumber">Phone number</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingEmail">e mail</label>
        </div>
        <div class="form-floating">
          <textarea type="text" class="form-control" placeholder="Leave a message here" id="floatingTextarea"></textarea>
          <label for="floatingTextarea">your message</label>
        </div>
        <div class="d-grid gap-2">
          <a href="work out.html">  
            <button class="btn btn-danger" type="button" width="1124px" height="75px" >
              choose your Coach
            </button>
          </a>
        </div>
      </form>
      </div>
  </div>
</section>
<footer>
  <div class="container2">
    <div class="contact-footer">
      <h2>Contact Us</h2>
      <div class="contact-info">
        <p>
          Email
          <a href="mailto:needhelp@E-gem.com?subject=Hello%20World&body=This%20is%20the%20body%20of%20the%20email">
            needhelp@E-gem.com
          </a>
        </p>
        <p>Phone
            <a href="tel:000 000 000">000 000 000</a>
        </p>
        <p>Address<span>Egypt Tanta</span></p>
      </div>
    </div>
    <div class="about-gem">
      <img src="{{asset('assets/images/E-Gem logo.png')}}" alt="Logo">
      <p>Join thousands of young people in the most powerful follow-up and comprehensive
        training program that will help you transform Reach your sports goals under the
        supervision of professionals</p>
      <div class="social">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-twitter"></i>
      </div>
    </div>
    <div class="pages">
      <h2>Pages</h2>
      <a href="/#landing">Main</a>
      <a href="/#training">Programs</a>
      <a href="/#top-rated">Coach</a>
    </div>
  </div>
</footer>
<div class="copy">
  <div class="container2">
    <p>Copyright &copy; E-Gem By Yahia</p>
  </div>
</div>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
