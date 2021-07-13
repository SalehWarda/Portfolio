<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="{{ route('site.home') }}">Saw</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=" @if(Route::current()->getName() == 'site.home') active @endif"><a href="{{ route('site.home') }}">Home</a></li>
          <li class="@if(Route::current()->getName() == 'site.about') active @endif"><a href="{{ route('site.about') }}">About</a></li>
          <li  class="@if(Route::current()->getName() == 'site.resume') active @endif"><a href="{{ route('site.resume') }}">Resume</a></li>
          <li  class="@if(Route::current()->getName() == 'site.portfolio') active @endif"><a href="{{ route('site.portfolio') }}">Portfolio</a></li>
          <li  class="@if(Route::current()->getName() == 'site.contact') active @endif"><a href="{{ route('site.contact') }}">Contact</a></li>

        </ul>

      </nav><!-- .nav-menu -->

      <div class="header-social-links">

          @foreach($socials as $social)
        <a href="{{$social->link}}" class="{{$social->name}}"><i class="icofont-{{$social->icon}}"></i></a>

          @endforeach
              <span>|</span> <a href="{{ route('admin.getLogin') }}"  target="_blank"><b>Login</b> </a>

      </div>

    </div>

  </header><!-- End Header -->
