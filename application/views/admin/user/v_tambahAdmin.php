<div class="modal fade" id="modal_tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="modal_tambahAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahAdminLabel">Tambah Data Admin</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/c_user/tambahAdmin');?>
          <div class="form-group">
            <label for="inputID" class="col-sm-3 control-label">ID Admin</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputID" name="inputID" placeholder="ID">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputNamaAdmin" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaAdmin" name="inputNamaAdmin" placeholder="Nama">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputPwdAdmin" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="inputPwdAdmin" name="inputPwdAdmin" placeholder="Password">
            </div>
          </div>
          <br><br>
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-primary" value="Save changes">
        </form>
      </div>
    </div>
  </div>
</div>