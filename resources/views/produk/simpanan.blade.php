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
      <h1 class="mb-4">Produk Tabungan</h1>
    </div>
    <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
      <div class="team-item-1 text-center rounded-0 overflow-hidden">
        <img src="{{ asset('img/sibarokah.jpeg') }}" alt="" width="400px" class="img-fluid">
        <div class="pt-4 pb-3">
          <h2>SiBarokah</h2>
        </div>
        <div class="pb-3 pt-3 bg-primary">
          <h5 style="font-size: 22px" class="text-color-white">Simpanan Sukabumi Mubarokah</h5>
        </div>
        <div class="pt-3">
            <p class="bi bi-check">Tabungan Rasa Investasi</p>
            <hr>
            <p class="bi bi-check">Suku Bunga Tinggi</p>
            <hr>
            <p class="bi bi-check">Simpanan Dijamin LPS</p>
            <hr>
            <p style="font-size: 14px" class="bi bi-check">Biaya Admin Bulanan Rendah hanya Rp. 5.000,-</p>
            <hr>
          </div>
          <div>
            <a href="sibarokah" class="btn btn-custom-blue rounded-0">REGISTER NOW</a>
          </div>
        </div>
      </div>
      <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/siwajar.jpeg') }}" alt="" width="400px" class="img-fluid">
          <div class="pt-4 pb-3">
            <h2>SiWajar</h2>
          </div>
          <div class="pb-3 pt-3 bg-primary">
            <h5 style="font-size: 22px" class="text-color-white">Simpanan Wajib Belajar</h5>
          </div>
          <div class="pt-3">
            <p class="bi bi-check">Investasi Dana Pendidikan Yang Aman</p>
            <hr>
            <p class="bi bi-check">Simpanan Dijamin LPS</p>
            <hr>
            <p class="bi bi-check">Paket Investasi Yang Ringan</p>
            <hr>
            <p style="font-size: 14px" class="bi bi-check">Bebas Biaya Administrasi</p>
            <hr>
          </div>
          <div>
            <a href="siwajar" class="btn btn-custom-blue rounded-0">REGISTER NOW</a>
          </div>
        </div>
      </div>
      <div class=" wow fadeInUp col-sm-4" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/bangkit.jpeg') }}" alt="" width="400px" class="img-fluid">
          <div class="pt-4 pb-3">
            <h2>Bangkit</h2>
          </div>
          <div class="pb-3 pt-3 bg-primary">
            <h5 style="font-size: 22px" class="text-color-white">Tabungan Angsuran Kredit</h5>
          </div>
          <div class="pt-3">
            <p class="bi bi-check">Angsuran Kredit Dapat Dicicil</p>
            <hr>
            <p class="bi bi-check">Suku Bunga Tinggi</p>
            <hr>
            <p class="bi bi-check">Biaya Admin Rendah</p>
            <hr>
            <p style="font-size: 14px" class="bi bi-check">Simpanan Dijamin LPS</p>
            <hr>
          </div>
          <div>
            <a href="bangkit" class="btn btn-custom-blue rounded-0">REGISTER NOW</a>
          </div>
        </div>
      </div>
      <div class=" wow fadeInUp col-sm-4 pt-3" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/tahara.jpeg') }}" alt="" width="400px" class="img-fluid">
          <div class="pt-4 pb-3">
            <h2>Tahara</h2>
          </div>
          <div class="pb-3 pt-3 bg-primary">
            <h5 style="font-size: 22px" class="text-color-white">Tabungan Hari Raya</h5>
          </div>
          <div class="pt-3">
            <p class="bi bi-check">Investasi Dana Hari Raya Yang Aman</p>
            <hr>
            <p class="bi bi-check">Suku Bunga Tinggi</p>
            <hr>
            <p class="bi bi-check">Simpanan Dijamin LPS</p>
            <hr>
            <p style="font-size: 14px" class="bi bi-check">Bebas Biaya Administrasi</p>
            <hr>
          </div>
          <div>
            <a href="tahara" class="btn btn-custom-blue rounded-0">REGISTER NOW</a>
          </div>
        </div>
      </div>
      <div class=" wow fadeInUp col-sm-4 pt-3" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/tapara.jpeg') }}" alt="" width="400px" class="img-fluid">
          <div class="pt-4 pb-3">
            <h2>Tapak</h2>
          </div>
          <div class="pb-3 pt-3 bg-primary">
            <h5 style="font-size: 22px" class="text-color-white">Tabungan Pajak Kendaraan</h5>
          </div>
          <div class="pt-3">
            <p class="bi bi-check">Bayar Pajak Kendaraan Bisa Dicicil</p>
            <hr>
            <p class="bi bi-check">Simpanan Dijamin LPS</p>
            <hr>
            <p class="bi bi-check">Paket Investasi Yang Ringan</p>
            <hr>
            <p style="font-size: 14px" class="bi bi-check">Bebas Biaya Administrasi</p>
            <hr>
          </div>
          <div>
            <a href="tapak" class="btn btn-custom-blue rounded-0">REGISTER NOW</a>
          </div>
        </div>
      </div>
      <div class=" wow fadeInUp col-sm-4 pt-3" data-wow-delay="0.1s">
      <div class="team-item-1 text-center rounded-0 overflow-hidden">
        <img src="{{ asset('img/tabunganku.jpeg') }}" alt="" width="380px" height="200px" class="img-fluid">
        <div class="pt-2 pb-2">
          <h2>TabunganKu</h2>
        </div>
        <div class="pb-3 pt-3 bg-primary">
          <h5 style="font-size: 22px" class="text-color-white">TabunganKu</h5>
        </div>
        <div class="pt-3">
          <p class="bi bi-check">Simpanan Masa Depan Yang Terjamin</p>
          <hr>
          <p class="bi bi-check">Suku Bunga Tinggi</p>
          <hr>
          <p class="bi bi-check">Bebas Biaya Admin</p>
          <hr>
          <p style="font-size: 14px" class="bi bi-check"> Simpanan Dijamin LPS</p>
          <hr>
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
      <div class="team-item-1 text-center rounded-0 overflow-hidden">
        <img src="{{ asset('img/deposito.jpeg') }}" alt="" height="500px" width="1215px" class="img-fluid">
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
            <hr>
            <p class="bi bi-check col-sm-3">Simpanan Dijamin LPS</p>
            <p class="bi bi-check col-sm-3">Simpanan Dijamin LPS</p>
            <p class="bi bi-check col-sm-3">Simpanan Dijamin LPS</p>
            <p class="bi bi-check col-sm-3">Simpanan Dijamin LPS</p>
            <hr>
          </div>
        </div>
      </div>
      {{-- <div class=" wow fadeInUp col-sm-3" data-wow-delay="0.1s">
        <div class="team-item-1 text-center rounded-0 overflow-hidden">
          <img src="{{ asset('img/deposito.jpeg') }}" alt="" width="275px">
          <div class="pt-4 pb-3">
            <h3>Deposito 3 Bulan</h3>
          </div>
          <div class="pb-3 pt-3 bg-primary">
            <h4 style="color: white;">5,50% / Tahun</h4>
          </div>
          <div class="pt-3">
              <p class="bi bi-check">Suku Bunga Tinggi</p>
              <hr>
              <p class="bi bi-check">Simpanan Dijamin LPS</p>
              <hr>
            </div>
          </div>
        </div>
        <div class=" wow fadeInUp col-sm-3" data-wow-delay="0.1s">
          <div class="team-item-1 text-center rounded-0 overflow-hidden">
            <img src="{{ asset('img/deposito.jpeg') }}" alt="" width="275px">
            <div class="pt-4 pb-3">
              <h3>Deposito 6 Bulan</h3>
            </div>
            <div class="pb-3 pt-3 bg-primary">
              <h4 style="color: white;">5,75% / Tahun</h4>
            </div>
            <div class="pt-3">
                <p class="bi bi-check">Suku Bunga Tinggi</p>
                <hr>
                <p class="bi bi-check">Simpanan Dijamin LPS</p>
                <hr>
              </div>
            </div>
          </div>
          <div class=" wow fadeInUp col-sm-3" data-wow-delay="0.1s">
            <div class="team-item-1 text-center rounded-0 overflow-hidden">
              <img src="{{ asset('img/deposito.jpeg') }}" alt="" width="275px">
              <div class="pt-4 pb-3">
                <h3>Deposito 12 Bulan</h3>
              </div>
              <div class="pb-3 pt-3 bg-primary">
                <h4 style="color: white;">6,00% / Bulan</h4>
              </div>
              <div class="pt-3">
                  <p class="bi bi-check">Suku Bunga Tinggi</p>
                  <hr>
                  <p class="bi bi-check">Simpanan Dijamin LPS</p>
                  <hr>
                </div>
              </div>
            </div> --}}
  </div>
</div>
@endsection