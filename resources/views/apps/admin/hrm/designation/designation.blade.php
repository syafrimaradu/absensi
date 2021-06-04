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
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
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
    @include('apps.admin.hrm.designation.modals._designation')
    <div iv id="confirmModal" class="modal fade" role="dialog">
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

            $('#add').on('click', function () {
               
                $('#modal-designation').modal('show');
                        $('#action').val('add');
                        $('.btn-boy')
                            .removeClass('btn-info')
                            .addClass('btn-success')
                            .html('Simpan');
                            $('#form-designation')[0].reset();

            });

            // $('#create_date').dateDropper({
            //     theme: 'leaf',
            //     format: 'd-m-Y'
            // });

            // $('#order-table').DataTable();

            $('#table-designation').DataTable({
                processing: true,
                serverSide: true,
                
                ajax: {
                    url: "{{ route('admin.hrm.designation') }}",
                },
                columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'action',
                    name: 'action'
                }
                ]
            });

            $('#form-designation').on('submit', function (event) {
                event.preventDefault();

                var url = '';
                var text ='';
                if ($('#action').val() == 'add') {
                    url = "{{ route('admin.hrm.designation.store') }}";
                    text = "Data berhasil ditambah";

                }

                if ($('#action').val() == 'edit') {
                    url = "{{ route('admin.hrm.designation.update') }}";
                    text = "Data berhasil diupdate";

                }

                var formData = new FormData($('#form-designation')[0]);
                console.log(formData);

                $('#btn').prop('disabled', true);

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        var html = ''
                        if (data.errors) {
                            html = data.errors[0];
                            $('#title').addClass('is-invalid');
                            $('#description').addClass('is-invalid');
                            toastr.error(html);
                            $('#button').prop('disabled', false);
                        }

                        if (data.success) {
                        Swal.fire('Success!!',text,'success' );
                        $('#modal-designation').modal('hide');
                        $('#form-designation')[0].reset();
                        $('#action').val('add');
                        $('.btn-boy')
                            .removeClass('btn-info')
                            .addClass('btn-success')
                            .val('Simpan');
                        $('#table-designation').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    },
                    error: function(errors){
                        toastr.error(errors);
                        $('#button').prop('disabled', false);
                    }
                });
            });

            $(document).on('click', '.edit', function () {
                var id = $(this).attr('id');
                $.ajax({
                    url: '/admin/hrm/designation/edit/'+id,
                    dataType: 'JSON',
                    success: function (data) {
                        $('#action').val('edit');
                        $('#title').val(data.type.title);
                        $('#description').val(data.type.description);
                        $('#hidden_id').val(data.type.id);
                        $('.btn-boy')
                            .removeClass('btn-success')
                            .addClass('btn-info')
                            .val('Update');
                        $('#modal-designation').modal('show');
                    }
                });
            });

            var user_id;
            $(document).on('click', '.delete', function () {
                user_id = $(this).attr('id');
                $('#ok_button').text('Hapus');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function () {
                $.ajax({
                    url: '/admin/hrm/designation/delete/'+user_id,
                    beforeSend: function () {
                        $('#ok_button').text('Menghapus...');
                    }, success: function (data) {
                        setTimeout(function () {
                            $('#confirmModal').modal('hide');
                            $('#table-designation').DataTable().ajax.reload();
                            // toastr.success('Data berhasil dihapus');
                            Swal.fire('Sukses!', 'Data berhasi dihapus!', 'success');
                        }, 1000);
                    }
                });
            });

        });
    </script>
@endsection
