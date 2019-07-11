@extends('layouts.base')

@section('content')
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
    <div class="count">{{ \App\User::all()->count() }}</div>
  </div>
  
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i> Total Peminjaman</span>
    <div class="count">{{ \App\Loan::all()->count() }}</div>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Mahasiswa</span>
    <div class="count green">{{ \App\User::where('status', 0)->count() }}</div>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Dosen/Karyawan</span>
    <div class="count">{{ \App\User::where('status', 1)->count() }}</div>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-book"></i> Total Buku</span>
    <div class="count">{{ \App\Book::all()->count() }}</div>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
    <div class="count">7,325</div>
  </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Statistik Peminjaman</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Settings 1</a>
          </li>
          <li><a href="#">Settings 2</a>
          </li>
        </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <div id="mainb" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1562863500766"><div style="position: relative; overflow: hidden; width: 668px; height: 350px; cursor: default;"><canvas width="668" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 668px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(0, 0, 0, 0.5); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px/21px Arial, Verdana, sans-serif; padding: 5px; left: 198.133px; top: 140px;">3?<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#26B99A"></span>sales : 7<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#34495E"></span>purchases : 9</div></div>
    </div>
  </div>
</div>
<script src="{{ URL::asset('js/echarts.min.js') }}"></script>
@endsection