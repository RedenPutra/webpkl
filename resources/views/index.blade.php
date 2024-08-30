@extends('layouts.app')
@section('main')
<div class="slideshow-container">
  <div class="mySlides">
    <img src="{{ asset('img/sibarokah.jpeg') }}" alt="Responsive Image" class="slide-image pt-5">
  </div>
  <div class="mySlides">
    <img src="{{ asset('img/siwajar.jpeg') }}" alt="Responsive Image" class="slide-image pt-5">
  </div>
  <div class="mySlides">
    <img src="{{ asset('img/bangkit.jpeg') }}" alt="Responsive Image" class="slide-image pt-5">
  </div>
</div>

  {{-- Table Start --}}
  <div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class=" wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-4">Suku Bunga</h1>
        </div>
        <table class="table wow fadeInUp" data-wow-delay="0.1s">
            <tbody>
                <tr>
                  <td>
                    BI Rate
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    3.50 %
                  </td>
                   <td>
                    TAHARA
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    6.00 %
                  </td>
                </tr>
                <tr>
                  <td>
                    LPS BPR Rate
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    6.75 %
                  </td>
                   <td>
                    TAPAK
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    6.00 %
                  </td>
                  </tr>
                <tr>
                  <td>
                    Tabunganku
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    4.00 %
                  </td>
                   <td>
                    Deposito 1 BL
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    5.25 %
                  </td>
                </tr>
                 <tr>
                  <td>
                    Tabungan BANGKIT
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    3.00 %
                  </td>
                  <td>
                    Deposito 3 BL
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    5.50 %
                  </td>
                </tr>
                  </tr>
                 <tr>
                  <td>
                    Tabungan Sibarokah
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    6.00 %
                  </td>
                   <td>
                    Deposito 6 BL
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    5.75 %
                  </td>
                </tr>
                 <tr>
                  <td>
                    Tabungan Siwajar
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    6.00 %
                  </td>
                    <td>
                    Depostio 12 BL
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    6.00 %
                  </td>
                </tr>
              </tbody>
        </table>
    </div>
  </div>
  {{-- Table End --}}
  
@endsection