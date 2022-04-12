@extends('layout.main')

@section('title')
  Sewa Kendaraan
@endsection

@section('content')
<header>
  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('{{ asset('img/slide/sss.png') }}');
      height: 440px;"
  >
    
  </div>
  <!-- Background image -->
</header>
  <!--Main layout-->
  <br>
  <br>
  <br>
  <div class="container">
      <section class="text-center">
          <h4 class="mb-5"><strong>Sewa Mobil & Motor</strong></h4>
  
          <div class="row" >
            <div class="col-lg-4 col-md-12 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/mobil/avanza.webp') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Toyota Avanza</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/mobil/brio.webp') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Honda Brio</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/mobil/pajeroo.webp') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Pajero Sport</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/mobil/inova.webp') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Toyota Inova</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                </div>
              </div>
            </div>
  
  
          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/motor/klx.webp') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Kawasaki KLX</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/motor/nmax.webp') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Yamaha Nmax</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/motor/scoopy.webp') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Honda Scoopy</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('img/motor/supra.webp') }}" class="img-fluid" />
                  <a href="/form-sewa">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Honda Supra X</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                </div>
              </div>
            </div>
          </div>
        </section>
  </div>
@endsection