@extends('layouts.master')

@section('content') 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Kategori
        <small>Data Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Tambah Kategori</li>
      </ol>
    </section>

    
    <section class="content">

    <form method="POST" action="{{url('data/Kategori')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" name="nama" class="form-control" style="width: 300px">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/Kategori" class="btn btn-info btn-sm">Kembali</a>
            </div>

        </div>

    </form>


</section>
    

@endsection