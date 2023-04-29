@extends('layouts.index')
@section('title','Anggota')
@section('content')

<div class="container-fluid">
    <div class="row">
        <form action="{{route('admin.anggota.update',$anggota->slug)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama"  placeholder="Nama" value= "{{$anggota->nama}}" required >
            </div>
            <div class="form-group">
                <label for="">Devisi</label>
                <input type="text" class="form-control" name="devisi" id="Devisi"  placeholder="Devisi" value= "{{$anggota->devisi}}" required>
            </div>
            <div class="form-group">
                <label for="">poto</label>
                <input type="file" class="form-control" name="poto" id="poto"  placeholder="poto" value="{{$anggota->poto}}" required>
            </div>
            <div class="form-group">
                <label for="">instagram</label>
                <input type="text" class="form-control" name="ig" id="ig"  placeholder="ig" value= "{{$anggota->ig}}" required>
            </div>
        </div>

        <div class="modal-footer">
          <a href="{{route('admin.anggota.index')}}" type="button" class="btn btn-secondary" >Close</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection


