<div class="modal fade" id="modal_tambahMatakuliah" tabindex="-1" role="dialog" aria-labelledby="modal_tambahMatakuliahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahMatakuliahLabel">Tambah Data Matakuliah</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/matakuliah/tambahMk');?>
          <div class="form-group">
            <label for="inputKode" class="col-sm-3 control-label">Kode</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputKode" name="inputKode" placeholder="Kode Matakuliah">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputNamaMatakuliah" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaMatakuliah" name="inputNamaMatakuliah" placeholder="Nama Matakuliah">
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