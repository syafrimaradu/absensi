@extends('layouts.admin')

@section('title')
    Absensi | Employe
@endsection

@section('title-page')
  <!-- <h4 class="page-title">Judul Halamans</h4> -->
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-12 d-flex align-items-center justify-content-between">
            <h4 class="page-title">Employe</h4>
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
                            <table id="table-employe" class="table dataTable no-footer" role="grid" aria-describedby="tableemploye_info">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Addres</th>
                                    <th>Shift</th>
                                    <th>Position</th>
                                    <th>Actions</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Syafri Maradu Manurung</td>
                                    <td>Finance</td>
                                    <td>Active</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                              
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
    @include('apps.admin.hrm.employe.modals._employe')
@endsection

@section('footer-scripts')
    <script>
        $(document).ready(function () {
            // Create Data Table
            $('#table-employe').DataTable();

            // Modal Add
            $('#add').on('click', function() {
                $('#modal-employe').modal('show');
            });
        });


    </script>
@endsection
