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

      <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal_tambahTahunajaran"><i class="fa fa-plus"></i> Tambah Tahun Ajaran</button>

        <form class="form-inline pull-right">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-search"></i></div>
              <input type="text" class="form-control" id="searchTahunajaran">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
          <thead>
            <th>No.</th>
            <th>Kode Tahun Ajaran</th>
            <th>Tahun Ajaran</th>
            <th>Semester</th>
            <th>Aksi</th>
          </thead>
          <tbody><?php ?></tbody>
        </table>
      </div>

    </div>
  </div>

</div>

<!-- Modal Tambah Tahun Ajaran -->
<div class="modal fade" id="modal_tambahTahunajaran" tabindex="-1" role="dialog" aria-labelledby="modal_tambahTahunAjaranLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahTahunajaranLabel">Tambah Data Admin</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputKode" class="col-sm-3 control-label">Kode</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputKode" placeholder="Kode Tahun Ajaran">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTahunajaran" class="col-sm-3 control-label">Tahun Ajaran</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputTahunajaran" placeholder="Tahun Ajaran">
            </div>
          </div>
          <div class="form-group">
            <label for="inputSemester" class="col-sm-3 control-label">Semester</label>
            <div class="col-sm-9">
              <select class="form-control">
                <option value="Ganjil">Ganjil</option>
                <option value="Genap">Genap</option>
              </select>
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