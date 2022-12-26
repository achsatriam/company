@extends('admin.layout.AppAdmin')

@push('admin_style')
  <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endpush

@section('catalog-active', 'active open')

@section('content')
<!-- / Menu -->

<div class="layout-page">
  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <ul class="navbar-nav flex-row align-items-center ms-auto">
    </ul>
  </div>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data/ Produk/</span> Edit</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
      </div>
      <div class="card-body">
        <form action="{{ url('produk/update',  $produk->id )  }}" method="post" enctype="multipart/form-data">
          {!! csrf_field() !!}
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
              @if (($produk->status)=='Nonaktif')
              <div class="form-check form-switch mb-2">
                <input class="form-check-input @error('status') is-invalid @enderror" name="status" value="{{ ($produk->status) }}" type="checkbox" id="switchOne"   />
                <label class="form-check-label" for="flexSwitchCheck"
                  ></label
                >
              @else
              <div class="form-check form-switch mb-2">
                <input class="form-check-input @error('status') is-invalid @enderror" name="status" value="{{ ($produk->status) }}" type="checkbox" id="switchOne" checked/>
                <label class="form-check-label" for="flexSwitchCheck"
                  ></label
                >
              @endif
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Show Home</label>
            <div class="col-sm-10">
              @if (($produk->show)=='Nonaktif')
              <div class="form-check form-switch mb-2">
                <input class="form-check-input @error('show') is-invalid @enderror" name="show" value="{{ old ('show', $produk->show) }}" type="checkbox" id="switchOne"   />
                <label class="form-check-label" for="flexSwitchCheck  "
                  ></label
                >
              @else
              <div class="form-check form-switch mb-2">
                <input class="form-check-input @error('show') is-invalid @enderror" name="show" value="{{ old ('show', $produk->show) }}" type="checkbox" id="switchOne" checked/>
                <label class="form-check-label" for="flexSwitchCheck  "
                  ></label
                >
              @endif
              </div>
            </div>
          </div>
          <div class="col mb-3" style="display: flex">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kategori</label>
            <div class="col-sm-10">
                <select name="kategori_produk_id" class="form-select" value="{{ old('kategori_produk_id') }}" id="kategori_produk_id" aria-label="Default select example">
                <option value="{{ $produk->kategori_produk }}">{{ $produk->kategori_produk->kategori_produk }}</option>

                @foreach ($kategori_produk as $item)
                  <option value="{{ $item->id }}">{{ $item->kategori_produk }}</option>
                @endforeach
                </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Foto</label>
            <div class="col-sm-10">
              <input class="form-control dropify @error('foto') is-invalid @enderror" data-default-file="{{ asset('post-images/'. $produk->foto) }}" name="foto" type="file" id="foto" onchange="previewImage()"/>
                @error('foto')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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