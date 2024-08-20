@extends('layouts.app')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-9 pt-5">Simulasi</h2>
    <ul class="breadcrumb col-sm-3 pt-5">
      <li class="breadcrumb-item fas fa-home"></li>
      <li class="breadcrumb-item">Simulasi</li>
      <li class="breadcrumb-item">Kredit Umum</li>
    </ul>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container row">
      <div class=" wow fadeInUp col-sm-6" data-wow-delay="0.1s">
        <h2 class="mb-4">Simulasi Kredit Umum</h2>
        {{-- <dl>
          <dd>
            <form action="" method="POST">
              <label for="jumlah">Jumlah Pinjaman :</label>
              <input type="text" name="jumlah" id="" class="form-control"><br>
              <label for="lama">Jangka Waktu :</label>
              <input type="text" name="lama" id="" class="form-control"><br>
              <input type="submit" name="btn" class="btn btn-custom-blue" value="kalkulasi">
            </form>
          </dd>
        </dl> --}}
      </div>
      <div class=" wow fadeInUp col-sm-6" data-wow-delay="0.1s">
        <h2 class="mb-4">Syarat Dan Ketentuan</h2>
        <ul>
          <li>Jumlah Pinjaman Diterima Belum Termasuk Potongan Provisi</li>
          <li>Jumlah Pinjaman Diterima Belum Termasuk Asuransi</li>
          <li>Biaya Potongan Provisi Dapat Nego</li>
          <li>Usia Lebih Dari 60 Tahun Tidak Dapat Dipesertakan Asuransi</li>
        </ul>
      </div>
  </div>
</div>
@endsection