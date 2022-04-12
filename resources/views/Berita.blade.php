@extends('layout.main')

@section('title')
  Berita
@endsection

@section('content')
  <h4 class="mb-5 my-y text-center mt-4"><strong>Latest posts</strong></h4>
  <div class="container">
    @foreach ($beritas as $berita)
    <div class="card mb-3" style="width: 18rem;">
      <img src="{{ asset('img/cikole.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $berita->judul }}</h5>
        <p class="card-text">{{ $berita->excerpt }}</p>
        <a href="/berita/{{ $berita->slug }}" class="btn btn-primary">Read more</a>
      </div>
    </div>
   @endforeach
  
@endsection