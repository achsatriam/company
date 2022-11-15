@extends('admin.layout.AppAdmin')

@push('admin_style')
  <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endpush

@section('content')
<ul class="menu-inner py-1">
    <li class="menu-item">
        <a href="/admin" class="menu-link">
          <i class="menu-icon tf-icons bx bx-copy"></i>
          <div data-i18n="Product">Produk</div>
        </a>
      </li>
      <li class="menu-item active open">
        <a href="/blog" class="menu-link">
          <i class="menu-icon tf-icons bx bx-detail"></i>
          <div data-i18n="Blog">Blog</div>
        </a>
      </li>
  </ul>
</aside>
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