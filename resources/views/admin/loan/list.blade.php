@extends('layouts.base')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/buttons.bootstrap.min.css') }}">

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>List Peminjaman Buku</h2>
      <div class="clearfix"></div>
    </div>
    
    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1033px;">
    <thead>
    <tr>
      <th>ID</th>
      <th>Judul Buku</th>
      <th>Peminjam</th>
      <th>Awal Peminjaman</th>
      <th>Estimasi Pengembalian</th>
      <th>Buku Kembali</th>
      <th>Aksi</th>
    </tr>
    </thead>

    <tbody>
    @foreach($loans as $l)
    <tr>
      <td>{{ $l->id }}</td>
      <td>{{ $l->getBook()->title }}</td>
      <td>{{ $l->getUser()->name }}</td>
      <td>{{ $l->start_at }}</td>
      <td>{{ $l->limit_at }}</td>
      <th>{{ $l->end_at }}</th>
      <th>{{ $l->stock }}</th>
    @endforeach
    </tr>
    </tbody>
    </table>
    </div>
  </div>
</div>

<!-- Modal for add book -->
<div id="add-modal-form" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Peminjaman Buku</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('loans.add') }}" method="POST" id="form">
        @csrf
          <div class="form-group">
            <select class="form-control" name="user_id" id="user_id">
              <option value="">--- Pilih Peminjam ---</option>
              @foreach(\App\User::all() as $c)
              <option value="{{ $c->id }}">{{ $c->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="book_id" id="book_id">
              <option value="">--- Pilih Buku ---</option>
              @foreach(\App\Book::all() as $c)
              <option value="{{ $c->id }}">{{ $c->title }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="fine" placeholder="Denda Perhari Jika Terlambat">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="btn-group">
          <button type="button" id="btn-submit" class="btn btn-success" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="{{ URL::asset('js/jquery.min.js') }}" ></script>
<script src="{{ URL::asset('js/jquery.dataTables.min.js')  }} " ></script>
<script src="{{ URL::asset('js/dataTables.bootstrap.min.js')  }} " ></script>
<script src="{{ URL::asset('js/dataTables.buttons.min.js')  }} " ></script>
<script src="{{ URL::asset('js/buttons.bootstrap.min.js')  }} " ></script>
<script src="{{ URL::asset('js/buttons.flash.min.js')  }} " ></script>
<script src="{{ URL::asset('js/buttons.html5.min.js')  }} " ></script>
<script src="{{ URL::asset('js/buttons.print.min.js')  }} " ></script>
<script src="{{ URL::asset('js/jszip.min.js')  }} "></script>
<script src="{{ URL::asset('js/pdfmake.min.js')  }} "></script>
<script src="{{ URL::asset('js/vfs_fonts.js')  }} "></script>

<script>
$("#datatable-buttons").DataTable({
  dom: "Bfrtip",
  buttons: [
    {
      extend: "copy",
      className: "btn-sm"
    }, {
      extend: "csv",
      className: "btn-sm"
    }, {
      extend: "excel",
      className: "btn-sm"
    }, {
      extend: "pdfHtml5",
      className: "btn-sm"
    }, {
      extend: "print",
      className: "btn-sm"
    }, {
      text: '+',
      action: function(){
        $('#add-modal-form').modal('show');
      },
      className: "btn-sm"
    }
  ],
  responsive: !0
})

$('#btn-submit').click(function(){
  $('#form').submit();
})
</script>
@endsection