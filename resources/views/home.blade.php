<head>
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<style>
    .vcenter {
        display: inline-block;
        vertical-align: middle;
        float: none;
        margin-top: 7%
    }

</style>
</head>
<title>Library Universitas Ternak Lele</title>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('root') }}"><span class="fa fa-book"></span> Library UTL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('root') }}">Home</a></li>
      <li><a href="{{ route('search') }}">Cari</a></li>
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
<body>
<div class="vcenter"> 
    <div class="col-xs-8 col-xs-offset-2">
        <div style="text-align:center">
            <h1><i class="fa fa-book"></i></h1>
            <h1 style="margin-bottom:20px"> Library</h1>
        </div>
        <div class="input-group">
            <div class="input-group-btn search-panel">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span id="search_concept">Anything</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <!-- <li><a href="#contains">Author</a></li>
                    <li><a href="#its_equal">Book</a></li>
                    <li class="divider"></li> -->
                    <li><a href="#all">Anything</a></li>
                </ul>
            </div>
            <input type="hidden" name="search_param" value="contains" id="search_param">         
            <input type="text" id="search-input" class="form-control" name="x" placeholder="Search term...">
            <span class="input-group-btn search-panel">
                <button class="btn btn-default" id="search-btn" type="button">Search <span class="glyphicon glyphicon-search"></span></button>
            </span>
        </div>
        <h1 style="margin-top: 20px; text-align:center">Universitas Ternak Lele</h1>
        <br>        
    </div>
</div>
</body>
<script src="{{ URL::asset('js/jquery.min.js') }}" ></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>
<script>
  $('#search-btn').click(function(){
    window.location.href = "{{ route('search-everything') }}?q="+$('#search-input').val();
  })

  $("#search-input").keypress(function(event) { 
      if (event.keyCode === 13) { 
          $("#search-btn").click(); 
      } 
  }); 
</script>
