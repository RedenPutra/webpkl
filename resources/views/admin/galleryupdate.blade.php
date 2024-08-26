@extends('admin.layouts.body')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-11 pt-5">Edit Gambar</h2>
  </div>
</div>

<div class="container-xxl pt-3 pb-3">
  <div class="container-xxl">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <form action="{{ route('tambahgallery.update', $gallerys->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" name="foto" class="form-control" placeholder="Gambar" value="{{$gallerys->foto}}">
            @error('foto')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="d-grid">
            <button class="btn btn-warning">Update</button><br>
            <a href="{{ route('tambahgallery.tam') }}" class="btn btn-secondary" >Back</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection