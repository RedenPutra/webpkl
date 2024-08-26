@extends('layouts.app')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-9 pt-5">Produk BPR</h2>
    <ul class="breadcrumb col-sm-3 pt-5">
      <li class="breadcrumb-item"><a href="/" class="fas fa-home"></a></li>
      <li class="breadcrumb-item">Produk</li>
      <li class="breadcrumb-item">Simpanan</li>
    </ul>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container-xxl row">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <h1>Produk Tabungan</h1>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/sibarokah.jpeg') }}" alt="">
        <div class="pt-3 pb-3">
          <h2>SiBarokah</h2>
        </div>
        <div class="bg-primary pb-3 pt-3">
          <h5 class="text-color-white">Simpanan Sukabumi Mubarokah</h5>
        </div>
        <div class="pt-3">
          <p class="bi bi-check">Tabungan Rasa Investasi</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Suku Bunga Tinggi</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Simpanan Dijamin LPS</p>
          <hr class="custom-hr">
          <p style="font-size: 15px" class="bi bi-check">Biaya Admin Bulanan Rendah hanya Rp. 5.000,-</p>
          <hr class="custom-hr">
        </div>
        <div class="pb-3">
          <a href="sibarokah" class="btn btn-custom-blue">REGISTER NOW</a>
        </div>
      </div>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/siwajar.jpeg') }}" alt="">
        <div class="pb-3 pt-3">
          <h2>SiWajar</h2>
        </div>
        <div class="bg-primary pb-3 pt-3">
          <h5 class="text-color-white">Simpanan Wajib Belajar</h5>
        </div>
        <div class="pt-3">
          <p class="bi bi-check">Investasi Dana Pendidikan Yang Aman</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Simpanan Dijamin LPS</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Paket Investasi Yang Ringan</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Bebas Biaya Administrasi</p>
          <hr class="custom-hr">
        </div>
        <div class="pb-3">
          <a href="siwajar" class="btn btn-custom-blue">REGISTER NOW</a>
        </div>
      </div>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/bangkit.jpeg') }}" alt="">
        <div class="pt-3 pb-3">
          <h2>Bangkit</h2>
        </div>
        <div class="bg-primary pb-3 pt-3">
          <h5 class="text-color-white">Tabungan Angsuran Kredit</h5>
        </div>
        <div class="pt-3">
          <p class="bi bi-check">Angsuran Kredit Dapat Dicicil</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Suku Bunga Tinggi</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Biaya Admin Rendah</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Simpanan Dijamin LPS</p>
          <hr class="custom-hr">
        </div>
        <div class="pb-3">
          <a href="bangkit" class="btn btn-custom-blue">REGISTER NOW</a>
        </div>
      </div>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/tahara.jpeg') }}" alt="">
        <div class="pb-3 pt-3">
          <h2>Tahara</h2>
        </div>
        <div class="bg-primary pb-3 pt-3">
          <h5 class="text-color-white">Tabungan Hari Raya</h5>
        </div>
        <div class="pt-3">
          <p class="bi bi-check">Investasi Dana Hari Raya Yang Aman</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Suku Bunga Tinggi</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Simpanan Dijamin LPS</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Bebas Biaya Administrasi</p>
          <hr class="custom-hr">
        </div>
        <div class="pb-3">
          <a href="tahara" class="btn btn-custom-blue">REGISTER NOW</a>
        </div>
      </div>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/tapara.jpeg') }}" alt="">
        <div class="pb-3 pt-3">
          <h2>Tapak</h2>
        </div>
        <div class="bg-primary pb-3 pt-3">
          <h5 class="text-color-white">Tabungan Pajak Kendaraan</h5>
        </div>
        <div class="pt-3">
          <p class="bi bi-check">Bayar Pajak Kendaraan Bisa Dicicil</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Simpanan Dijamin LPS</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Paket Investasi Yang Ringan</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Bebas Biaya Administrasi</p>
          <hr class="custom-hr">
        </div>
        <div class="pb-3">
          <a href="tapak" class="btn btn-custom-blue">REGISTER NOW</a>
        </div>
      </div>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="box text-center">
        <img src="{{ asset('img/tabunganku.jpeg') }}" alt="">
        <div class="pb-1 pt-1">
          <h2>TabunganKu</h2>
        </div>
        <div class="bg-primary pb-3 pt-3">
          <h5 class="text-color-white">TabunganKu</h5>
        </div>
        <div class="pt-3">
          <p class="bi bi-check">Simpanan Masa Depan Yang Terjamin</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Suku Bunga Tinggi</p>
          <hr class="custom-hr">
          <p class="bi bi-check">Bebas Biaya Admin</p>
          <hr class="custom-hr">
          <p class="bi bi-check"> Simpanan Dijamin LPS</p>
          <hr class="custom-hr">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container-xxl">
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="mb-4">Produk Deposito</h1>
    </div>
    <div class=" wow fadeInUp" data-wow-delay="0.1s">
      <div class="box-1 text-center">
        <img src="{{ asset('img/deposito.jpeg') }}" alt="">
        <div class="pt-4 pb-3 row">
          <h3 class="col-sm-3">Deposito 1 Bulan</h3>
          <h3 class="col-sm-3">Deposito 3 Bulan</h3>
          <h3 class="col-sm-3">Deposito 6 Bulan</h3>
          <h3 class="col-sm-3">Deposito 12 Bulan</h3>
        </div>
        <div class="pb-3 pt-3 bg-primary row">
          <h4 style="color: white;" class="col-sm-3">5,25% / Tahun</h4>
          <h4 style="color: white;" class="col-sm-3">5,50% / Tahun</h4>
          <h4 style="color: white;" class="col-sm-3">5,75% / Tahun</h4>
          <h4 style="color: white;" class="col-sm-3">6,00% / Bulan</h4>
        </div>
        <div class="pt-3 row">
            <p class="bi bi-check col-sm-3">Suku Bunga Tinggi</p>
            <p class="bi bi-check col-sm-3">Suku Bunga Tinggi</p>
            <p class="bi bi-check col-sm-3">Suku Bunga Tinggi</p>
            <p class="bi bi-check col-sm-3">Suku Bunga Tinggi</p>
            <hr class="custom-hr">
            <p class="bi bi-check col-sm-3">Simpanan Dijamin LPS</p>
            <p class="bi bi-check col-sm-3">Simpanan Dijamin LPS</p>
            <p class="bi bi-check col-sm-3">Simpanan Dijamin LPS</p>
            <p class="bi bi-check col-sm-3">Simpanan Dijamin LPS</p>
            <hr class="custom-hr">
          </div>
        </div>
      </div>
  </div>
</div>
@endsection