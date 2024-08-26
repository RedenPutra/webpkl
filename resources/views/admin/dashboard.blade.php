@extends('admin.layouts.body')
@section('main')
<div class="container-xxl py-5 bg-dark mb-5">
  <div class="container my-5 py-5">
      <div class="row align-items-center g-5">
          <div class="col-lg-6 text-center text-lg-start">
              <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
              <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
              <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
          </div>
          <div class="col-lg-6 text-center text-lg-end overflow-hidden">
              <img class="img-fluid" src="img/hero.png" alt="">
          </div>
      </div>
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