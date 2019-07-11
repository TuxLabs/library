@extends('layouts.base')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Button Example <small>Users</small></h2>
      <div class="clearfix"></div>
    </div>
    
    <div class="x_content">
    <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
    <div class="dt-buttons btn-group">
    <a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#">
    <span>Copy</span></a>
    <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#">
    <span>CSV</span></a>
    <a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons" href="#">
    <span>Print</span></a></div><div id="datatable-buttons_filter" class="dataTables_filter">
    <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-buttons"></label>
    </div>
    
    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1033px;">
    <thead>
    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 159px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 251px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 120px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 61px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 117px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 92px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
    </thead>

    <tbody>




    <tr role="row" class="odd">
    <td tabindex="0" class="sorting_1">Airi Satou</td>
    <td>Accountant</td>
    <td>Tokyo</td>
    <td>33</td>
    <td>2008/11/28</td>
    <td>$162,700</td>
    </tr><tr role="row" class="even">
    <td class="sorting_1" tabindex="0">Angelica Ramos</td>
    <td>Chief Executive Officer (CEO)</td>
    <td>London</td>
    <td>47</td>
    <td>2009/10/09</td>
    <td>$1,200,000</td>
    </tr><tr role="row" class="odd">
    <td tabindex="0" class="sorting_1">Ashton Cox</td>
    <td>Junior Technical Author</td>
    <td>San Francisco</td>
    <td>66</td>
    <td>2009/01/12</td>
    <td>$86,000</td>
    </tr><tr role="row" class="even">
    <td class="sorting_1" tabindex="0">Bradley Greer</td>
    <td>Software Engineer</td>
    <td>London</td>
    <td>41</td>
    <td>2012/10/13</td>
    <td>$132,000</td>
    </tr><tr role="row" class="odd">
    <td class="sorting_1" tabindex="0">Brenden Wagner</td>
    <td>Software Engineer</td>
    <td>San Francisco</td>
    <td>28</td>
    <td>2011/06/07</td>
    <td>$206,850</td>
    </tr><tr role="row" class="even">
    <td tabindex="0" class="sorting_1">Brielle Williamson</td>
    <td>Integration Specialist</td>
    <td>New York</td>
    <td>61</td>
    <td>2012/12/02</td>
    <td>$372,000</td>
    </tr><tr role="row" class="odd">
    <td class="sorting_1" tabindex="0">Bruno Nash</td>
    <td>Software Engineer</td>
    <td>London</td>
    <td>38</td>
    <td>2011/05/03</td>
    <td>$163,500</td>
    </tr><tr role="row" class="even">
    <td class="sorting_1" tabindex="0">Caesar Vance</td>
    <td>Pre-Sales Support</td>
    <td>New York</td>
    <td>21</td>
    <td>2011/12/12</td>
    <td>$106,450</td>
    </tr><tr role="row" class="odd">
    <td class="sorting_1" tabindex="0">Cara Stevens</td>
    <td>Sales Assistant</td>
    <td>New York</td>
    <td>46</td>
    <td>2011/12/06</td>
    <td>$145,600</td>
    </tr><tr role="row" class="even">
    <td tabindex="0" class="sorting_1">Cedric Kelly</td>
    <td>Senior Javascript Developer</td>
    <td>Edinburgh</td>
    <td>22</td>
    <td>2012/03/29</td>
    <td>$433,060</td>
    </tr></tbody>
    </table><div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable-buttons_previous"><a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="datatable-buttons_next"><a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div>
    </div>
  </div>
</div>
@endsection