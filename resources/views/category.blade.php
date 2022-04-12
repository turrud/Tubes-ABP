@extends('layout.main')

@section('title')
  Category Berita
@endsection

@section('content')
  <h1 class="mb-5">Kategori Berita : {{ $category }}</h1>
  <div class="container">
    @foreach ($beritas as $berita)
    <article>
        <h2><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h2>
        <p>{{ $berita->excerpt }}</p>
    </article>
   @endforeach
  
@endsection