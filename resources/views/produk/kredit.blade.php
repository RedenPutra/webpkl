@extends('layouts.app')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-10 pt-5">Kredit BPR</h2>
    <ul class="breadcrumb col-sm-2 pt-5">
      <li class="breadcrumb-item"><a href="/" class="fas fa-home"></a></li>
      <li class="breadcrumb-item">Produk</li>
      <li class="breadcrumb-item">Kredit</li>
    </ul>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container-xxl row">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="mb-4">Produk Kredit</h1>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/pns.png') }}" alt="">
        <div class="pt-3 pb-3">
          <h5>Kredit Mantap</h5>
        </div>
        <div class="bg-primary pt-3 pb-3">
          <h5 class="text-color-white">Kredit ini dikhususkan untuk karyawan yang berpenghasilan tetap</h5>
        </div>
        <div class="pt-3">
          <h5>Persyaratan</h5>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy KTP</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
          <hr class="custom-hr">
          <p class="bi bi-check">SK Penggangkatan Kerja (asli)</p>
          <hr class="custom-hr">
          <h5 class="btn-custom-blue">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h5>
        </div>
      </div>
    </div>
    <div class="wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/desa.jpg') }}" alt="">
        <div class="pt-3 pb-3">
          <h5>Kredit Mantap Desa Dan Dinas</h5>
        </div>
        <div class="bg-primary pt-3 pb-3">
          <h6 class="text-color-white">Kredit ini dikhususkan untuk pegawai desa dan dinas</h6>
        </div>
        <div class="pt-3">
          <h5>Persyaratan</h5>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocpoy KTP</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Surat Keputusan Pegawai (Asli)</p>
          <hr class="custom-hr">
          <h5 class="btn-custom-blue">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h5>
        </div>
      </div>
    </div>
    <div class="wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/dagang.jpg') }}" alt="">
        <div class="pt-3 pb-3">
          <h5>Kredit Sahabat Mikro</h5>
        </div>
        <div class="bg-primary pt-3 pb-3">
          <h5 class="text-color-white">Kredit ini dikhususkan untuk para pedagang kecil</h5>
        </div>
        <div class="pt-3">
          <h5>Persyaratan</h5>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy KTP</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Surat Keterangan Usaha</p>
          <hr class="custom-hr">
          <h5 class="btn-custom-blue">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h5>
        </div>
      </div>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/modal.png') }}" alt="">
        <div class="pt-3 pb-3">
          <h3>Kredit Modal Kerja Mitra</h3>
        </div>
        <div class="bg-primary pt-3 pb-3">
          <h4 class="text-color-white">Kredit ini dikhususkan untuk modal usaha</h4>
        </div>
        <div class="pt-3">
          <h5>Persyaratan</h5>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy KTP</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Surat Keterangan Usaha</p>
          <hr class="custom-hr">
          <h5 class="btn-custom-blue">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h5>
        </div>
      </div>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/p3k.jpeg') }}" alt="">
        <div class="pt-3 pb-3">
          <h3>Kredit Mantap P3K</h3>
        </div>
        <div class="bg-primary pt-3 pb-3">
          <h4 class="text-color-white">Kredit ini dikhususkan untuk pegawai P3K</h4>
        </div>
        <div class="pt-3">
          <h5>Persyaratan</h5>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy KTP</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Surat Keputusan Pegawai (asli),SK P3K Asli</p>
          <hr class="custom-hr">
          <h5 class="btn-custom-blue ">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h5>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection