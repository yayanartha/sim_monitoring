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
      <th>Nama Admin</th>
      <th>Aksi</th>
    </thead>
    <tbody><?php ?></tbody>
  </table>
</div>

<div class="pull-right">
  <ul class="pagination"></ul>
</div>