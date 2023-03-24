@extends('layouts.master')

@section('content') 

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kategori
        <small>Tabel Data Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Data Kategori</li>
      </ol>
    </section>

    
    <section class="content">

        <a href="/KategoriAdd" class="btn btn-info btn-sm">Tambah Kategori</a>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table id="kat" class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th width="200px">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            @foreach ($kategori as $kat)
            <tr>
                <td>
                    {{ $i++ }}
                </td>
                <td>{{ $kat->nama }}</td>
                <td>
                    <a href="/KategoriEdit/{{$kat->idkat}}" class="btn btn-success">edit</a>
                    <form action="{{ route('Kategori.destroy', $kat->idkat)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data {{$kat->nama}}')">Delete</botton>
                    </form>
                </td>
            </tr>
            </tbody>
            @endforeach
            <tfoot>
                
            </tfoot>
            
        </table>

    </section>

    
@endsection
