@extends('admin.layout.AppAdmin')

@push('admin_style')
  <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endpush

@section('content')
<ul class="menu-inner py-1">
  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Produk</span>
  </li>
  <li class="menu-item active open">
    <a href="/admin" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-copy"></i>
      <div data-i18n="Produk">Produk</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item active">
        <a href="/admin" class="menu-link">
          <div data-i18n="Without menu">Katalog Produk</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="/kategori" class="menu-link">
          <div data-i18n="Without navbar">Kategori Produk</div>
        </a>
      </li>
    </ul>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Blog</span>
    </li>
    <li class="menu-item">
      <a href="/blog" class="menu-link">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div data-i18n="Blog">Blog</div>
      </a>
    </li>
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
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data/ Product/</span> Edit</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
      </div>
      <div class="card-body">
        <form action="{{ route('admin.update', $produk->id) }}" method="post" enctype="multipart/form-data">
          {!! csrf_field() !!}
          @method('PATCH')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Produk</label>
            <div class="col-sm-10">
              <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" value="{{ old ('nama_produk', $produk->nama_produk) }}" autofocus/>
              @error('nama_produk')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Harga</label>
            <div class="col-sm-10">
              <input
                type="text"
                name="harga"
                class="form-control @error('harga') is-invalid @enderror"
                value="{{ old ('harga', $produk->harga) }}"
                autofocus
              />
              @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Status</label>
            <div class="col-sm-10">
              <div class="form-check form-switch mb-2">
                <input class="form-check-input" name="status" value="{{ $produk->status }}" type="checkbox" id="switchOne"  checked/>
                <label class="form-check-label" for="flexSwitchCheckChecked"
                  ></label
                >
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Foto</label>
            <div class="col-sm-10">
              <input class="form-control dropify @error('foto') is-invalid @enderror" data-default-file="{{ asset('post-images/'. $produk->foto) }}" name="foto" type="file" id="foto" onchange="previewImage()"/>
                @error('foto')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{-- @if ($produk->foto)
                  <img id="" class="mt-3" src="{{ asset('post-images/') }}"> 
                @endif --}}
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
            <div class="col-sm-10">
              <input id="deskripsi" class="@error('deskripsi') is-invalid @enderror" value="{{ old ('deskripsi', $produk->deskripsi) }}" type="hidden" name="deskripsi">
              <trix-editor input="deskripsi"></trix-editor>
              @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" value="Save" class="btn btn-success">Update</button>
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