@extends('layouts.master')

@section('content') 

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard {{auth()->user()->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="/Utama"><i class="fa fa-dashboard"></i>Home</a></li>
      </ol>
    </section>

    
    <section class="content">
      <h1>Selamat Datang di Halaman {{auth()->user()->name}}</h1>

    </section>
    
@endsection
