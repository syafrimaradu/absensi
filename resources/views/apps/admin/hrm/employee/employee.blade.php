@extends('layouts.admin')

@section('title')
    Absensi | Employees
@endsection

@section('title-page')
  <!-- <h4 class="page-title">Judul Halamans</h4> -->
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-12 d-flex align-items-center justify-content-between">
            <h4 class="page-title">Employees</h4>
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
                            <table id="table-employee" class="table dataTable no-footer" role="grid" aria-describedby="tableemploye_info">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Addres</th>
                                    <th>Position</th>
                                    <th>Actions</th>  
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    @include('apps.admin.hrm.employee.modals._employee')
    {{-- Modal --}}
    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Konfirmasi</h4>
                </div>
                <div class="modal-body">
                    <h5 align="center" id="confirm">Apakah anda yakin ingin menghapus data ini?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button" id="ok_button" class="btn btn-sm btn-outline-danger">Hapus</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-scripts')
<script>
    $(document).ready(function () {
        // Create Data Table
        $('#table-employee').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.hrm.employee') }}",
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'gender', name: 'gender'},
                {data: 'address', name: 'address'},
                {data: 'position', name: 'position'},
                {data: 'action', name: 'action'},
            ]
        });

        // Modal Add
        $('#add').on('click', function() {
            // Change Title
            $('.modal-title').html('Add Employee');
            // Clear Form Control after triggered
            $('.form-control').val('');

            // Change Text Button Submit
            // $('#button-submit')
            //     .removeClass('btn-info')
            //     .addClass('btn-success')
            //     .html('Save');

            // change action 
            $('#action').val('add');
            
            // show modal
            $('#modal-employe').modal('show');
        });


        // Submit Event
        $('#form-employee').on('submit', function (event) {
            event.preventDefault();
            let url = '';

            if ($('#action').val() == 'add') {
                url = "{{ route('admin.hrm.employee.store') }}";
            }
            if ($('#action').val() == 'edit') {
                url = "{{ route('admin.hrm.employee.update') }}";
            }
            
            let formData = new FormData($('#form-employee')[0]);

            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    // console.log(data)
                    
                    // If has Errors
                    if (data.errors) {
                        // toastr.error(data.error);
                    }

                    // if passed
                    if (data.success) {
                        // Show Sweat Alert
                        Swal.fire('Success', data.message, 'success');
                        $('#modal-employee').modal('hide');

                        // Remove Class is-invalid
                        $('.form-control').removeClass('is-invalid');
                        // refresh table
                        $('#table-employee').DataTable().ajax.reload();
                    }
                }
            });
        });

        // Get Data
        $(document).on('click', '.edit', function () {
            let id = $(this).attr('data-id');
            $.ajax({
                url: `employee/edit/${id}`,
                dataType: 'JSON',
                success: function (data) {
                    console.log(data);
                    $('.modal-title').html('Edit employee');
                    // change action
                    $('#action').val('edit');
                    // insert data to input
                    $('#id').val(data.employee.id);
                    $('#name').val(data.employee.name);
                    $('#phone_number').val(data.employee.phone_number);
                    $('#gender').val(data.employee.gender);
                    $('#address').val(data.employee.address);
                    $('#designation_id').val(data.employee.designation_id);

                    $('#modal-employee').modal('show');
                }
            });
        });


        let id;
        $(document).on('click', '.delete', function () {
            id = $(this).attr('data-id');
            $('#ok_button').text('Hapus');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function () {
            $.ajax({
                url: `employee/delete/${id}`,
                beforeSend: function () {
                    $('#ok_button').text('Menghapus...');
                }, success: function (data) {
                    setTimeout(function () {
                        $('#confirmModal').modal('hide');
                        $('#table-employee').DataTable().ajax.reload();
                        Swal.fire('Sukses!', data.message, 'success');
                    }, 1000);
                }
            });
        });

        
    });


</script>
@endsection
