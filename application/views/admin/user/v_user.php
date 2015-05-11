<div role="tabpanel" class="tab-pane fade" id="admin">
  <button type="button" data-toggle="modal" data-target="#modal_tambahAdmin" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Admin</button>

  <form class="form-inline pull-right">
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-search"></i></div>
        <input type="text" class="form-control" id="searchAdmin">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
  </form>

  <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
    <thead>
      <th>No.</th>
      <th>ID Admin</th>
      <th>Username</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      <?php $no=0; for($i = 0; $i < count($admin); $i++): $no++;?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $admin[$i]->id;?></td>
        <td><?php echo $admin[$i]->username;?></td>
        <td>
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editAdmin"
          onclick='<?php echo "editAdmin(".$admin[$i]->id.",\"".$admin[$i]->username."\")"; ?>'
          ><i class="fa fa-edit"></i></button>
          <script type="text/javascript">
          function editAdmin(id, username) {
            document.formEditAdmin.id.value = id;
            document.formEditAdmin.username.value = username;
          }
          </script>

          <a href="<?php echo site_url('admin/c_user/deleteAdmin/'.$admin[$i]->id);?>" 
            class="btn btn-danger confDel2" ><i class='fa fa-trash'></i></a>
            <?php echo'
            <script type="text/javascript">
            var elems2 = document.getElementsByClassName("confDel2");
            var confirmIt2 = function (e) {
              if (!confirm("Apakah data Mahasiswa:\nNama : '.$admin[$i]->username.'\nNIM : '.$admin[$i]->id.'\nakan dihapus?")) e.preventDefault();
            };
            elems2['.$i.'].addEventListener("click", confirmIt2, false);
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