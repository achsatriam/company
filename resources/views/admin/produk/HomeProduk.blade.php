@extends('admin.layout.AppAdmin')

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
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data / Produk /</span> Katalog Produk</h4>

    <div class="card">
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <a href="{{ url('produk/Add') }}">
            <button type="button" class="btn btn-outline-success">Add</button>
          </a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Foto</th>
                <th>Nama Product</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
              <tbody>
                @foreach($produk as $item)
                  <tr>
                    <input type="hidden" class="delete_id" value="{{ $item->id }}">
                    <td>
                      <img class="zoom" src="{{ asset('post-images/'. $item->foto) }}" width="100px" alt="">
                    </td>
                    <td>
                      <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->nama_produk }}</strong>
                    </td>
                    <td>{{ $item->harga }}</td>
                    <td>
                      {{-- @if ($item->status)
                        <span class="badge bg-label-success me-1">{{ $item->status='Aktif' }}</span>
                      @else
                        <span class="badge bg-label-danger me-1">{{ $item->status='Nonaktif' }}</span>
                      @endif --}}
                      <span class="badge bg-label-success me-1">{{ $item->status }}</span>
                    </td>
                    <td style="display: flex; gap: 10px;">
                      <a href="{{ url('/admin/' . $item->id)}}">
                        <button type="button" class="btn btn-outline-info">Show</button>
                      </a>
                      <a href="{{ url('/admin/' . $item->id) . '/edit' }}">
                        <button type="button" class="btn btn-outline-primary">Edit</button>
                      </a>
                      <form method="POST" action="{{ url('admin' .  '/' . $item->id) }}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-outline-danger btndelete">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection