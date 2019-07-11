@extends('layouts.base')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/buttons.bootstrap.min.css') }}">

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>List Buku</h2>
      <div class="clearfix"></div>
    </div>
    
    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1033px;">
    <thead>
    <tr>
      <th>ID</th>
      <th>Nama Kategori</th>
      <th>Dibuat</th>
      <th>Aksi</th>
    </tr>
    </thead>

    <tbody>
    @foreach($categories as $c)
    <tr>
      <td>{{ $c->id }}</td>
      <td>{{ $c->name }}</td>
      <td>{{ $c->created_at }}</td>
      <td>{{ $c->name }}</td>
    </tr>
    @endforeach
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
        <h4 class="modal-title">Tambah Kategoru Buku</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('book-categories.add') }}" method="POST" id="form">
        @csrf
          <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Kategori">
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