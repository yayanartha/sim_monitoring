<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Dashboard <small>Jadwal</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-th-list"></i> Manajemen Jadwal</li>
      </ol>
    </div>
  </div><!-- /.row -->

  <div class="row">
    <div class="col-lg-12">
      <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#viewjadwal" aria-controls="viewjadwal" role="tab" data-toggle="tab">View Jadwal</a></li>
          <li role="presentation"><a href="#editjadwal" aria-controls="editjadwal" role="tab" data-toggle="tab">Edit Jadwal</a></li>
          <li role="presentation"><a href="#jamperkuliahan" aria-controls="jamperkuliahan" role="tab" data-toggle="tab">Jam Perkuliahan</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" style="margin-top: 20px;">
          <div role="tabpanel" class="tab-pane fade in active" id="viewjadwal">
            
            <form class="form-inline">
              <div class="form-group">
                <label for="selectViewTahunajaran" class="control-label">Tahun ajaran </label>
                <select class="form-control" id="selectViewTahunajaran">

                </select>
              </div>
            </form>

            <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
              <thead>
                <tr>
                  <th></th>
                  <th colspan="<?php ?>">Senin</th>
                </tr>
                <tr id="waktu">
                  <th>Waktu</th>
                </tr>
              </thead>
              <tbody><?php ?></tbody>
            </table>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="editjadwal">
            <form class="form-inline">
              <div class="form-group">
                <label for="selectEditTahunajaran" class="control-label">Tahun ajaran </label>
                <select class="form-control" id="selectEditTahunajaran">

                </select>
              </div>
            </form>

            <button class="btn btn-success" style="margin-top:10px;"><i class="fa fa-plus"></i> Tambah Jadwal</button>

            <form class="form-inline pull-right" style="margin-top:10px;">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-search"></i></div>
                  <input type="text" class="form-control" id="searchJadwal">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Search</button>
            </form>

            <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
              <thead>
                <th>No.</th>
                <th>ID Jadwal</th>
                <th>Tahun Ajaran</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Matakuliah</th>
                <th>Ruangan</th>
                <th>Dosen Pengajar</th>
                <th>Aksi</th>
              </thead>
              <tbody><?php ?></tbody>
            </table>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="jamperkuliahan">
            <button class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Jam Perkuliahan</button>
            <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
              <thead>
                <th>No.</th>
                <th>ID Jam</th>
                <th>Waktu</th>
                <th>Aksi</th>
              </thead>
              <tbody><?php ?></tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
  
</div><!-- /#page-wrapper -->