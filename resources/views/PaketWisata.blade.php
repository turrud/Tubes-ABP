@extends('layout.main')

@section('title')
  Paket Wisata
@endsection

@section('content')

  @include('layout.slide-rekomendasi')
  
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
{{-- <hr class="my-5" /> --}}

<div class="text-bold text-center mb-5">
  <h2>Detail Wisata</h2>
</div>

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/begonia.jpg') }}"
        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Paket Wisata Begonia</h2>
      <p>Harga paket Rp 300.000,00</p>
      <p>paket 2 hari:
        <br>Villa (4 tempat tidur), makan pagi, akses masuk wisata</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->


    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/asia-africa.jpg') }}"
        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Paket Wisata Asia Africa</h2>
      <p>Harga paket Rp 500.000,00</p>
      <p>paket 4 hari:
        <br>Villa (5 tempat tidur), makan pagi dan siang, akses masuk wisata</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/ciater.jpg') }}"
        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Paket Wisata Ciater</h2>
      <p?>Harga paket Rp.350.000,00</p>
      <p>paket 2 hari
        <br>pemandian air hangat 24 jam, Villa(4 tempat tidur), akses masuk wisata</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

  </div><!-- /.row -->
  <br>
  <br>
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/cikole.jpg') }}"
        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Paket Wisata Cikole</h2>
      <p>Harga paket Rp.900.000,00</p>
      <p>Paket 7 hari
        <br>Villa (4 tempat tidur), makan pagi, akses masuk tempat wisata</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

    
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/kawah-putih.jpg') }}"
        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Paket Wisata Kawah Putih</h2>
      <p>Harga paket Rp.350.000,00</p>
      <p>Paket 2 hari
        <br>Villa (4 tempat tidur), fotografer</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/lembang-zoo.jpg') }}"
        role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>

      <h2>Paket Wisata Lembang Zoo</h2>
      <p>Harga paket Rp.250.000,00</p>
      <p>Paket 2 hari
        <br>Villa (4 tempat tidur), akses masuk wisata</br>
      </p>
      <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
    </div>
  </div>
@endsection