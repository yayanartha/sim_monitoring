<!-- Modal for edit -->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit SAP</h4>
      </div>
      <div class="modal-body">
        
        <!--matakuliah-->
        <div class="form-group">
          <label>Pilih Matakuliah : </label>
          <select name="pilih_matkul_edit" class="form-control" required="required">
            <option value="">--Pilih Matakuliah--</option>
            <option value="1">Algoritma dan Pemrograman</option>
            <option value="2">Kalkulus I</option>
            <option value="3">Pengenalan Pola</option>
          </select>
        </div>

        <div class="form-group">
          <label>Periode SAP : </label>
          <input type="date" name="datesap_edit" class="form-control" required="required">
        </div>

        <div class="form-group">
          <label>Semester : </label>
          <input type="text" name="semester_edit" class="form-control" required="required">
        </div>
        
        <div class="form-group">
        <button id="tabel_edit" type="button" class="btn btn-primary"> Tampilankan </button>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>