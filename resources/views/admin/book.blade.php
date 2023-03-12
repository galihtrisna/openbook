@extends('layouts.admin')
@section('content')
<section class="p-3">
        <header>
          <h3>Books</h3>
          <p>Menampilkan Semua Data Buku</p>
        </header>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ISBN</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Tahun</th>
      <th scope="col">Penerbit</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($books as $index => $book)
    <tr>
      <td scope="row">{{$book->ISBN}}</td>
      <td>{{$book->judul}}</td>
      <td>{{$book->tahun}}</td>
      <td>{{$book->penerbit}}</td>
      <td>
        <a href="{{ route('admin.showbook', $book->id) }}"  class="btn btn-info bi bi-eye"></a>
        <a href="{{ route('admin.perbaruibook', $book->id) }}"  class="btn btn-warning bi bi-pencil-square"></a>
        <a href="{{ route('admin.deletebook', $book->id) }}" onclick="confirmWithSweetAlert(event)" class="btn btn-danger bi bi-trash3"></a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</section>
@endsection