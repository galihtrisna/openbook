@extends('layouts.admin')
@section('content')
<section class="p-3">
        <header>
          <h3>Tambah Buku</h3>
          <p>Menambahkan Data Buku</p>
        </header>
        <div>
            <form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
        @csrf

<div class="mb-3">
  <label for="judul" class="form-label">Judul Buku</label>
  <input type="text" class="form-control" id="judul" name="judul" required>
</div>

<div class="mb-3">
  <label for="tahun" class="form-label">Tahun</label>
  <input type="number" class="form-control" id="tahun" min="1800" max="2099" name="tahun" required>
</div>

<div class="mb-3">
  <label for="penulis" class="form-label">Penulis</label>
  <input type="text" class="form-control" id="penulis" name="penulis" required>
</div>

<div class="mb-3">
  <label for="penerbit" class="form-label">Penerbit</label>
  <input type="text" class="form-control" id="penerbit" name="penerbit" required>
</div>

<div class="mb-3">
  <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
  <input type="number" class="form-control" id=jumlah_halaman" min="1" name="jumlah_halaman" required>
</div>

<div class="mb-3">
    <label for="kategori" class="form-label">Kategori</label>
<select class="form-select" aria-label="Default select example" id="kategori" name="kategori" required>
  <option selected>Pilih kategori</option>
  <option value="fiksi">Fiksi</option>
  <option value="sejarah">Sejarah</option>
  <option value="sains">Sains</option>
</select>
</div>

<div class="mb-3">
  <label for="ISBN" class="form-label">ISBN</label>
  <input type="number" class="form-control" id="ISBN" name="ISBN" required>
</div>

<div class="mb-3">
  <label for="sinopsis" class="form-label">Sinopsis</label>
  <textarea class="form-control" id="sinopsis" rows="3" name="sinopsis" required></textarea>
</div>

<div class="mb-3">
  <label for="cover" class="form-label">Gambar Cover Buku</label>
  <input class="form-control" type="file" id="cover" name="cover" required>
</div>

<div class="mb-3">
  <label for="ebook" class="form-label">File E-Book</label>
  <input class="form-control" type="file" id="ebook" name="ebook" required>
</div>

<div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="submit">Simpan</button>
</div>

    </form>
        </div>
</section>
@endsection