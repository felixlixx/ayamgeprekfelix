<main id="main" class="main">

    <div class="pagetitle">
      <h1>Petugas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('Home/petugas')?>">Home</a></li>
          <li class="Breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Petugas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
<h1 align="center">Petugas</h1>

	<a href="<?= base_url('Home/t_petugas') ?>">
	<button class="btn btn-success">Register Petugas</button>
	</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">id_Petugas</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Password</th>
                    <th scope="col">id_level</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

			$no=1;
			foreach($manda as $erwin){
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $erwin->id_petugas?></td>
				<td><?= $erwin->nama?></td>
        <td><?= $erwin->password?></td>
        <td><?= $erwin->id_level?></td>
				<td>
        <a href="<?=base_url('Home/hapus_petugas/'.$erwin->id_petugas)?>">
					<button class="ri-delete-bin-6-line">Delete</button>
					</a>

					<a href="<?=base_url('Home/e_petugas/'.$erwin->id_petugas)?>">
					<button class="ri-delete-bin-6-line">Edit</button>
					</a>
      </td>
				
			</tr>
		<?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->