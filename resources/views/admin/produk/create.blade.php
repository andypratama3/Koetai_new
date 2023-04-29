@extends('layouts.index')
@section('title','Marchent')
@section('titleurl','Marchent')
@section('content')
    <center>
        <h5 class="modal-title">Tambah Data</h5>
    </center>
        <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="row mb-3">
                <div class="form-group">
                    <label for="">Nama Produk<code>*</code></label>
                    <input type="text" name="nama" class="form-control" id="nama"  placeholder="Nama Produk">
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select id="" class="form-control" name="kategori_id">
                        <i class="bi bi-arrow"></i>
                        <option value="disabled">Silahkan Pilih Kategori</option>
                        @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group">
                    <label for="">Harga</label>
                    {{-- <span class="input-group-text" id="inputGroupPrepend">Rp.</span> --}}
                    <input type="number" class="form-control" name="harga" id="harga"  placeholder="Harga">
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock"  placeholder="Stock">
                </div>
            </div>
            {{-- <div class="row mb-3">
                <div class="form-group">
                    <label for="">Poto Produk</label>
                    <input type="file" class="form-control" name="poto_produk" id="poto_produk">
                </div>
            </div> --}}
        </div>

        <div class="text-center">
          <a href="/admin/marchent" type="button" class="btn btn-secondary">Close</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
@endsection
