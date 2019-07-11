<head>
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<style>
    .vcenter {
        display: inline-block;
        vertical-align: middle;
        float: none;
    }

    body {
        margin-top: 10%
    }
</style>
</head>
<body>
<div class="vcenter"> 
    <div class="col-xs-8 col-xs-offset-2">
        <div style="text-align:center">
            <h1><i class="fa fa-book"></i></h1>
            <h1 style="margin-bottom:20px"> Library Universitas Ternak Lele</h1>
        </div>
        <div class="input-group">
            <div class="input-group-btn search-panel">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span id="search_concept">Contains</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#contains">Contains</a></li>
                    <li><a href="#its_equal">It's equal</a></li>
                    <li><a href="#greather_than">Greather than &gt;</a></li>
                    <li><a href="#less_than">Less than &lt; </a></li>
                    <li class="divider"></li>
                    <li><a href="#all">Anything</a></li>
                </ul>
            </div>
            <input type="hidden" name="search_param" value="contains" id="search_param">         
            <input type="text" class="form-control" name="x" placeholder="Search term...">
            <span class="input-group-btn search-panel">
                <button class="btn btn-default" type="button">Search <span class="glyphicon glyphicon-search"></span></button>
            </span>
        </div>
        <br>
        <div style="text-align:center">
        @if(Auth::check())
            <h2>Welcome {{ Auth::user()->name }} !</h2>
        @else
            <div class="btn-group flex-container">
                <a href="{{ route('login') }}#signin" class="btn btn-info">Login</a>
                <a href="{{ route('login') }}#signup" class="btn btn-primary">Register</a>
            </div>
        </div>
        @endif
        
    </div>
</div>
</body>
<script src="{{ URL::asset('js/jquery.min.js') }}" ></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" ></script>
