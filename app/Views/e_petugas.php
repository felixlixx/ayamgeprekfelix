<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Petugas</h1>
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
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('Home/aksi_e_petugas') ?>" method="POST">

                
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-10 col-form-label">id_petugas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='id_petugas' value="<?=$manda->id_petugas?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-10 col-form-label">nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="<?= $manda->nama?>">
                  </div>
                </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-10 col-form-label">password</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='password' value="<?=$manda->password?>">
                  </div>
                    <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-10 col-form-label">id_level</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='id_level' value="<?=$manda->id_level?>">
                  </div>
                </div>
              </div>
            </form>
          
                
                

               <input type="hidden" name="id" value="<?=$manda->id_petugas?>">

                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

                <main id="main" class="main">