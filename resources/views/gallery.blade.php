@extends('layouts.app')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-11 pt-5">Gallery</h2>
    <ul class="breadcrumb col-sm-1 pt-5">
      <li class="breadcrumb-item"><a href="/" class="fas fa-home"></a></li>
      <li class="breadcrumb-item">Gallery</li>
    </ul>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container-xxl row">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="mb-4">Foto BPR SUKABUMI</h1>
    </div>
    @foreach ($gallerys as $gallery)
    <div class=" wow fadeInUp col-sm-4 pb-3" data-wow-delay="0.1s">
      <div class="box-2">
        @if ($gallery->foto)
        <img src="{{ asset($gallery->foto) }}" alt="Gambar">
        @endif
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection