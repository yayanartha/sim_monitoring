<div class="modal fade" id="modal_tambahPeriode" tabindex="-1" role="dialog" aria-labelledby="modal_tambahPeriodeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahPeriodeLabel">Tambah Data Tahun Ajaran</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tahunajaran/tambahPeriode');?>
          <div class="form-group">
            <label for="inputID" class="col-sm-3 control-label">ID Periode</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputID" name="inputID" placeholder="Kode Tahun Ajaran">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputSemester" class="col-sm-3 control-label">Semester</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputSemester" name="inputSemester" placeholder="Semester">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputTanggal" class="col-sm-3 control-label">Tanggal</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputTanggal" name="inputTanggal" placeholder="Tanggal">
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