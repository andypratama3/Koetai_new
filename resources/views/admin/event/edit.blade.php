@extends('layouts.index')
@section('title','Sponsor')
@section('content')
  <!-- Modal -->
  <div class="container-fluid">
    <div class="row">
        <form action="{{route('admin.event.update',$event->slug)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama"  placeholder="Nama" value= "{{$event->nama}}" required >
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <input type="text" class="form-control" name="desc" id="Deskripsi"  placeholder="Deskripsi" value= "{{$event->desc}}" required>
            </div>
            <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" class="form-control" name="gambar" id="gambar"  placeholder="gambar" value="{{$event->gambar}}" required>
            </div>
        </div>

        <div class="modal-footer">
        <a href="{{route('admin.event.index')}}" type="button" class="btn btn-secondary" >Close</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>

@include('layouts.script')
@endsection


