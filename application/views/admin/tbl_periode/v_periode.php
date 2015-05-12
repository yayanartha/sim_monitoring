<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Dashboard <small>Tahun Ajaran</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-calendar"></i> Manajemen Tahun Ajaran</li>
      </ol>
    </div>
  </div><!-- /.row -->

  <div class="row">
    <div class="col-lg-12">

      <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal_tambahPeriode"><i class="fa fa-plus"></i> Tambah Tahun Ajaran</button>

        <form class="form-inline pull-right">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-search"></i></div>
              <input type="text" class="form-control" id="searchPeriode">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
          <thead>
            <th>No.</th>
            <th>ID Periode</th>
            <th>Semester</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php $no=0; for($i = 0; $i < count($periode); $i++): $no++;?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $periode[$i]->id_periode;?></td>
                <td><?php echo $periode[$i]->semester;?></td>
                <td><?php echo $periode[$i]->tanggal;?></td>
                <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editPeriode"
                  onclick='<?php echo "editPeriode(".$periode[$i]->id_periode.",\"".$periode[$i]->semester.",\"".$periode[$i]->tanggal."\")"; ?>'
                  ><i class="fa fa-edit"></i></button>
                  <script type="text/javascript">
                  function editPeriode(id_periode, semester, tanggal) {
                    document.formEditPeriode.id_periode.value = id_periode;
                    document.formEditPeriode.semester.value = semester;
                    document.formEditPeriode.tanggal.value = tanggal;
                  }
                  </script>
                  
                  <a href="<?php echo site_url('admin/tahunajaran/deletePeriode/'.$periode[$i]->id_periode);?>" 
                    class="btn btn-danger confDel" ><i class='fa fa-trash'></i></a>
                    <?php echo'
                    <script type="text/javascript">
                    var elems = document.getElementsByClassName("confDel");
                    var confirmIt = function (e) {
                      if (!confirm("Apakah data Tahun Ajaran:\nID Periode : '.$periode[$i]->id_periode.'\nSemester : '.$periode[$i]->semester.'\nTanggal : '.$periode[$i]->tanggal.'\nakan dihapus?")) e.preventDefault();
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

<!-- Modal Tambah Tahun Ajaran -->
<?php $this->load->view('admin/tbl_periode/v_tambahPeriode'); ?>

<!-- Modal Edit Tahun Ajaran -->
<?php $this->load->view('admin/tbl_periode/v_editPeriode'); ?>
