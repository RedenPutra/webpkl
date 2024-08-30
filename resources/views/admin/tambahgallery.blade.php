@extends('admin.layouts.body')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-11 pt-5">Tambah Gallery</h2>
  </div>
</div>

<div class="container-xxl pt-3 pb-3">
  <div class="container-xxl">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="mb-4">Masukan Gambar</h1>
    </div>
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <div class=" rounded-0 overflow-hidden">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div>
            <label class="form-label" for="foto"><b>Masukan Gambar :</b></label>
            <input type="file" id="foto" name="foto" class="form-control">
          </div><br>
    
          <button type="submit">Simpan Gambar</button>
        </form>
        
        @if ($errors->any())
        <div>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      
      </div>
    </div>
  </div>
</div>

<div class="container-xxl pt-3 pb-3">
  <div class="container-xxl">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="mb-4">Tabel Gallery</h1>
    </div>
    <table class="table table-hover table-white" style="overflow-x: auto;">
      <thead class="table-biru">
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($gallerys as $gallery)
        <tr>
          <td class="align-middle">{{ $loop->iteration }}</td>
          <td class="align-middle">
            @if ($gallery->foto)
              <img src="{{ asset($gallery->foto) }}" alt="" style="max-width: 100px; max-height: 100px;">
            @endif
          </td>
          <td class="align-middle">
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ route('tambahgallery.edit', ['id'=>$gallery->id]) }}" type="button" class="btn btn-secondary" >Edit</a>
              <a href="{{ route('tambahgallery.delete', ['id'=>$gallery->id]) }}" type="button" class="btn btn-danger">Delete</a>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td class="text-center" colspan="5">Gallery Not Found</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection