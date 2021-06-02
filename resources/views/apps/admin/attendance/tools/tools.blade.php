@extends('layouts.admin')

@section('title')
    Absensi | Tools
@endsection

@section('title-page')
  <!-- <h4 class="page-title">Judul Halamans</h4> -->
@endsection

@section('content')
<div class="row mb-6">
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
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <h6>Export Attendance</h6>

                    <!-- <div class="row">
                        <div class="col-xl-12">
                            <select name="kelas2" id="pilih-kelas2" class="form-control form-control-sm">
                                <option value="" disabled selected></option>
                                
                            </select>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-outline mt-3 btn-pindah">Export</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <h6>Import Attendance</h6>
                    

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select name="kelas2" id="pilih-kelas2" class="form-control form-control-sm">
                                <option value="" disabled selected></option>
                            </select>                                
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                        <button Type="submit" class="btn btn-outline btn-pindah">Upload File</button> 
                        </div>
                    </div>
                </div>                      
                    <button type="submit" class="btn btn-outline btn-pindah">Import</button>
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



