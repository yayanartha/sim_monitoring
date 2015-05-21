<div id="page-wrapper">
  <ol class="breadcrumb">
    <li class="active"><i class="fa fa-book"></i> Manajemen Tahun Ajaran</li>
  </ol>

  <div class="row">
    <div class="col-lg-12">

      <button type="button" data-toggle="modal" data-target="#modal_tambahMatakuliah" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Matakuliah</button>

        <form class="form-inline pull-right">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-search"></i></div>
              <input type="text" class="form-control" id="searchMatakuliah">
            </div>
          </div>
          <button id="btn-searchMatakuliah" type="submit" class="btn btn-primary">Search</button>
        </form>

        <table id="tabelMatakuliah" class="table table-hover table-striped table-bordered" style="margin-top:10px;">
          <thead>
            <th>No.</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no=0; for($i = 0; $i < count($mk); $i++): $no++;?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $mk[$i]->id_mk;?></td>
                <td><?php echo $mk[$i]->nama_matkul;?></td>
                <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editMatakuliah"
                  onclick='<?php echo "editMatakuliah(".$mk[$i]->id_mk.",\"".$mk[$i]->nama_matkul."\")"; ?>'
                  ><i class="fa fa-edit"></i></button>
                  <script type="text/javascript">
                  function editMatakuliah(id_mk, nama_matkul) {
                    document.formEditMatakuliah.id_mk.value = id_mk;
                    document.formEditMatakuliah.nama_matkul.value = nama_matkul;
                  }
                  </script>
                  
                  <a href="<?php echo site_url('admin/matakuliah/deleteMk/'.$mk[$i]->id_mk);?>" 
                    class="btn btn-danger confDel" ><i class='fa fa-trash'></i></a>
                    <?php echo'
                    <script type="text/javascript">
                    var elems = document.getElementsByClassName("confDel");
                    var confirmIt = function (e) {
                      if (!confirm("Apakah data Matakuliah:\nNama : '.$mk[$i]->nama_matkul.'\nKode : '.$mk[$i]->id_mk.'\nakan dihapus?")) e.preventDefault();
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