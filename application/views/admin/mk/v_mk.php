<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Dashboard <small>Matakuliah</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-book"></i> Manajemen Matakuliah</li>
      </ol>
    </div>
  </div><!-- /.row -->

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
            <th>Jumlah SKS</th>
            <th>Aksi</th>
          </thead>
          <tbody>

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