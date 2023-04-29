@extends('layouts.index')
@section('title','sponsor')
@section('titleurl','Sponsor')

@section('content')

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('admin.sponsor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nama sponsor<code>*</code></label>
                <input type="text" name="nama" class="form-control" id="nama"  placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label for="">gambar</label>
                <input type="file" class="form-control" name="gambar" id="gambar"  placeholder="gambar" required>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h1 class="box-title text-center">

                </h1>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">
                        <button type="button" class="btn btn-primary float-end btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Tambah Data
                            </button>
                      </h5>

                      <!-- Default Table -->
                      <table class="table text-center">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($sponsor as $item)
                            <tr>
                                <td row="scope">{{$no++}}</td>
                                <td>{{$item->nama}}</td>
                                <td><img style="width : 80px ; height: 80px" src="{{asset('foto_sponsor/'.$item->gambar)}}" class="" alt=""></td>
                                <td>
                                    <a href="{{route('admin.sponsor.edit',$item->slug)}}" class="btn btn-primary"><i class="fa fa-pencil-alt"> Edit</i> </a>
                                    <a href="#" data-id="{{ $item->slug }}" class="btn btn-danger delete" title="Hapus">
                                        <form action="{{ route('admin.sponsor.destroy', $item->slug) }}" id="delete-{{ $item->slug }}" method="POST" enctype="multipart/form-data">
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


