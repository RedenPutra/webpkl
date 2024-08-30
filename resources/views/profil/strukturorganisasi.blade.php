@extends('layouts.app')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-9 pt-5">Struktur Organisasi</h2>
    <ul class="breadcrumb col-sm-3 pt-5">
      <li class="breadcrumb-item"><a href="/" class="fas fa-home"></a></li>
      <li class="breadcrumb-item">Profil</a></li>
      <li class="breadcrumb-item">Struktur Organisasi</a></li>
    </ul>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container">
      <div class=" wow fadeInUp" data-wow-delay="0.1s">
          <img src="{{ asset('img/struktur organisasi baru.png') }}" alt="" class="img-fluid">
      </div>
  </div>
</div>
@endsection