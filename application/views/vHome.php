<style>
  .nav-tabs li {
    font-weight: bold;
  }
</style>

<link href="<?php echo HTTP_CSS_PATH; ?>jumbotron.css" rel="stylesheet">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <img src="<?php echo HTTP_IMAGES_PATH;?>icon.png">
      </div>

      <div class="col-md-offset-2 col-md-4">
        <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#dosen" aria-controls="dosen" role="tab" data-toggle="tab">Dosen</a></li>
            <li role="presentation"><a href="#mahasiswa" aria-controls="mahasiswa" role="tab" data-toggle="tab">Mahasiswa</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content" style="margin-top: 20px;">
            <div role="tabpanel" class="tab-pane fade in active" id="dosen">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputNIP" class="col-sm-3 control-label">N.I.P. </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNIP" placeholder="NIP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">Log in</button>
              </form>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="mahasiswa">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputNIM" class="col-sm-3 control-label">NIM </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">Log in</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-offset-1 col-lg-4">
      <center>
        <img src="<?php echo HTTP_IMAGES_PATH; ?>degree-icon.png">
        <h2>Dosen</h2>
        <p>Dosen membuat SAP mata kuliah yang diampu. Menyampaikan materi kuliah kepada mahasiswa. Kemudian mendapatkan penilaian dari mahasiswa.</p>
      </center>
    </div>

    <div class="col-md-offset-2 col-lg-4 col-md-offset-1">
      <center>
        <img src="<?php echo HTTP_IMAGES_PATH; ?>student-icon.png">
        <h2>Mahasiswa</h2>
        <p>Mahasiswa (kordinator tingkat) memberikan penilaian terhadap pengajaran dosen.</p>
      </center>
    </div>

  </div>

  <hr>