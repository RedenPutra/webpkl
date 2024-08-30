@extends('admin.layouts.body')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-11 pt-5">Edit Berita</h2>
  </div>
</div>

<div class="container-xxl pt-3 pb-3">
  <div class="container-xxl">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <form action="{{ route('tambahberita.update', $beritas->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col mb-3">
            <label class="form-label">Gambar</label>
            @if ($beritas->gambar)
            <div>
              <img src="{{ asset($beritas->gambar) }}" alt="" style="max-width: 100px; max-height: 100px;">
            </div><br>
            @endif
            <input type="file" name="gambar" class="form-control" placeholder="Gambar">
            @error('gambar')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label class="form-label">Judul Berita</label>
            <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{$beritas->judul}}">
            @error('judul')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label class="form-label">Konten Berita</label>
            <textarea name="konten" id="konten" cols="30" rows="10" class="form-control" placeholder="Konten Berita">{{ $beritas->konten }}</textarea>
            @error('konten')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="d-grid">
            <button class="btn btn-warning">Update</button><br>
            <a href="{{ route('tambahberita.tam') }}" class="btn btn-secondary" >Back</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection