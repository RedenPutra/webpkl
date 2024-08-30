@extends('layouts.app')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-11 pt-5"> Detail Berita</h2>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container-xxl">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <div class="box">
        @if ($berita->gambar)
        <img src="{{ asset($berita->gambar) }}" alt="Gambar {{ $berita->judul }}">
        @endif
        <div class=" pt-3 pb-3 text-kanan">
          <h1>{{ $berita->judul }}</h1>
        </div>
        <div class="pb-3" style="font-size: 150%">
          <p class="text-kanan">{{ $berita->konten }}</p>
        </div>
        <div class="pb-3 text-kanan">
          <a href="{{ route('berita.index') }}" class="btn btn-primary">Kembali ke Daftar Berita</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection