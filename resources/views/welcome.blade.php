<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Gem</title>
  <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/logo.png') }}">
</head>
<body>
  <header id="header">
    <div class="container2">
      <a href="#" id="logo">
        <img src="{{asset('assets/images/E-Gem logo.png') }}" alt="Logo">
      </a>
      <label for="menuControl">
        <i class="fa-solid fa-bars"></i>
      </label>
      <input type="checkbox" id="menuControl">
      <nav>
        <a href="#landing" class="active">Main</a>
        <a href="#training">Programs</a>
        <a href="#top-rated">Coach</a>
        <a href="{{ url('/contact-us') }}">Contact Us</a>
        @if (Route::has('login'))
        @auth
        <a href={{ url('/dashboard') }}>Dashboard</a>
        @else
        <a href="{{ route('login') }}">Sign in</a>
        @endauth
      @endif
      </nav>
      @if (Route::has('login'))
      <div class="part3">
        @auth
        <button><a href={{ url('/dashboard') }}>Dashboard</a></button>
        @else
        <button><a href="{{ route('login') }}">Sign in</a></button>
        @endauth
        <span id="nav-lan">EN</span>
    @endif
      </div>
    </div>
  </header>
  <section id="landing">
    <div class="container2">
      <div class="landing-info">
        <h1>Ready to discover the best version of<span>yourself</span></h1>
        <p>Join thousands of young people in the strongest comprehensive training and follow-up program that will help you transform and reach
          your sporting goals under the supervision of professionals
        </p>
        <button class="btnCoach">Choose your coach</button>
      </div>
      <div class="landing-photo">
        <img src="{{asset('assets/images/landing-photo.png') }}"/>
      </div>
    </div>
  </section>
  <section id="follow">
    <div class="container2">
      <h2>Do you need to follow up with a coach?</h2>
      <div class="cards">
        <article>
          <img src="{{asset('assets/images/follow 1.png') }}" alt="a man">
          <div class="follow-card-description">
            <div class="follow-icon">
              <img src="{{asset('assets/images/icons/follow 1.png') }}" alt="hand icon">
            </div>
            <div class="text">
              <h3>Follow up all the time</h3>
              <p>A private chat for you on WhatsApp that provides you with communication with experts in nutrition, bodybuilding, injuries, flexibility,fitness, with you all the way</p>
            </div>
          </div>
        </article>
        <article>
          <img src="{{asset('assets/images/follow 2.png') }}" alt="a women">
          <div class="follow-card-description">
            <div class="follow-icon">
              <img src="{{asset('assets/images/icons/follow 2.png') }}" alt="hand icon">
            </div>
            <div class="text">
              <h3>Comprehensive training</h3>
              <p>Not just bodybuilding! The best form is something that you will definitely achieve with us, but in addition to it, our methodology qualifies you to be a better athlete in all respects</p>
            </div>
          </div>
        </article>
        <article>
          <img src="{{asset('assets/images/follow 3.png') }}" alt="a women photo">
          <div class="follow-card-description">
            <div class="follow-icon">
              <img src="{{asset('assets/images/icons/follow 3.png') }}" alt="icon photo">
            </div>
            <div class="text">
              <h3>custom programs</h3>
              <p>Your training program is systematically tailored by our professionals Based on your needs and data (eating preferences, working conditions, etc.)</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
  <section id="training">
    <div class="container2">
      <h2>Your training program includes:</h2>
      <div class="training-box-card">
        <div class="card2">
          <img src="{{asset('assets/images/icons/program include 1.png') }}" alt="card1">
          <article>
            <h3>Resistance exercise programme</h3>
            <p>Resistance exercises are the basis for building muscles. Through our scientific methodology, you will benefit from a system designed for you, calculated and studied, in order to reach the maximum results that you can reach at the best time.</p>
          </article>
        </div>
        <div class="card2">
          <img src="{{asset('assets/images/icons/program include 2.png') }}" alt="card2">
          <article>
            <h3>Fitness programme</h3>
            <p>Resistance exercises are the basis for building muscles. Through our scientific methodology, you will benefit from a system designed for you, calculated and studied, in order to reach the maximum results that you can reach at the best time.</p>
          </article>
        </div>
        <div class="card2">
          <img src="{{asset('assets/images/icons/program include 3.png') }}" alt="card3">
          <article>
            <h3>Flexibility programme</h3>
            <p>Increasing the flexibility of your joints allows for better motor performance
              for resistance exercises. The flexibility program designed by
              professionals will help you achieve an
              unprecedented level of flexibility.
            </p>
          </article>
        </div>
        <div class="card2">
          <img src="{{asset('assets/images/icons/program include 4.png') }}" alt="card4">
          <article>
            <h3>Nutrition programme</h3>
            <p>In order to reap the results of effort in all
              other aspects, the most important factor is nutrition. Through the nutrition program, it includes a calculated system that takes into account all factors (your goals, needs,
              preferred and unfavorable types of food, nature of work...).</p>
          </article>
        </div>
        <div class="card2">
          <img src="{{asset('assets/images/icons/program include 5.png') }}" alt="card5">
          <article>
            <h3>Follow up</h3>
            <p>With you all the way, professional doctors and specialists follow up with you all your problems
              and inquiries directly on Chat.</p>
          </article>
        </div>
      </div>
      <button class="btnCoach">Choose your coach</button>
    </div>
  </section>
  <section id="journey">
    <div class="container2">
      <h2>E-Gem your journey with</h2>
      <div class="box-card">
        <div class="card2">
          <div class="ribbon">
            step 1
          </div>
          <h3>Subscribe through our website</h3>
        </div>
        <div class="card2">
          <div class="ribbon">
            step 2
          </div>
          <h3>Tests and measurements</h3>
          <p>Our team will contact you to take the required<br>measurements and tests to detail your program</p>
        </div>
        <div class="card2">
          <div class="ribbon">
            step 3
          </div>
          <h3>Receive your training program</h3>
          <p>Receive your customized training programs<br>and start your transformation journey</p>
        </div>
        <div class="card2">
          <div class="ribbon">
            step 4
          </div>
          <h3>with you all the way</h3>
          <p>
            We are always with you on Chat to send you
            monthly updates of your training program, and to answer any questions or problems you may encounter.
          </p>
        </div>
      </div>
      <button class="btnCoach">Choose your coach</button>
    </div>
  </section>
  <section id="top-rated">
    <div class="container2">
      <h2>Top rated</h2>
      <div class="box-card">
        <div class="moving-part">
          <article>
            <img src="{{asset('assets/images/top rated 1.png') }}" alt="top rated 1">
            <h3>Mohamed Ali</h3>
            <small>Bodybuilding</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
          <article>
            <img src="{{asset('assets/images/top rated 2.png') }}" alt="top rated 2">
            <h3>Mohamed Ali</h3>
            <small>Bodybuilding</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
          <article>
            <img src="{{asset('assets/images/top rated 3.png') }}" alt="top rated 3">
            <h3>Mohamed Ali</h3>
            <small>Bodybuilding</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
          <article>
            <img src="{{asset('assets/images/top rated 4.png') }}" alt="top rated 4">
            <h3>Mohamed Ali</h3>
            <small>Bodybuilding</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
          <article>
            <img src="{{asset('assets/images/top rated 5.png') }}" alt="top rated 5">
            <h3>Mohamed Ali</h3>
            <small>Bodybuilding</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
        </div>
      </div>
      <h2>Super Heroes </h2>
      <div class="box-card">
        <div class="moving-part">
          <article>
            <img src="{{asset('assets/images/super heroes 1.png') }}" alt="super heroes 1">
            <h3>Salma Ibrahim</h3>
            <small>Cardio</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
          <article>
            <img src="{{asset('assets/images/super heroes 2.png') }}" alt="super heroes2">
            <h3>Sandy Wael</h3>
            <small>Flexibility</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
          <article>
            <img src="{{asset('assets/images/super heroes 3.png') }}" alt="super heroes 3">
            <h3>Mona Sayed</h3>
            <small>Bodybuilding</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
          <article>
            <img src="{{asset('assets/images/super heroes 4.png') }}" alt="super heroes4">
            <h3>Noor Ashraf </h3>
            <small>stability</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
          <article>
            <img src="{{asset('assets/images/super heroes 5.png') }}" alt="super heroes5">
            <h3>Randa Gmal</h3>
            <small>Flexibility</small>
            <div class="article-footer">
              <span>7 Years Ex</span>
              <span><i class="fa-solid fa-star rating"></i>5</span>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <section id="heroes-stories">
    <div class="container2">
      <h2>Our heroes success stories:</h2>
      <div class="box-card">
        <div class="moving-part">
          <article>
            <img src="{{asset('assets/images/our heroes 1.png') }}" alt="heroes 1">
            <h3>Ismail tarek</h3>
          </article>
          <article>
            <img src="{{asset('assets/images/our heroes 2.png') }}" alt="heroes 2">
            <h3>Moemen hesham</h3>
          </article>
          <article>
            <img src="{{asset('assets/images/our heroes 3.png') }}" alt="heroes 3">
            <h3>Youssef wael </h3>
          </article>
          <article>
            <img src="{{asset('assets/images/our heroes 4.png') }}" alt="heroes 4">
            <h3>Safy osama</h3>
          </article>
          <article>
            <img src="{{asset('assets/images/our heroes 5.png') }}" alt="heroes 5">
            <h3>Zyad Jo</h3>
          </article>
          <article>
            <img src="{{asset('assets/images/our heroes 6.png') }}" alt="heroes 6">
            <h3>Karim ashraf</h3>
          </article>
        </div>
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
        <img src="{{asset('assets/images/E-Gem logo.png') }}" alt="Logo">
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
        <a href="#landing">Main</a>
        <a href="#training">Programs</a>
        <a href="#top-rated">Coach</a>
      </div>
    </div>
  </footer>
  <div class="copy">
    <div class="container2">
      <p>Copyright &copy; E-Gem By TechTitans</p>
    </div>
  </div>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>