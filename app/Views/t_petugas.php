<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Petugas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-50">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Petugas</h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('Home/aksi_t_petugas') ?>" method="POST">
               
                <div class="container mt-5">
    <div class="form-container card">
        <div class="card-body">
            <h5 class="card-title">Petugas</h5>
            <form action="<?= base_url('Home/aksi_t_petugas') ?>" method="POST">
                <div class="form-group row">
                    <label for="id_petugas" class="col-sm-2 col-form-label">id_petugas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_petugas" name="id_petugas">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_level" class="col-sm-2 col-form-label">ID Level</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_level" name="id_level">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
                <main id="main" class="main">