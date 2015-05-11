<div class="modal fade" id="modal_editAdmin" tabindex="-1" role="dialog" aria-labelledby="modal_editAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_editAdminLabel">Ubah Data Admin</h4>
      </div>
      <div class="modal-body">
        <?php 
        $attributes = array('name' => 'formEditAdmin'); 
        echo form_open_multipart('admin/c_user/editAdmin', $attributes);?>
          <div class="form-group">
            <label for="id" class="col-sm-3 control-label">ID </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="id" name="id" placeholder="ID" required>
            </div>
          </div>
          <br/><br/>
          <div class="form-group">
            <label for="nama" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
          </div>
          <br/><br/>
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-warning" value="Ubah">
        </form>
      </div>
    </div>
  </div>
</div>