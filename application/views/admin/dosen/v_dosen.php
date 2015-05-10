<div role="tabpanel" class="tab-pane fade in active" id="dosen">
  <button type="button" data-toggle="modal" data-target="#modal_tambahDosen" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah dosen</button>

  <form class="form-inline pull-right">
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-search"></i></div>
        <input type="text" class="form-control" id="searchDosen">
      </div>
    </div>
    <button type="submit" id="btn-searchDosen" class="btn btn-primary">Search</button>
  </form>

  <table id="tabelDosen" class="table table-hover table-striped table-bordered" style="margin-top:10px;">
    <thead>
      <th>No.</th>
      <th>NIP</th>
      <th>Nama Dosen</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      <?php $no=0; for($i = 0; $i < count($dosen); $i++): $no++;?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $dosen[$i]->nip;?></td>
        <td><?php echo $dosen[$i]->nama;?></td>
        <td>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editDosen"
          onclick='<?php echo "editDosen(".$dosen[$i]->nip.",\"".$dosen[$i]->nama."\")"; ?>'
          ><i class="fa fa-edit"></i></button>
          <script type="text/javascript">
          function editDosen(nip, nama) {
            document.formEditDosen.nip.value = nip;
            document.formEditDosen.nama.value = nama;
          }
          </script>
          
          <a href="<?php echo site_url('admin/c_user/deleteDosen/'.$dosen[$i]->nip);?>" 
            class="btn btn-danger confDel" ><i class='fa fa-trash'></i></a>
            <?php echo'
            <script type="text/javascript">
            var elems = document.getElementsByClassName("confDel");
            var confirmIt = function (e) {
              if (!confirm("Apakah data Dosen:\nNama : '.$dosen[$i]->nama.'\nNIP : '.$dosen[$i]->nip.'\nakan dihapus?")) e.preventDefault();
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
  <ul class="pagination" id="paging_dosen"></ul>
</div>