<div class="modal fade" id="modal-department" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document" style="margin-top: 15px; margin-bottom: 0;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">New Request</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="saveDep form" id="form-department" enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Department Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" cols="10" rows="3" class="form-control form-control-sm" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="department">Department Manager</label>
                                <select name="employee_id" id="employee_id" class="form-control form-control-lg">
                                    <option value="">-Silahkan Pilih-</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" id="parent-id-group">
                            <div class="form-group">
                                <label for="parent_id">Parent Department</label>
                                <select name="parent_id" id="parent_id" class="form-control form-control-lg">
                                    <option value="">-Silahkan Pilih-</option>
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
