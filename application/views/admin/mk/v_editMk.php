<div class="modal fade" id="modal_editMatakuliah" tabindex="-1" role="dialog" aria-labelledby="modal_editMatakuliahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_editMkLabel">Ubah Data Matakuliah</h4>
      </div>
      <div class="modal-body">
        <?php 
        $attributes = array('name' => 'formEditMatakuliah'); 
        echo form_open_multipart('admin/matakuliah/editMk', $attributes);?>
          <div class="form-group">
            <label for="id_mk" class="col-sm-3 control-label">Kode</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="id_mk" name="id_mk" placeholder="Kode Matakuliah" required>
            </div>
          </div>
          <br/><br/>
          <div class="form-group">
            <label for="nama_matkul" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="Nama Matakuliah" required>
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