@extends('layouts.admin')

@section('title')
    Absensi | Shift
@endsection

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
                        <div class="col-sm-12">
                            <table id="table-shift" class="table dataTable no-footer" role="grid" aria-describedby="tableshift_info">
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
    @include('apps.admin.attendance.shift.modals._shift')
@endsection

@section('footer-scripts')
    <script>
        $(document).ready(function () {
            // Create Data Table
            $('#table-shift').DataTable();

            // Modal Add
            $('#add').on('click', function() {
                $('#modal-shift').modal('show');
            });
        });


    </script>
@endsection


