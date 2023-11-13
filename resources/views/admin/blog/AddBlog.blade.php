@extends('admin.layout.AppAdmin')

@push('admin_style')
  <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endpush

@section('blog-active', 'active open')

@section('content')
<!-- / Menu -->

<div class="layout-page">
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <ul class="navbar-nav flex-row align-items-center ms-auto">
      </ul>
    </div>
    <!-- Content -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data/ Blog/ </span> Add</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
          </div>
          <div class="card-body">
            <form action="{{ url('blog') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Blog</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_blog" class="form-control @error('nama_blog') is-invalid @enderror" value="{{ old('nama_blog') }}" id="nama_blog" autofocus/>
                    @error('nama_blog')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal blog</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" @error('nama_blog') is-invalid @enderror" value="{{ old('tanggal_blog') }}" name="tanggal_blog">
                    @error('tanggal_blog')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Show Home</label>
                <div class="col-sm-10">
                  <div class="form-check form-switch mb-2">
                    <input class="form-check-input" name="show" type="checkbox" id="switchOne" checked/>
                    <label class="form-check-label" for="flexSwitchCheckChecked"
                      ></label
                    >
                  </div>
                </div>
              </div>
              <div class="col mb-3" style="display: flex">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kategori</label>
                <div class="col-sm-10">
                    <select name="kategori_blog_id" class="form-select" value="{{ old('kategori_blog_id') }}" id="kategori_blog_id" aria-label="Default select example">
                      @foreach ($kategori_blog as $item)
                        <option value="{{ $item->id }}">{{ $item->kategori_blog }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Foto</label>
                <div class="col-sm-10">
                  <input class="form-control dropify @error('foto') is-invalid @enderror" value="{{ old('foto') }}" name="foto" type="file" id="foto" />
                  @error('foto')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" value="{{ old('deskripsi') }}" for="deskripsi">Deskripsi</label>
                <div class="col-sm-10">
                  <input id="deskripsi" class="@error('deskripsi') is-invalid @enderror" type="hidden" name="deskripsi">
                  <trix-editor input="deskripsi"></trix-editor>
                  @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" value="Save" class="btn btn-success">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  <!-- / Content -->
@endsection
@push('admin_script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
  <script>
    $('.dropify').dropify();
  </script>
@endpush