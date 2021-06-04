<div class="modal fade" id="modal-announcements" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document" style="margin-top: 15px; margin-bottom: 0;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">New Request</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="saveDep form" id="form-announcement" enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id" id="id">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="10" rows="3" class="form-control form-control-sm" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sent_to">Send to</label>
                                <select name="sent_to" id="sent_to" class="form-control form-control-sm">
                                    <option value="All Employee">All Employee</option>
                                    <option value="Selected Employee">Selected Employee</option>
                                    <option value="By Departement">By Departement</option>
                                    <option value="By Designation">By Designation</option>
                                </select>
                            </div>
                        </div>                        
                    </div>                    
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="action">
                    <button type="submit" id="button-submit" class="btn btn-success">Save</button>
                    <button type="button" id="" class="btn btn-light btn-close" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
