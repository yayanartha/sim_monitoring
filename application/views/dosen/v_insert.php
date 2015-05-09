<!-- Modal for insert-->
<form method="POST" action="<?php echo site_url('dosen/c_insert'); ?>">
<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Insert SAP</h4>
      </div>
      <div class="modal-body">
        
        <!--matakuliah-->
        <div class="form-group">
          <label>Pilih Matakuliah : </label>
          <select name="pilih_matkul" class="form-control" required="required">
            <option value="">--Pilih Matakuliah--</option>
            <option value="1">Algoritma dan Pemrograman</option>
            <option value="2">Kalkulus I</option>
            <option value="3">Pengenalan Pola</option>
          </select>
        </div>
        
        <div class="form-group">
          <label>Periode SAP : </label>
          <input type="date" name="datesap" class="form-control" required="required">
        </div>

        <div class="form-group">
          <label>Semester : </label>
          <input type="text" name="semester" class="form-control" required="required">
        </div>

        <div class="form-group">
          <div class="panel panel-default">
          
          <!--heading-->
          <div class="panel-heading" style="cursor: pointer">
            <h3 class="panel-title">Materi</h3>
          </div>

          <!--body-->
          <div class="panel-body" style="display: none">
            <!--insert materi-->
            <span class="glyphicon glyphicon-plus-sign pull-right" style="cursor:pointer"></span>
            <!--remove-->
            <p><span class="glyphicon glyphicon-remove-sign pull-right" id="remove1" style="cursor:pointer"></span></p>

            <!--form-group-->
            <div class="form-group" id="materi1">
              <label>Materi 1 : </label>
            
              <input type="text" name="materi[]" placeholder="Materi 1" class="form-control" required="required">
              
              <!--calender-->
              <input type="date" name="datemateri[]" class="form-control" required="required">

            </div>

          </div>

        </div>  
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

