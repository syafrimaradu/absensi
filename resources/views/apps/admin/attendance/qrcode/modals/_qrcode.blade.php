<div class="modal fade" id="modal-qrcode" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document" style="margin-top: 15px; margin-bottom: 0;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">New Request</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="saveDep form" method="post" action="#" id="tambah" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="qrcode">qrcode Name</label>
                                <input type="text" name="qrcode" id="qrcode" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date" class="bmd-label-floating">Start Date</label>
                                <input type="text" class="form-control form-control-lg" id="start_date" name="start_date" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end_date" class="bmd-label-floating">End Date</label>
                                <input type="text" class="form-control form-control-lg" id="end_date" name="end_date" readonly>
                            </div>
                        </div>                                                
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="holidays">Holidays</label>
                                <input type="text" list="browsers" name="holidays" id="holidays" class="form-control form-control-lg" placeholder="" />
                                <datalist id="browsers">
                                </datalist>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="content">Description</label>
                                <textarea name="content" id="content" cols="10" rows="3" class="form-control form-control-sm" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Create Request</button>
                    <button type="button" class="btn btn-light btn-close" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
