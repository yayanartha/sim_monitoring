<div class="modal fade" id="modal_tambahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="modal_tambahMahasiswaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahMahasiswaLabel">Tambah Data Mahasiswa</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/c_user/tambahMahasiswa');?>
          <div class="form-group">
            <label for="inputNIM" class="col-sm-3 control-label">NIM </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNamaMahasiswa" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaMahasiswa" placeholder="Nama">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPasswordMahasiswa" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="inputPasswordMahasiswa" placeholder="Password">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>