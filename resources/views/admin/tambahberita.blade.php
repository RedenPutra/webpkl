@extends('admin.layouts.body')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-11 pt-5">Tambah Berita</h2>
  </div>
</div>

<div class="container-xxl pt-3 pb-3">
  <div class="container-xxl">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="mb-4">Masukan Berita</h1>
    </div>
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <div class=" rounded-0 overflow-hidden">
        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div>
            <label class="form-label" for="gambar"><b>Masukan Gambar (Opsional) :</b></label>
            <input type="file" id="gambar" name="gambar" class="form-control">
          </div><br>
          
          <div>
            <label class="form-label" for="judul"><b>Masukan Judul Berita :</b></label>
            <input type="text" id="judul" name="judul" placeholder="Judul Berita" class="form-control" required>
          </div><br>
          
          <div>
            <label class="form-label" for="konten"><b>Masukan Konten Berita :</b></label>
            <textarea id="konten" name="konten" rows="5" placeholder="Konten Berita" class="form-control" required></textarea>
          </div><br>
    
          
          <button type="submit">Simpan Berita</button>
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
      <h1 class="mb-4">Tabel Berita</h1>
    </div>
    <table class="table table-hover table-white" style="overflow-x:auto;">
      <thead class="table-biru">
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>Judul</th>
          <th>Konten</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($beritas as $berita)
        <tr>
          <td class="align-middle">{{ $loop->iteration }}</td>
          <td class="align-middle">{{ $berita->gambar }}</td>
          <td class="align-middle">{{ $berita->judul }}</td>
          <td class="align-middle">{{ $berita->konten }}</td>
          <td class="align-middle">
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ route('tambahberita.edit', ['id'=>$berita->id]) }}" type="button" class="btn btn-secondary" >Edit</a>
              <a href="{{ route('tambahberita.delete', ['id'=>$berita->id]) }}" type="button" class="btn btn-danger">Delete</a>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td class="text-center" colspan="5">Berita Not Found</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
