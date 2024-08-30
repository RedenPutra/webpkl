@extends('admin.layouts.body')
@section('main')
<div class="slideshow-container">
  <div class="mySlides">
    <img src="{{ asset('img/sibarokah.jpeg') }}" alt="Responsive Image" class="slide-image pt-5">
  </div>
  <div class="mySlides">
    <img src="{{ asset('img/siwajar.jpeg') }}" alt="Responsive Image" class="slide-image pt-5">
  </div>
  <div class="mySlides">
    <img src="{{ asset('img/bangkit.jpeg') }}" alt="Responsive Image" class="slide-image pt-5">
  </div>
</div>

<div class="container-xxl pt-3 pb-3">
    <div class="container-xxl">
      <div class=" wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-4">Anda Telah Login</h1>
      </div>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
      </form>
    </div>
</div>
@endsection