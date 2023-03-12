@extends('layouts.admin')
@section('content')
<section class="p-3">
        <header>
          <h3>Detail</h3>
          <p>Detail dari buku {{$books->judul}}</p>
        </header>
        <div class="container my-4">
  <div class="row">
    <div class="col-md-4">
      <img src="{{asset('covers/'.$books->cover)}}" class="img-fluid" alt="Cover Buku">
    </div>
    <div class="col-md-8">
      <h1 class="mb-3">{{$books->judul}}</h1>
      <h5 class="mb-3">Penulis: {{$books->penulis}}</h5>
      <p class="mb-3">Sinopsis: {{$books->sinopsis}}</p>
      <p class="mb-0"><strong>Penerbit:</strong> {{$books->penerbit}}</p>
      <p class="mb-0"><strong>Tahun Terbit:</strong> {{$books->tahun}}</p>
      <p class="mb-0"><strong>ISBN:</strong> {{$books->ISBN}}</p>
      <p class="mb-0"><strong>Jumlah Halaman:</strong> {{$books->jumlah_halaman}}</p>
      <p class="mb-0"><strong>Kategori:</strong> {{$books->kategori}}</p>
    </div>
  </div>
</div>
</section>
@endsection