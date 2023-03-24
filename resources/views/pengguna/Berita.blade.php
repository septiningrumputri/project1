@extends('layouts.master')

@section('content') 

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Berita
        <small>Tabel Data Berita</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Data Berita</li>
      </ol>
    </section>

    
    <section class="content">

        <a href="/beritaAdd" class="btn btn-info btn-sm">Tambah Berita</a>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table id="berita" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Kategori</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            @foreach ($Join as $join)
            <tr>

                <td>
                    {{ $i++ }}
                </td>
                <td>{{ $join->judul }}</td>
                <td>{{ $join->slug }}</td>
                <td>{{ $join->nama }}</td>
                <td>
                    <button class="btn btn-success" data-toggle="modal" data-target="#modalShowdata{{ $join->id }}">Show</button>
                    <a href="/beritaEdit/{{$join->id}}" class="btn btn-primary">edit</a>
                    <form action="{{ route('Berita.destroy', $join->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data yang berjudul {{$join->judul}}')">Delete</botton>
                    </form>
                </td>
            </tr>
            </tbody>
            @endforeach
            <tfoot>
                
            </tfoot>
            
        </table>

        <!-- Modal Show Barang-->
<div class="modal fade" id="modalShowdata{{ $join->id }}" tabindex="-1" aria-labelledby="modalShowdata" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Show Berita</h4>
    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <!--FORM Show BARANG-->
    <form action="" method="post">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <label>Judul</label>
            <input type="text" class="form-control" id="" name="" value="{{ $join->judul}}" readonly>
            </div>
            <div class="form-group">
            <label for="">Slug</label>
            <input type="text" class="form-control" id="" name="" value="{{ $join->slug}}" readonly>
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <input type="text" class="form-control" id="" name="" value="{{ $join->nama}}" readonly>
            </div>
            <div class="form-group">
                <label for="">Isi</label>
                <textarea class="form-control" name=""  cols="30" rows="10" readonly >{{ $join->isi}}</textarea>
            </div>
        </div>
    
        <div class="col-md-2">
            @if ($join->image)
            <div class="form-group">
            <label>Gambar</label>
            <img src="/image/{{ $join->image }}" width='100' height='100'>
            @else
            <P>Gambar Belum dimasukan</P>
            @endif       
            </div>                 
        </div>
    </div>
    </form>
    <!--END FORM Show BARANG-->
    </div>
    </div>
    </div>
    </div>
    <!-- End Modal Show Barang-->



    </section>
    
@endsection

