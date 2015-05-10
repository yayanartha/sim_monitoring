<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Dashboard <small>User</small></h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-user"></i> Manajemen User</li>
      </ol>
    </div>
  </div><!-- /.row -->

  <div class="row">
    <div class="col-lg-12">
      <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#dosen" aria-controls="dosen" role="tab" data-toggle="tab">Dosen</a></li>
          <li role="presentation"><a href="#mahasiswa" aria-controls="mahasiswa" role="tab" data-toggle="tab">Mahasiswa</a></li>
          <li role="presentation"><a href="#admin" aria-controls="admin" role="tab" data-toggle="tab">Admin</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" style="margin-top: 20px;">
          <div role="tabpanel" class="tab-pane fade in active" id="dosen">
            <button type="button" data-toggle="modal" data-target="#modal_tambahDosen" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah dosen</button>

            <form class="form-inline pull-right">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-search"></i></div>
                  <input type="text" class="form-control" id="searchDosen">
                </div>
              </div>
              <button type="submit" id="btn-searchDosen" class="btn btn-primary">Search</button>
            </form>

            <table id="tabelDosen" class="table table-hover table-striped table-bordered" style="margin-top:10px;">
              <thead>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama Dosen</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $no=0; for($i = 0; $i < count($dosen); $i++): $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $dosen[$i]->nip;?></td>
                    <td><?php echo $dosen[$i]->nama;?></td>
                    <td>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_editDosen"
                        onclick='<?php echo "editDosen(".$dosen[$i]->nip.",\"".$dosen[$i]->nama."\")"; ?>'
                      ><i class="fa fa-edit"></i></button>
                      <script type="text/javascript">
                        function editDosen(nip, nama) {
                          document.formEditDosen.nip.value = nip;
                          document.formEditDosen.nama.value = nama;
                        }
                      </script>
                      
                      <a href="<?php echo site_url('admin/c_user/deleteDosen/'.$dosen[$i]->nip);?>" 
                        class="btn btn-danger confDel" ><i class='fa fa-trash'></i></a>
                      <?php echo'
                      <script type="text/javascript">
                        var elems = document.getElementsByClassName("confDel");
                        var confirmIt = function (e) {
                            if (!confirm("Apakah data Dosen:\nNama : '.$dosen[$i]->nama.'\nNIP : '.$dosen[$i]->nip.'\nakan dihapus?")) e.preventDefault();
                        };
                        elems['.$i.'].addEventListener("click", confirmIt, false);
                      </script>'; ?>
                    </td>
                </tr>
                <?php endfor;?>
              </tbody>
            </table>
          </div>

          <div class="pull-right">
            <ul class="pagination" id="paging_dosen"></ul>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="mahasiswa">
            <button type="button" data-toggle="modal" data-target="#modal_tambahMahasiswa" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Mahasiswa</button>

            <form class="form-inline pull-right">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-search"></i></div>
                  <input type="text" class="form-control" id="searchMahasiswa">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Search</button>
            </form>

            <table class="table table-hover table-striped table-bordered" style="margin-top:10px;">
              <thead>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Password</th>
                <th>Aksi</th>
              </thead>
              <tbody><?php ?></tbody>
            </table>
          </div>

          <div class="pull-right">
            <ul class="pagination"></ul>
          </div>

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
                <th>Password</th>
                <th>Aksi</th>
              </thead>
              <tbody><?php ?></tbody>
            </table>

            <div class="pull-right">
              <ul class="pagination"></ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
</div><!-- /#page-wrapper -->

<!-- Modal Tambah Dosen -->
<div class="modal fade" id="modal_tambahDosen" tabindex="-1" role="dialog" aria-labelledby="modal_tambahDosenLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahDosenLabel">Tambah Data Dosen</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/c_user/tambahDosen');?>
          <div class="form-group" style="margin-bottom: 20px;">
            <label for="inputNIP" class="col-sm-3 control-label">N.I.P. </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNIP" name="inputNIP" placeholder="NIP" required>
            </div>
          </div>
          <br/><br/>
          <div class="form-group" style="margin-bottom: 20px;">
            <label for="inputNamaDosen" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaDosen" name="inputNamaDosen" placeholder="Nama" required>
            </div>
          </div>
          <br/><br/>
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-primary" value="Save">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Dosen -->
<div class="modal fade" id="modal_editDosen" tabindex="-1" role="dialog" aria-labelledby="modal_tambahDosenLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_editDosenLabel">Ubah Data Dosen</h4>
      </div>
      <div class="modal-body">
        <?php 
        $attributes = array('name' => 'formEditDosen'); 
        echo form_open_multipart('admin/c_user/editDosen', $attributes);?>
          <div class="form-group">
            <label for="nip" class="col-sm-3 control-label">N.I.P. </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
            </div>
          </div>
          <br/><br/>
          <div class="form-group">
            <label for="nama" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
            </div>
          </div>
          <br/><br/>
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-warning" value="Ubah">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Mahasiswa -->
<div class="modal fade" id="modal_tambahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="modal_tambahMahasiswaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahMahasiswaLabel">Tambah Data Mahasiswa</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputNIM" class="col-sm-3 control-label">NIM </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNIM" placeholder="NIP">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNamaMahasiswa" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaMahasiswa" placeholder="Nama">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPasswordMahasiswa" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="inputPasswordMahasiswa" placeholder="Password">
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

<!-- Modal Tambah Admin -->
<div class="modal fade" id="modal_tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="modal_tambahAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahAdminLabel">Tambah Data Admin</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputID" class="col-sm-3 control-label">ID Admin</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputID" placeholder="ID">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNamaAdmin" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaAdmin" placeholder="Nama">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPasswordAdmin" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="inputPasswordAdmin" placeholder="Password">
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

<!-- GET DATA & PAGINATION -->
<script>
  function simpanDosen()
  {
    
    window.location.href = "<?php echo base_url(); ?>admin/user/tambahDosen";
  }

    // function get_dataDosen(url,q)
    // {    
    //     if(!url)
    //         url = base_url+'admin/user/get_dataDosen';
        
    //     $.ajax({

    //         url:url,type:'post',dataType:'json',
    //         data:{q:q},
    //         success:function(result){
    //             $("#tabelDosen tbody").html(result.rows);
    //             $("ul.pagination #paging_dosen").html(result.paging);
    //             $(".page-info").html(result.page_info);
    //         }
    //     });
    // } 
    
    function do_searchDosen()
    { 
        get_dataDosen('',$("#searchDosen").val());
    }

    $(function()
    {
        get_dataDosen();//initialize
        
        $(document).on('click',"ul.pagination>li>a",function(){
            var href = $(this).attr('href');
            get_dataDosen(href);
            
            return false;
        });
        
        $("#searchDosen").keypress(function(e){
            var key= e.keyCode ? e.keyCode : e.which ;
            if(key==13){ //enter
                do_searchDosen();
            }
            
        });
        
        $("#btn-searchDosen").click(function(){
            do_searchDosen();
            
            return false;
        });
        
    });
</script>
