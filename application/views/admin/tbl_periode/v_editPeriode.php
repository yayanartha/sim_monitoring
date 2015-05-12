<div class="modal fade" id="modal_editPeriode" tabindex="-1" role="dialog" aria-labelledby="modal_editPeriodeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_editPeriodeLabel">Ubah Data Tahun Ajaran</h4>
      </div>
      <div class="modal-body">
        <?php 
        $attributes = array('name' => 'formEditPeriode'); 
        echo form_open_multipart('admin/tahunajaran/editPeriode', $attributes);?>
          <div class="form-group">
            <label for="id_periode" class="col-sm-3 control-label">ID Periode</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="id_periode" name="id_periode" placeholder="Kode Tahun Ajaran">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="semester" class="col-sm-3 control-label">Semester</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
            </div>
          </div>
          <br><br>
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-warning" value="Ubah">
        </form>
      </div>
    </div>
  </div>
</div>