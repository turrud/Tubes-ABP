@extends('layout.main')


@section('content')
    <div class="container">
        <article>
            <h2>{{ $berita->judul }}</h2>
            <p>Kategori - <a href="/categories/{{ $berita->category->slug }}">{{ $berita->category->name }}</a></p>
            
                {!! $berita->isi !!}
            
        </article>
    
        <a href="/berita">Back</a>
    </div>
@endsection