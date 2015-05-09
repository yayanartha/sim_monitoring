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
          <tbody><?php ?></tbody>
        </table>
      </div>

    </div>
  </div>

</div>

<!-- Modal Tambah Matakuliah -->
<div class="modal fade" id="modal_tambahMatakuliah" tabindex="-1" role="dialog" aria-labelledby="modal_tambahMatakuliahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_tambahMatakuliahLabel">Tambah Data Matakuliah</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputKode" class="col-sm-3 control-label">Kode Matakuliah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputKode" placeholder="Kode">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNamaMatakuliah" class="col-sm-3 control-label">Nama Matakuliah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNamaMatakuliah" placeholder="Nama Matakuliah">
            </div>
          </div>
          <div class="form-group">
            <label for="inputJumlahSKS" class="col-sm-3 control-label">Jumlah SKS</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputJumlahSKS" placeholder="Jumlah SKS">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
    function get_dataMatakuliah(url,q)
    {    
        if(!url)
            url = base_url+'admin/matakuliah/get_dataMatakuliah';
        
        $.ajax({
            alert("yess");
            url:url,type:'post',dataType:'json',
            data:{q:q},
            success:function(result){
                $("#tabelMatakuliah tbody").html(result.rows);
                $("ul.pagination").html(result.paging);
                $(".page-info").html(result.page_info);
            }
        });
    } 
    
    function do_searchMatakuliah()
    { 
        get_dataMatakuliah('',$("#searchMatakuliah").val());
    }

    $(function()
    {
        get_dataMatakuliah();
        
        $(document).on('click',"ul.pagination>li>a",function(){
            var href = $(this).attr('href');
            get_dataMatakuliah(href);
            
            return false;
        });
        
        $("#searchMatakuliah").keypress(function(e){
            var key= e.keyCode ? e.keyCode : e.which ;
            if(key==13){ //enter
                do_searchMatakuliah();
            }
            
        });
        
        $("#btn-searchMatakuliah").click(function(){
            do_searchMatakuliah();
            
            return false;
        });
        
    });
</script>
