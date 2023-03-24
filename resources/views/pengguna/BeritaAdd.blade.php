@extends('layouts.master')

@section('content') 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Berita
        <small>Tambah Berita</small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Tambah Berita</li>
      </ol>
    </section>

    
    <section class="content">

    <form method="POST" action="{{ url('data/Berita') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-7 offset-3 mt-4">
          <div class="card-body">
              <div class="form-group">
                  <label>Judul</label>
                  <input type="text" name="judul" class="form-control" style="width: 700px">
              </div>
          </div>
        </div>

        <div class="col-md-7 offset-3 mt-4">
          <div class="card-body">
              <div class="form-group">
                  <label>Slug</label>
                  <input type="text" name="slug" class="form-control" style="width: 700px">
              </div>
          </div>
        </div>

        <div class="col-md-7 offset-3 mt-4">
          <div class="card-body">
              <div class="form-group">
                <label >Pilih Kategori:</label>
                <select class="form-control" name="idk">
                    <option hidden value="">--Pilih Kategori--</option>
                    @foreach ($kategori as $kat)
                    <option value="{{ $kat->idkat }}">{{ $kat->nama }}</option>
                    @endforeach
                </select>
              </div>
          </div>
        </div>

            {{-- <div class="col-md-7 offset-3 mt-4">
              <div class="card-body">
                <label for="isi">Isi</label>
                  <form method="post" action="" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <textarea class="ckeditor form-control" name="isi" id="my-editor" cols="30" rows="10"></textarea>
                      </div>
                  </form>
              </div>
            </div> --}}
          <div class="row" style="padding-left: 15px">
          <div class="col-md-6 offset-3 mt-4">
            <div class="card-body">
              <label>Isi</label>
                    <div class="form-group">
                        <textarea class="form-control" name="isi" " cols="30" rows="10"></textarea>
                    </div>
            </div>
          </div>
          <div class="col-md-2 offset-3 mt-4">
            <div class="card-body">                      
              <label for="image">Cari Gambar</label>
                    <div class="form-group">
                      <input type="file" name="image" class="form-control-file">    
                    </div>
            </div>
          </div>
        </div>

            <div class="col-md-7 mt-4">
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/berita" class="btn btn-info btn-sm">Kembali</a>
              </div>
            </div>
        </div>
    </form>


</section>


@endsection

@push('scripts')
{{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
    CKEDITOR.replace('my-editor', options);
    </script> --}}
@endpush