<div class="modal fade" id="modal-employee" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document" style="margin-top: 15px; margin-bottom: 0;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">New Request</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="saveDep form" id="form-employee" enctype="multipart/form-data">
                @csrf @method('post')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="number" name="phone_number" id="phone_number" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control form-control-sm">
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>     
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Addres</label>
                                <textarea name="address" id="address" cols="10" rows="3" class="form-control form-control-sm" placeholder=""></textarea>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="shift_id">Shift</label>
                                <select name="shift_id" id="shift_id" class="form-control form-control-sm">                                    
                                    <option value="">-Silahkan Pilih-</option>
                                    @foreach ($shifts as $shift)
                                        <option value="{{ $shift->id }}">{{ $shift->shift_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="designation_id">Position</label>
                                <select name="designation_id" id="designation_id" class="form-control form-control-sm">                                    
                                    <option value="">-Silahkan Pilih-</option>
                                    @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->title }}</option>
                                    @endforeach
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
