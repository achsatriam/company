@extends('admin.layout.AppAdmin')

@section('category-active', 'active open')

@section('content')
  <!-- / Menu -->

  <div class="layout-page">
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <ul class="navbar-nav flex-row align-items-center ms-auto">
      </ul>
    </div>
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data / Produk / </span> Kategori</h4>

    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <a href="{{ url('kategori_produk/Add') }}">
          <button type="button" class="btn btn-success">Add</button>
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table table-striped" id="myTable">
            <thead>
              <tr>
                <th>Kategori</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
              <tbody>
                @foreach($kategori_produk as $item)
                  <tr>
                    <input type="hidden" class="delete_id" value="{{ $item->id }}">
                    <td>
                      <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->kategori_produk }}</strong>
                    </td>
                    <td>
                      <div class="d-flex justify-content-center gap-2 align-items-center">
                        <a href="{{ url('/kategori_produk/' . $item->id)}}">
                          <button type="button" class="btn btn-outline-info">Show</button>
                        </a>
                        <a href="{{ url('kategori_produk/edit',  $item->id )  }}">
                          <button type="button" class="btn btn-outline-primary">Edit</button>
                        </a>
                        <form class="m-0" method="post" action="{{ url('kategori_produk' .  '/' . $item->kategori_produk) }}">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-outline-danger btndelete">Delete</button>
                        </form>
                      </div>
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
<script src="{{ asset('assets\js\jquery-3.6.1.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(document).ready(function () {

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('.btndelete').click(function (e) {
          e.preventDefault();

          var deleteid = $(this).closest("tr").find('.delete_id').val();

          swal({
                  title: "Apakah anda yakin?",
                  text: "Setelah dihapus, Anda tidak dapat memulihkan data ini lagi!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                  if (willDelete) {

                      var data = {
                          "_token": $('input[name=_token]').val(),
                          'id': deleteid,
                      };
                      $.ajax({
                          type: "DELETE",
                          url: 'kategori_produk/' + deleteid,
                          data: data,
                          success: function (response) {
                              swal(response.status, {
                                      icon: "success",
                                  })
                                  .then((result) => {
                                      location.reload();
                                  });
                          }
                      });
                  }
              });
      });
  });
  </script>