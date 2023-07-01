
@extends('layouts.main')

@section('container')
<div class="container my-4">
<h1 class="mb-5">Halaman Harga Barang</h1>

<div class="row mb-4">
  <div class="col-lg-6">
  <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
      Tambah Barang
  </button>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-5 g-4">

    @foreach ($prices as $hargajasa)
    <div class="col">
        <div class="card h-100">
          <img src="https://source.unsplash.com/500x400?{{ $hargajasa->kategori }}" class="card-img-top rounded-pill" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $hargajasa->judul }}</h5>
            <h6 class="card-text">{{ $hargajasa->kategori }}</h6>
            <p class="card-text">Rp{{ $hargajasa->harga }}</p>
            <a href="#" class="btn btn-primary">Beli</a>
          </div>
        </div>
      </div>
    @endforeach

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="kategori">Kategori Barang</label>
            <input type="text" class="form-control" id="kategori" name="kategori">
        </div>

        <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga">
        </div>

        {{-- <div class="form-group">
          <label for="gambar">Gambar Barang</label>
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div> --}}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection



