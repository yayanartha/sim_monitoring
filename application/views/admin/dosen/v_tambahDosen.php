<div class="modal fade" id="modal_tambahDosen" tabindex="-1" role="dialog" aria-labelledby="modal_tambahDosenLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahDosenLabel">Tambah Data Dosen</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/c_user/tambahDosen');?>
          <div class="form-group" style="margin-bottom: 20px;">
            <label for="inputNIP" class="col-sm-3 control-label">N.I.P. </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNIP" name="inputNIP" placeholder="NIP" required>
            </div>
          </div>
          <br/><br/>
          <div class="form-group" style="margin-bottom: 20px;">
            <label for="inputNamaDosen" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaDosen" name="inputNamaDosen" placeholder="Nama" required>
            </div>
          </div>
          <br/><br/>
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-primary" value="Save">
        </form>
      </div>
    </div>
  </div>
</div>