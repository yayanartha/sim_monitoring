<div class="modal fade" id="modal_tambahSap" tabindex="-1" role="dialog" aria-labelledby="modal_tambahSapLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahSapLabel">Tambah Data SAP</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/sap/tambahSap');?>
          <br>
          <div class="form-group">
            <label for="inputID" class="col-sm-3 control-label">ID SAP</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputID" name="inputID" placeholder="Kode SAP">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputDosen" class="col-sm-3 control-label">Dosen</label>
            <div class="col-sm-9">
              <select class="form-control" id="inputDosen" name="inputDosen">
                <?php for ($j = 0; $j < count($namaDosen); $j++): ?>
                  <option value="<?php echo $namaDosen[$j]->nip; ?>"><?php echo $namaDosen[$j]->nama; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputMatakuliah" class="col-sm-3 control-label">Matakuliah</label>
            <div class="col-sm-9">
              <select class="form-control" id="inputMatakuliah" name="inputMatakuliah">
                <?php for ($j = 0; $j < count($namaMk); $j++): ?>
                  <option value="<?php echo $namaMk[$j]->id_mk; ?>"><?php echo $namaMk[$j]->nama_matkul; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputStatus" class="col-sm-3 control-label">Status</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputStatus" name="inputStatus" placeholder="Status">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="inputPeriode" class="col-sm-3 control-label">Periode</label>
            <div class="col-sm-9">
              <select class="form-control" id="inputPeriode" name="inputPeriode">
                <?php for ($j = 0; $j < count($periode); $j++): ?>
                  <option value="<?php echo $periode[$j]->id_periode; ?>"><?php echo "Semester ".$periode[$j]->semester." (".$periode[$j]->tanggal.")"; ?></option>
                <?php endfor; ?>
              </select>
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