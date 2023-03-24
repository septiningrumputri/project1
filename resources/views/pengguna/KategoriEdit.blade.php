@extends('layouts.master')

@section('content') 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data Kategori
        <small>Data Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Edit Kategori</li>
      </ol>
    </section>

    
    <section class="content">

    <form method="POST" action="/Kategori/{{$kategori->idkat}}">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input style="width: 300px" type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') ? old('nama') : $kategori->nama }}">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/Kategori/" class="btn btn-info btn-sm">Kembali</a>
            </div>

        </div>

    </form>


</section>
    
@endsection