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
      <div class="team-item-1 text-center rounded-0 overflow-hidden">
        <img src="{{ asset('img/modal.png') }}" alt="" width="400px">
        <div class="pt-4 pb-3">
          <h3>Kredit Modal Kerja Mitra</h3>
        </div>
        <div class="pb-2 pt-3 bg-primary">
          <h6 class="text-color-white pb-4">Kredit ini dikhususkan untuk modal usaha</h6>
        </div>
        <div class="pt-3">
            <h6>Persyaratan</h6>
            <hr>
            <p class="bi bi-check">Fotocopy KTP</p>
            <hr>
            <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
            <hr>
            <p class="bi bi-check">Surat Keterangan Usaha</p>
            <hr>
            <h6 class="btn-custom-blue">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h6>
          </div>
        </div>
      </div>
      <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/pns.png') }}" alt="" width="400px">
          <div class="pt-4 pb-3">
            <h3>Kredit Mantap</h3>
          </div>
          <div class="pb-3 pt-3 bg-primary">
            <h6 class="text-color-white">Kredit ini dikhususkan untuk karyawan yang berpenghasilan tetap</h6>
          </div>
          <div class="pt-3">
            <h6>Persyaratan</h6>
            <hr>
            <p class="bi bi-check">Fotocopy KTP</p>
            <hr>
            <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
            <hr>
            <p class="bi bi-check">SK (Surat Keputusan) Penggangkatan Kerja (asli)</p>
            <hr>
            <h6 class="btn-custom-blue">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h6>
          </div>
        </div>
      </div>
      <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/p3k.jpeg') }}" alt="" width="400px">
          <div class="pt-4 pb-3">
            <h3>Kredit Mantap P3K</h3>
          </div>
          <div class="pb-2 pt-3 bg-primary">
            <h6 class="text-color-white pb-4">Kredit ini dikhususkan untuk pegawai P3K</h6>
          </div>
          <div class="pt-3">
            <h6>Persyaratan</h6>
            <hr>
            <p class="bi bi-check">Fotocopy KTP</p>
            <hr>
            <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
            <hr>
            <p class="bi bi-check">Surat Keputusan Pegawai (asli),SK P3K Asli</p>
            <hr>
            <h6 class="btn-custom-blue ">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h6>
          </div>
        </div>
      </div>
      <div class=" pt-3 wow fadeInUp col-sm-6" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/desa.jpg') }}" alt="" width="580px">
          <div class="pt-4 pb-3">
            <h3>Kredit Mantap Desa Dan Dinas</h3>
          </div>
          <div class="pb-3 pt-3 bg-primary">
            <h5 style="font-size: 22px" class="text-color-white">Kredit ini dikhususkan untuk pegawai desa dan dinas</h5>
          </div>
          <div class="pt-3">
            <h6>Persyaratan</h6>
            <hr>
            <p class="bi bi-check">Fotocpoy KTP</p>
            <hr>
            <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
            <hr>
            <p class="bi bi-check">Surat Keputusan Pegawai (Asli)</p>
            <hr>
            <h6 class="btn-custom-blue pb-2 pt-2">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h6>
          </div>
        </div>
      </div>
      <div class=" pt-3 wow fadeInUp col-sm-6" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/dagang.jpg') }}" alt="" width="600px">
          <div class="pt-4 pb-3">
            <h3>Kredit Sahabat Mikro</h3>
          </div>
          <div class="pb-3 pt-3 bg-primary">
            <h5 style="font-size: 22px" class="text-color-white">Kredit ini dikhususkan untuk para pedagang kecil</h5>
          </div>
          <div class="pt-3">
            <h6>Persyaratan</h6>
            <hr>
            <p class="bi bi-check">Fotocopy KTP</p>
            <hr>
            <p class="bi bi-check">Fotocopy Kartu Keluarga</p>
            <hr>
            <p class="bi bi-check">Surat Keterangan Usaha</p>
            <hr>
            <h6 class="btn-custom-blue pb-2 pt-2">Ayo kunjungi Kantor Cabang Perumda BPR Sukabumi terdekat</h6>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection