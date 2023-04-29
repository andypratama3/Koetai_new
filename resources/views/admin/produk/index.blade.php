@extends('layouts.index')
@section('title','produk')
@section('titleurl','produk')
@section('content')


  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h1 class="box-title text-center">
                </h1>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">
                        <a type="button" class="btn btn-primary float-end btn-sm" href="/admin/produk/create">
                            Tambah Data
                            </a>
                      </h5>

                      <!-- Default Table -->
                      <table class="table text-center">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $item)
                            <tr>
                                <td row="scope">{{$no++}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{ $item->kategori->nama }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->stock }}</td>
                                <td>
                                    <a href="{{route('admin.produk.edit',$item->slug)}}" class="btn btn-primary"><i class="fa fa-pencil-alt"> Edit</i> </a>
                                    <a href="#" data-id="{{ $item->slug }}" class="btn btn-danger delete" title="Hapus">
                                        <form action="{{ route('admin.produk.destroy', $item->slug) }}" id="delete-{{ $item->slug }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        <i class="fa fa-trash-alt"> Delete</i>
                                    </a>
                                </td>
                                {{-- <td>@Genelia</td>
                                <td>admin</td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <!-- End Default Table Example -->
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.script')

@endsection


