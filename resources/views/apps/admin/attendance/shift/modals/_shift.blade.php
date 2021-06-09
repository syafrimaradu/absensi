<div class="modal fade" id="modal-shift" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document" style="margin-top: 15px; margin-bottom: 0;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">New Request</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="saveDep form" id="form-shift" enctype="multipart/form-data">
                @csrf @method('post')
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="employee_id">Shift Name</label>
                                <input type="text" class="form-control form-control-lg" id="shift_name" name="shift_name">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_time" class="bmd-label-floating">Start Time</label>
                                <input type="time" class="form-control form-control-lg" id="start_time" name="start_time">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end_time" class="bmd-label-floating">End Time</label>
                                <input type="time" class="form-control form-control-lg" id="end_time" name="end_time">
                            </div>
                        </div>                                                
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="day">Day</label>
                                <select name="day" id="day" class="form-control form-control-lg">
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="sunday">Sunday</option>
                                    <option value="monday">Monday</option>
                                    <option value="tuesday">Tuesday</option>
                                    <option value="wednesday">Wednesday</option>
                                    <option value="thursday">Thursday</option>
                                    <option value="friday">Friday</option>
                                    <option value="saturday">Saturday</option>
                                </select>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="hidden_id" id="id">
                    <input type="hidden" id="action">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-light btn-close" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
