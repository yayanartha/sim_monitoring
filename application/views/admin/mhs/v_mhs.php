<div role="tabpanel" class="tab-pane fade" id="mahasiswa">
  <button type="button" data-toggle="modal" data-target="#modal_tambahMahasiswa" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Mahasiswa</button>

  <form class="form-inline pull-right">
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-search"></i></div>
        <input type="text" class="form-control" id="searchMahasiswa">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
  </form>

  <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
    <thead>
      <th>No.</th>
      <th>NIM</th>
      <th>Nama Mahasiswa</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      <?php $no=0; for($i = 0; $i < count($mahasiswa); $i++): $no++;?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $mahasiswa[$i]->nim;?></td>
        <td><?php echo $mahasiswa[$i]->nama;?></td>
        <td>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editMahasiswa"
          onclick='<?php echo "editMahasiswa(".$mahasiswa[$i]->nip.",\"".$mahasiswa[$i]->nama."\")"; ?>'
          ><i class="fa fa-edit"></i></button>
          <script type="text/javascript">
          function editMahasiswa(nim, nama) {
            document.formEditMahasiswa.nim.value = nim;
            document.formEditMahasiswa.nama.value = nama;
          }
          </script>
          
          <a href="<?php echo site_url('admin/c_user/deleteMahasiswa/'.$mahasiswa[$i]->nim);?>" 
            class="btn btn-danger confDel" ><i class='fa fa-trash'></i></a>
            <?php echo'
            <script type="text/javascript">
            var elems = document.getElementsByClassName("confDel");
            var confirmIt = function (e) {
              if (!confirm("Apakah data Mahasiswa:\nNama : '.$mahasiswa[$i]->nama.'\nNIM : '.$mahasiswa[$i]->nim.'\nakan dihapus?")) e.preventDefault();
            };
            elems['.$i.'].addEventListener("click", confirmIt, false);
          </script>'; ?>
        </td>
      </tr>
    <?php endfor;?>
  </tbody>
</table>
</div>

<div class="pull-right">
  <ul class="pagination"></ul>
</div>