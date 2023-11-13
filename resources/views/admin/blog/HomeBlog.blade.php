@extends('admin.layout.AppAdmin')

@section('blog-active', 'active open')

@section('content')
  <!-- / Menu -->

  <div class="layout-page">
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <ul class="navbar-nav flex-row align-items-center ms-auto">
      </ul>
    </div>
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data /</span> Blog</h4>

    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <a href="{{ url('blog/Add') }}">
          <button type="button" class="btn btn-success">Add</button>
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table table-striped" id="myTable">
            <thead>
              <tr>
                <th>Foto</th>
                <th>Nama Blog</th>
                <th>Show Home</th>
                <th>Jenis Kategori</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
              <tbody>
                @foreach($blog as $item)
                  <tr>
                    <input type="hidden" class="delete_id" value="{{ $item->id }}">
                    <td>
                      <img class="zoom" src="{{ asset('post-images/'. $item->foto) }}" width="100px" alt="">
                    </td>
                    <td>
                      <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->nama_blog }}</strong>
                    </td>
                    <td>
                      @if (($item->show)=='Aktif')
                        <span class="badge bg-label-success me-1">{{ $item->show }}</span>
                      @else
                        <span class="badge bg-label-danger me-1">{{ $item->show }}</span>
                      @endif
                    </td>
                    <td>{{ $item->kategori_blog->kategori_blog }}</td>
                    <td>
                      <div class="d-flex justify-content-center gap-2 align-items-center">
                        <a href="{{ url('/blog/' . $item->id)}}">
                          <button type="button" class="btn btn-outline-info">Show</button>
                        </a>
                        <a href="{{ url('blog/edit',  $item->id )  }}">
                          <button type="button" class="btn btn-outline-primary">Edit</button>
                        </a>
                        <form class="m-0" method="post" action="{{ url('blog' .  '/' . $item->blog) }}">
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
                          url: 'blog/' + deleteid,
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