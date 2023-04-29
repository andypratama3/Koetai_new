@extends('layouts.index')
@section('title','Sponsor')
@section('content')
  <!-- Modal -->
  <div class="container-fluid">
    <div class="row">
        <form action="{{route('admin.sponsor.update',$sponsor->slug)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama"  placeholder="Nama" value= "{{$sponsor->nama}}" required >
            </div>
            <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" class="form-control" name="gambar" id="gambar"  placeholder="gambar" value="{{$sponsor->gambar}}" required>
            </div>
        </div>

        <div class="modal-footer">
        <a href="{{route('admin.sponsor.index')}}" type="button" class="btn btn-secondary" >Close</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>

@include('layouts.script')
@endsection


