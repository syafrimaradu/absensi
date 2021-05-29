@extends('layouts.admin')

@section('title')
    Absensi | Designation
@endsection

@section('title-page')
  <!-- <h4 class="page-title">Judul Halamans</h4> -->
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-12 d-flex align-items-center justify-content-between">
            <h4 class="page-title">Designation</h4>
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
                            <table id="table-designation" class="table dataTable no-footer" role="grid" aria-describedby="tabledesignation_info">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>No. Of Employe</th>
                                    <th>Actions</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Syafri Maradu Manurung</td>
                                    <td>Finance</td>
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
    @include('apps.admin.hrm.designation.modals._designation')
@endsection

@section('footer-scripts')
    <script>
        $(document).ready(function () {
            // Create Data Table
            $('#table-designation').DataTable();

            // Modal Add
            $('#add').on('click', function() {
                $('#modal-designation').modal('show');
            });
        });


    </script>
@endsection
