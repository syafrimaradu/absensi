@extends('layouts.admin')

@section('title-page')
  <!-- <h4 class="page-title">Overview</h4> -->
@endsection

@section('content')


<div class="row mb-4">
    <div class="col-12 d-flex align-items-center justify-content-between">
        <h4 class="page-title">Overview</h4>
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
    <div class="col-md-8">
        <div class="row">
            <div class="col-12 col-md-4 grid-margin stretch-card card-tile">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between pb-2">
                            <h5>Employee</h5>
                            <i class="icon-people"></i>
                        </div>
                        <div class="inner d-flex align-items-center">
                            <h1 class="text-info font-weight-bold">3</h1>
                        </div>
                        <a href="http://xavaxx.com/employees">
                            <small class="text-gray">
                                View Employee....
                            </small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 grid-margin stretch-card card-tile">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between pb-2">
                            <h5>Department</h5>
                            <i class="fa fa-building-o"></i>
                        </div>
                        <div class="inner d-flex align-items-center">
                            <h1 class="text-primary font-weight-bold">1</h1>
                        </div>
                        <a href="http://xavaxx.com/departments">
                            <small class="text-gray">
                                View Department....
                            </small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 grid-margin stretch-card card-tile">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between pb-2">
                            <h5>Designation</h5>
                            <i class="icon-puzzle"></i>
                        </div>
                        <div class="inner d-flex align-items-center">
                            <h1 class="text-warning font-weight-bold">1</h1>
                        </div>
                        <a href="http://xavaxx.com/designations">
                            <small class="text-gray">
                                View Designation....
                            </small>
                        </a>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row grid-margin">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Latest Announcement</h4>
                      <div class="table-responsive">
                        <table id="tableannouncement" class="table">
                          <thead>
                            <tr class="text-center">
                              <th>Title</th>
                              <th>Description</th>
                              <th>Date</th>                           
                            </tr>
                          </thead>
                            <tbody>                            
                            <tr class="text-center">
                              <td>Test</td>
                              <td>jangan bengong aja</td>
                              <td>11 / Dec / 2020 10:45:23</td>
                            </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row grid-margin">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Calendar</h4>
                      <div id="calendar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- End Left Content -->
            <!-- Start Right Content -->
<div class="col-md-4">
    <div class="row grid-margin">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Celebration</h4>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table id="celebration" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Celebration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No Data</td>                                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-margin">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Who is out</h4>
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs tab-basic" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="http://xavaxx.com/hrm-overview#this_month" role="tab" aria-controls="this_month" aria-selected="true">
                                        This Month
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="http://xavaxx.com/hrm-overview#next_month" role="tab" aria-controls="next_month" aria-selected="false">
                                        Next Month
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-basic">
                                <div class="tab-pane fade show active" id="this_month" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table id="cuti_ini" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Department</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" class="text-center">No Data</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="next_month" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table id="cuti_depan" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Departemen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" class="text-center">No Data</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
    <div class="row grid-margin">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">About To End</h4>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table id="abouttoend" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>About To End</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No Data</td>                                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-margin">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Attendance Status</h4>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table id="attendance" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No Data</td>                                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-margin">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Self Service Attendance</h4>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table id="selfservice" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Self Service Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">No Data</td>                                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                                                
    <footer class="footer">
        <div class="container-fluid clearfix">        
        </div>
    </footer>
</div>
@endsection