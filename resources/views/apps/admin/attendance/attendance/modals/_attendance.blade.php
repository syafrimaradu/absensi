<div class="modal fade" id="modal-attendance" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
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
                                <label for="title">Department Title</label>
                                <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="content">Description</label>
                                <textarea name="content" id="content" cols="10" rows="3" class="form-control form-control-sm" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="employee_name">Department Manager</label>
                                <input type="text" list="browsers" name="employee_name" id="employee_name" class="form-control form-control-lg" placeholder="" />
                                <datalist id="browsers">
                                    <option value="007 - Husein Bintang Wijaya">Husein Bintang Wijaya</option>
                                    <option value="736672 - Yuda Budi Pratama">Yuda Budi Pratama</option>
                                    <option value="0903 - Yuda Budi Pratama">Yuda Budi Pratama</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="employee_name">Parent Department</label>
                                <input type="text" list="browsers" name="employee_name" id="employee_name" class="form-control form-control-lg" placeholder="" />
                                <datalist id="browsers">
                                    <option value="007 - Husein Bintang Wijaya">Husein Bintang Wijaya</option>
                                    <option value="736672 - Yuda Budi Pratama">Yuda Budi Pratama</option>
                                    <option value="0903 - Yuda Budi Pratama">Yuda Budi Pratama</option>
                                </datalist>
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
