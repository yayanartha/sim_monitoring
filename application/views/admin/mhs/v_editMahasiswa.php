<div class="modal fade" id="modal_editMahasiswa" tabindex="-1" role="dialog" aria-labelledby="modal_editMahasiswaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_editMahasiswaLabel">Ubah Data Mahasiswa</h4>
      </div>
      <div class="modal-body">
        <?php 
        $attributes = array('name' => 'formEditMahasiswa'); 
        echo form_open_multipart('admin/c_user/editMahasiswa', $attributes);?>
          <div class="form-group">
            <label for="nip" class="col-sm-3 control-label">N.I.P. </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required>
            </div>
          </div>
          <br/><br/>
          <div class="form-group">
            <label for="nama" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
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