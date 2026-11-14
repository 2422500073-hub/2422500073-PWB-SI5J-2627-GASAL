<?php /** @var array $ekspedisi */ ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ekspedisi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ekspedisi</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              
              <!-- Judul dan Tombol di bawahnya -->
              <h4 class="font-weight-bold mb-2">Daftar Ekspedisi</h4>
              <div class="mb-4">
                <a href="<?= base_url('admin/Ekspedisi/tambah') ?>" class="btn btn-primary">
                  <i class="fa fa-plus"></i> Tambah Ekspedisi
                </a>
              </div>

              <?php if ($this->session->flashdata('message')): ?>
                <?= $this->session->flashdata('message') ?>
              <?php endif ?>

              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Ekspedisi</th>
                    <th>Jenis Layanan</th>
                    <th>Tarif / Kg</th>
                    <th>Status</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($ekspedisi as $eksp): ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $eksp->nama_ekspedisi2422500073 ?></td>
                      <td><?= $eksp->jenis_layanan2422500073 ?></td>
                      <td>Rp. <?= number_format($eksp->tarif_per_kg2422500073) ?></td>
                      <td>
                        <span class="badge <?= ($eksp->status2422500073 == 'Aktif') ? 'badge-success' : 'badge-danger' ?>">
                          <?= $eksp->status2422500073 ?>
                        </span>
                      </td>
                      <td>
                        <a href="<?= base_url('admin/Ekspedisi/edit/' . $eksp->id_ekspedisi2422500073) ?>" class="badge badge-success">Ubah</a>
                        <a href="<?= base_url('admin/Ekspedisi/hapus/' . $eksp->id_ekspedisi2422500073) ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ekspedisi ini?')">Hapus</a>
                      </td>
                    </tr>
                  <?php $no++;
                  endforeach ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>