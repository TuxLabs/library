<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/buttons.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

<script src="{{ URL::asset('js/jquery.min.js') }}" ></script>

<link rel="shortcut icon" href="{{ URL::asset('img/icon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ URL::asset('img/icon.png') }}" type="image/x-icon">


<title>Library Universitas Ternak Lele</title>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('root') }}"><span class="fa fa-book"></span> Library UTL</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('root') }}">Home</a></li>
      <li class="active"><a href="#">Cari</a></li>
      <li><a href="#">Kategori</a></li>
      <li><a href="#">Semua Buku</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    @if(Auth::check())
      <li><a href="{{ route('admin') }}"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a></li>
      <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    @else
      <li><a href="{{ route('login') }}#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{ route('login') }}#signin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    @endif
    </ul>
  </div>
</nav>


<div class="container">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>List Buku</h2>
      <div class="clearfix"></div>
    </div>
    
    <table id="datatable" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1033px;">
    <thead>
    <tr>
      <th>ID</th>
      <th>Judul Buku</th>
      <th>Pengarang</th>
      <th>Stok</th>
    </tr>
    </thead>

    <tbody>
    @foreach( \App\Book::all() as $b)
    <tr>
      <td>{{ $b->id }}</td>
      <td>{{ $b->title }}</td>
      <td>{{ $b->author }}</td>
      <td>{{ $b->stock }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
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
$("#datatable").DataTable({
  responsive: !0
})

$('#btn-submit').click(function(){
  $('#form').submit();
})
</script>