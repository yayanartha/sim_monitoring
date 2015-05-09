<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Dashboard <small>Ruangan</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-map-marker"></i> Manajemen Ruangan</li>
      </ol>
    </div>
  </div><!-- /.row -->

  <div class="row">
    <div class="col-lg-12">

      <button type="button" data-toggle="modal" data-target="#modal_tambahRuangan" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Ruangan</button>

        <form class="form-inline pull-right">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-search"></i></div>
              <input type="text" class="form-control" id="searchRuangan">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
          <thead>
            <th>No.</th>
            <th>Kode Ruangan</th>
            <th>Nama Ruangan</th>
            <th>Aksi</th>
          </thead>
          <tbody><?php ?></tbody>
        </table>
      </div>

    </div>
  </div>

</div>

<!-- Modal Tambah Ruangan -->
<div class="modal fade" id="modal_tambahRuangan" tabindex="-1" role="dialog" aria-labelledby="modal_tambahRuanganLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahRuanganLabel">Tambah Data Admin</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputKode" class="col-sm-3 control-label">Kode</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputKode" placeholder="Kode Ruangan">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNamaruangan" class="col-sm-3 control-label">Nama Ruangan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaruangan" placeholder="Nama Ruangan">
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