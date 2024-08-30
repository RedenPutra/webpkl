@extends('layouts.app')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-9 pt-5">Simulasi</h2>
    <ul class="breadcrumb col-sm-3 pt-5">
      <li class="breadcrumb-item"><a href="/" class="fas fa-home"></a></li>
      <li class="breadcrumb-item">Simulasi</li>
      <li class="breadcrumb-item">Sahabat Mikro</li>
    </ul>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container row">
      <div class=" wow fadeInUp col-sm-6" data-wow-delay="0.1s">
        <h2 class="mb-4">Simulasi Kredit Sahabat Mikro</h2>
        <dl>
          <dd>
            <form onsubmit="event.preventDefault(); hitungAngsuran();">
              <label for="jumlah" class="form-label"><b>Jumlah Pinjaman :</b></label>
              <select name="jumlah" id="jumlah" class="form-control">
                <option value="" selected disabled>Pilih</option>
                <option value="1000000">Rp. 1.000.000</option>
                <option value="2000000">Rp. 2.000.000</option>
                <option value="3000000">Rp. 3.000.000</option>
                <option value="4000000">Rp. 4.000.000</option>
                <option value="5000000">Rp. 5.000.000</option>
                <option value="6000000">Rp. 6.000.000</option>
                <option value="7000000">Rp. 7.000.000</option>
                <option value="8000000">Rp. 8.000.000</option>
                <option value="9000000">Rp. 9.000.000</option>
                <option value="10000000">Rp. 10.000.000</option>
              </select><br>
              <label for="lama" class="form-label"><b>Jangka Waktu :</b></label>
              <select name="lama" id="lama" class="form-control">
                <option value="" selected disabled>Pilih</option>
                <option value="1">1 Bulan</option>
                <option value="2">2 Bulan</option>
                <option value="3">3 Bulan</option>
                <option value="4">4 Bulan</option>
                <option value="5">5 Bulan</option>
                <option value="6">6 Bulan</option>
                <option value="7">7 Bulan</option>
                <option value="8">8 Bulan</option>
                <option value="9">9 Bulan</option>
                <option value="10">10 Bulan</option>
                <option value="11">11 Bulan</option>
                <option value="12">12 Bulan</option>
                <option value="13">13 Bulan</option>
                <option value="14">14 Bulan</option>
                <option value="15">15 Bulan</option>
                <option value="16">16 Bulan</option>
                <option value="17">17 Bulan</option>
                <option value="18">18 Bulan</option>
                <option value="19">19 Bulan</option>
                <option value="20">20 Bulan</option>
                <option value="21">21 Bulan</option>
                <option value="22">22 Bulan</option>
                <option value="23">23 Bulan</option>
                <option value="24">24 Bulan</option>
              </select><br>
              <button type="submit" class="btn btn-custom-blue">Kalkulasi</button>
            </form>
            <script>
              function hitungAngsuran() {
                // Ambil nilai input dari form
                var jumlahPinjaman = parseFloat(document.getElementById('jumlah').value);
                var lamaPinjaman = parseFloat(document.getElementById('lama').value);
                var sukuBungaBulanan = 0.005; // Suku bunga 0,5%
            
                // Hitung angsuran bulanan menggunakan rumus angsuran tetap
                var i = sukuBungaBulanan;
                var n = lamaPinjaman;
                var A = (jumlahPinjaman * i * Math.pow(1 + i, n)) / (Math.pow(1 + i, n) - 1);

                // Bulatkan hasil angsuran ke atas
                var angsuranBulat = Math.ceil(A);

                // Format hasil angsuran dalam format mata uang
                var jumlahFormat = jumlahPinjaman.toLocaleString('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 2 });
                var angsuranFormat = angsuranBulat.toLocaleString('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 });

                // Tampilkan hasil angsuran
                document.getElementById('jml').innerText = "Jumlah Pinjaman = " + jumlahFormat;
                document.getElementById('lm').innerText = "Lama Pinjaman = " + lamaPinjaman + "\tBulan";
                document.getElementById('samadengan').innerText = "____________________________________________ ( + ) ";
                document.getElementById('angsuran').innerText = "Angsuran Per Bulan = " + angsuranFormat;
                document.getElementById('card').style.display = 'block'; // Tampilkan card
   
              }
            </script><br>
            <div class="card" style="display: none" id="card">
              <h5 id="jml" class="mt-3 text-kanan"></h5>
              <h5 id="lm" class="text-kanan"></h5>
              <h5 id="samadengan" class="text-kanan"></h5>
              <h5 id="angsuran" class="text-kanan"></h5>
            </div>
          </dd>
        </dl>
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