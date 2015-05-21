<div id="page-wrapper">
  <legend>Manajemen SKP</legend>

  <div class="row">
    <div class="col-lg-12">

      <form class="form-inline">
        <input type="text" class="form-control" id="searchSap" placeholder="Search...">
        <button id="btn-searchSap" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
      </form>

      <br>
      <button type="button" data-toggle="modal" data-target="#modal_tambahSap" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah SAP</button>

      <div class="table-responsive">
        <table id="tabelSap" class="table table-hover table-striped table-bordered" style="margin-top:10px;">
          <thead>
            <tr>
              <th>No.</th>
              <th>ID SAP</th>
              <th>Dosen</th>
              <th>Matakuliah</th>
              <th>Status</th>
              <th>Periode</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; for($i = 0; $i < count($sap); $i++): $no++;?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $sap[$i]->id_sap;?></td>
                <td><?php echo $sap[$i]->nama;?></td>
                <td><?php echo $sap[$i]->nama_matkul;?></td>
                <td><?php echo $sap[$i]->status;?></td>
                <td><?php echo "Semester ".$sap[$i]->semester." (".$sap[$i]->tanggal.")";?></td>
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
                      if (!confirm("Apakah data SAP:\n\nID : '.$sap[$i]->id_sap.'\nDosen : '.$sap[$i]->nama.'\nMatakuliah : '.$sap[$i]->nama_matkul.'\nStatus : '.$sap[$i]->status.'\nTahun Ajaran : Semester '.$sap[$i]->semester.' ('.$sap[$i]->tanggal.')\n\nakan dihapus?")) e.preventDefault();
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
<?php $this->load->view("admin/sap/v_tambahSap"); ?>

<!-- Modal Edit Matakuliah -->
<?php $this->load->view("admin/sap/v_editSap"); ?>
