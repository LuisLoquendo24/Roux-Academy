<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<div class="wrapper">
  <header>
    <div class="branding"> <img src="{{ asset('imagenes/ralogo_monogram.png') }}" alt="Logo">
      <p>Roux Academy<br>
        Art • Media • Design</p>
    </div>
    <div class="description">
      <h1>Roux Academy 2016 Art Conference</h1>
      <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
    </div>
    <nav>
      <ol>
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('artists') }}">ARTISTS</a></li>
        <li><a href="{{ route('schedule') }}">SCHEDULE</a></li>
        <li><a href="{{ route('venue') }}">VENUE/TRAVEL</a></li>
        <li><a href="{{ route('register') }}">REGISTER</a></li>
      </ol>
    </nav>
  </header>
  <div id="rotator"><img src="{{ asset('imagenes/art01.jpg') }}" width="1000" height="320" alt="Artwork from show"></div>
  <!-- Rotator -->

  @yield('contenido')

  <footer>
    <div class="branding"> <img src="{{ asset('imagenes/ralogo_monogram.png') }}" alt="Logo"> </div>
    <div class="description">Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for three days of lectures by world-renowned art scholars and artists.</div>
    <nav>
      <ol>
        <li><a href="http://rouxacademy.com/about/about.htm">About the Roux Academy</a></li>
        <li><a href="http://rouxacademy.com/privacy.htm">Privacy Policy</a></li>
        <li><a href="http://rouxacademy.com/index.htm">Visit our website</a></li>
      </ol>
    </nav>
  </footer>
</div>
</body>
</html>
