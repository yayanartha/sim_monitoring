<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Manajemen <small>SAP</small></h1>
    </div>
  </div><!-- /.row -->

  <div class="row">
    <div class="col-lg-12">

      <button type="button" data-toggle="modal" data-target="#modal_tambahSap" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah SAP</button>

        <form class="form-inline pull-right">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-search"></i></div>
              <input type="text" class="form-control" id="searchSap">
            </div>
          </div>
          <button id="btn-searchSap" type="submit" class="btn btn-primary">Search</button>
        </form>

        <table id="tabelSap" class="table table-hover table-striped table-bordered" style="margin-top:10px;">
          <thead>
            <th>No.</th>
            <th>ID SAP</th>
            <th>Dosen</th>
            <th>Matakuliah</th>
            <th>Status</th>
            <th>Periode</th>
          </thead>
          <tbody>
            <?php $no=0; for($i = 0; $i < count($sap); $i++): $no++;?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $sap[$i]->id_sap;?></td>
                <td><?php echo $sap[$i]->nip;?></td>
                <td><?php echo $sap[$i]->id_mk;?></td>
                <td><?php echo $sap[$i]->status;?></td>
                <td><?php echo $sap[$i]->id_periode;?></td>
                <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editSap"
                  onclick='<?php echo "editSap(".$sap[$i]->id_sap.",\"".$sap[$i]->nip.",\"".$sap[$i]->id_mk.",\"".$sap[$i]->status.",\"".$sap[$i]->id_periode."\")"; ?>'
                  ><i class="fa fa-edit"></i></button>
                  <script type="text/javascript">
                  function editSap(id_sap, nip, id_mk, status, id_periode) {
                    document.formEditSap.id_sap.value = is_sap;
                    document.formEditSap.nip.value = nip;
                    document.formEditSap.id_mk.value = id_mk;
                    document.formEditSap.status.value = status;
                    document.formEditSap.id_periode.value = id_periode;
                  }
                  </script>
                  
                  <a href="<?php echo site_url('admin/sap/deleteSap/'.$sap[$i]->id_sap);?>" 
                    class="btn btn-danger confDel" ><i class='fa fa-trash'></i></a>
                    <?php echo'
                    <script type="text/javascript">
                    var elems = document.getElementsByClassName("confDel");
                    var confirmIt = function (e) {
                      if (!confirm("Apakah data SAP:\nID : '.$sap[$i]->id_sap.'\nDosen : '.$sap[$i]->nip.'\nMatakuliah : '.$sap[$i]->id_mk.'\nStatus : '.$sap[$i]->status.'\nTahun Ajaran : '.$sap[$i]->id_periode.'\nakan dihapus?")) e.preventDefault();
                    };
                    elems['.$i.'].addEventListener("click", confirmIt, false);
                  </script>'; ?>
                </td>
              </tr>
            <?php endfor;?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

</div>

<!-- Modal Tambah Matakuliah -->
<?php $this->load->view("admin/mk/v_tambahMk"); ?>

<!-- Modal Edit Matakuliah -->
<?php $this->load->view("admin/mk/v_editMk"); ?>
