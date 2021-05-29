@extends('layouts.admin')

@section('title')
    Absensi | Tools
@endsection

@section('title-page')
  <!-- <h4 class="page-title">Judul Halamans</h4> -->
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-12 d-flex align-items-center justify-content-between">
            <h4 class="page-title">Tools</h4>
            <div class="d-flex align-items-center">
                <div class="wrapper mr-4 d-none d-sm-block">
                    <p class="mb-0">
                        Summary for
                        <b class="mb-0"><i id="bulan">May</i> <i id="tahun">2021</i></b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-icons btn-inverse-success" id="add" data-toggle="modal" data-target="#formStaff"><i class="  fa fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="table-tools" class="table dataTable no-footer" role="grid" aria-describedby="tabletools_info">
                            <thead>
                                <tr>
                                    <th>Shift Name</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Duration</th>
                                    <th>Holidays</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>1</td> -->
                                    <td>Syafri Maradu Manurung</td>
                                    <td>CFO</td>
                                    <td>Finance</td>
                                    <td></td>
                                    <td>Active</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    @include('apps.admin.attendance.tools.modals._tools')
@endsection

@section('footer-scripts')
    <script>
        $(document).ready(function () {
            // Create Data Table
            $('#table-tools').DataTable();

            // Modal Add
            $('#add').on('click', function() {
                $('#modal-tools').modal('show');
            });
        });


    </script>
@endsection





@extends('layouts.admin')

@section('title-page')
  <!-- <h4 class="page-title">Judul Halamans</h4> -->
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-12 d-flex align-items-center justify-content-between">
        <h4 class="page-title">Shift</h4>
        <div class="d-flex align-items-center">
            <div class="wrapper mr-4 d-none d-sm-block">
                <p class="mb-0">
                    Summary for
                    <b class="mb-0"><i id="bulan">May</i> <i id="tahun">2021</i></b>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-icons btn-inverse-success" id="add" data-toggle="modal" data-target="#formStaff"><i class="  fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 table-responsive">
                        <div id="tableTools_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="tableTools_length">
                                        <label>
                                            Show
                                            <select name="tableTools_length" aria-controls="tableShift" class="form-control form-control-sm">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="-1">All</option>
                                            </select>
                                            entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="tableTools_filter" class="dataTables_filter">
                                        <label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tableTools" /></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tableTools" class="table dataTable no-footer" role="grid" aria-describedby="tableTools_info">
                                        <thead>
                                            <tr>
                                              <th>Shift Name</th>
                                              <th>Start Time</th>
                                              <th>End Time</th>
                                              <th>Duration</th>
                                              <th>Holidays</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <!-- <td>1</td> -->
                                                <td>Syafri Maradu Manurung</td>
                                                <td>CFO</td>
                                                <td>Finance</td>
                                                <td></td>
                                                <td>Active</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5"><div class="dataTables_info" id="tableTools_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="tableTools_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="tableTools_previous"><a href="#" aria-controls="tableTools" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="tableTools" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="tableTools_next"><a href="#" aria-controls="tableTools" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal --}}
@include('apps.admin.attendance.tools.modals._tools')
@endsection

<script src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>

<script>
$(document).ready(function () {
  $('#add').on('click', function() {
    $('#modal-tools').modal('show');
  });

});


</script>
