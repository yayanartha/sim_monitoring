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
          <!-- Tab Dosen -->
          <?php $this->load->view('admin/dosen/v_dosen'); ?>

          <!-- Tab Mhs -->
          <?php $this->load->view('admin/mhs/v_mhs'); ?>

          <!-- Tab User -->          
          <?php $this->load->view('admin/user/v_user'); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  
</div><!-- /#page-wrapper -->

<!-- Modal Tambah Dosen -->
<?php $this->load->view('admin/dosen/v_tambahDosen'); ?>

<!-- Modal Edit Dosen -->
<?php $this->load->view('admin/dosen/v_editDosen'); ?>

<!-- Modal Tambah Mahasiswa -->
<?php $this->load->view('admin/mhs/v_tambahMahasiswa'); ?>

<!-- Modal Edit Mahasiswa -->
<?php $this->load->view('admin/mhs/v_editMahasiswa'); ?>

<!-- Modal Tambah Admin -->
<?php $this->load->view('admin/user/v_tambahAdmin'); ?>

<!-- Modal Edit Admin -->
<?php $this->load->view('admin/user/v_editAdmin'); ?>

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
