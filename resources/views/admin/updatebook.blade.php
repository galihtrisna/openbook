@extends('layouts.admin')
@section('content')
<section class="p-3">
        <header>
          <h3>Edit Buku</h3>
          <p>Menambahkan Data Buku</p>
        </header>
        <div>
            <form action="{{route('book.update')}}" method="post" enctype="multipart/form-data">
        @csrf

<div class="mb-3">
  <label for="judul" class="form-label">Judul Buku</label>
  <input type="text" class="form-control" id="judul" name="judul" required value="{{$books->judul}}">
</div>

<div class="mb-3">
  <label for="tahun" class="form-label">Tahun</label>
  <input type="number" class="form-control" id="tahun" min="1800" max="2099" name="tahun" required value="{{$books->tahun}}">
</div>

<div class="mb-3">
  <label for="penulis" class="form-label">Penulis</label>
  <input type="text" class="form-control" id="penulis" name="penulis" required value="{{$books->penulis}}">
</div>

<div class="mb-3">
  <label for="penerbit" class="form-label">Penerbit</label>
  <input type="text" class="form-control" id="penerbit" name="penerbit" required value="{{$books->penerbit}}">
</div>

<div class="mb-3">
  <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
  <input type="number" class="form-control" id=jumlah_halaman" min="1" name="jumlah_halaman" required value="{{$books->jumlah_halaman}}">
</div>

<div class="mb-3">
    <label for="kategori" class="form-label">Kategori</label>
<select class="form-select" aria-label="Default select example" id="kategori" name="kategori" required>
  <option selected value="{{$books->kategori}}">{{$books->kategori}}</option>
  <option value="fiksi">Fiksi</option>
  <option value="sejarah">Sejarah</option>
  <option value="sains">Sains</option>
</select>
</div>

<div class="mb-3">
  <label for="ISBN" class="form-label">ISBN</label>
  <input type="number" class="form-control" id="ISBN" name="ISBN" required value="{{$books->ISBN}}">
</div>

<div class="mb-3">
  <label for="sinopsis" class="form-label">Sinopsis</label>
  <textarea class="form-control" id="sinopsis" rows="3" name="sinopsis" required>{{$books->sinopsis}}</textarea>
</div>
<input type="hidden" value="{{ $books->id }}" id="id" name="id" >
<div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="submit">Simpan</button>
</div>

    </form>
        </div>
</section>
@endsection