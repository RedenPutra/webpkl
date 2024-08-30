@extends('layouts.app')
@section('main')
<div class="container-xxl py-1 bg-dark">
  <div class="container  my-4 pt-5 row">
    <h2 class="display-6 text-white mb-3 animated slideInDown col-sm-9 pt-5">Simulasi</h2>
    <ul class="breadcrumb col-sm-3 pt-5">
      <li class="breadcrumb-item"><a href="/" class="fas fa-home"></a></li>
      <li class="breadcrumb-item">Simulasi</li>
      <li class="breadcrumb-item">Kredit Umum</li>
    </ul>
  </div>
</div>

<div class="container-xxl pt-5 pb-3">
  <div class="container row">
      <div class=" wow fadeInUp col-sm-6" data-wow-delay="0.1s">
        <h2 class="mb-4">Simulasi Kredit Umum</h2>
        <dl>
          <dd>
            <form onsubmit="event.preventDefault(); hitungAngsuran();">
              <label for="jumlah" class="form-label"><b>Jumlah Pinjaman :</b></label>
              <input type="number" name="jumlah" id="jumlah" class="form-control"><br>
              <label for="lama" class="form-label"><b>Jangka Waktu :</b></label>
              <input type="number" name="lama" id="lama" class="form-control"><br>
              <button type="submit" class="btn btn-custom-blue">Kalkulasi</button>
            </form>
            <script>
              function hitungAngsuran() {
                // Ambil nilai input dari form
                var jumlahPinjaman = parseFloat(document.getElementById('jumlah').value);
                var lamaPinjaman = parseFloat(document.getElementById('lama').value);
                var sukuBungaBulanan = 0.02; // Suku bunga 2%
            
                // Hitung angsuran bulanan menggunakan rumus angsuran tetap
                var i = sukuBungaBulanan;
                var n = lamaPinjaman;
                var A = (jumlahPinjaman * i * Math.pow(1 + i, n)) / (Math.pow(1 + i, n) - 1);

                // Bulatkan hasil angsuran ke atas
                var angsuranBulat = Math.ceil(A);
        
                // Format hasil angsuran dalam format mata uang
                var jumlahFormat = jumlahPinjaman.toLocaleString('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 2 });
                var angsuranFormat = angsuranBulat.toLocaleString('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 2 });

                // Tampilkan hasil angsuran
                document.getElementById('jml').innerText = "Jumlah Pinjaman = "  + jumlahFormat;
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