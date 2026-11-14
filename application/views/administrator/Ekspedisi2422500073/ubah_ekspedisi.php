<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <h1>Ubah Data Ekspedisi</h1>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <form action="<?php echo base_url('admin/Ekspedisi/update_aksi') ?>" method="post">
        <input type="hidden" name="id_ekspedisi2422500073" value="<?php echo $ekspedisi->id_ekspedisi2422500073 ?>">
        
        <div class="form-group">
          <label>Nama Ekspedisi</label>
          <input type="text" name="nama_ekspedisi2422500073" class="form-control" value="<?php echo $ekspedisi->nama_ekspedisi2422500073 ?>" maxlength="11" required>
        </div>
        <div class="form-group">
          <label>Jenis Layanan</label>
          <input type="text" name="jenis_layanan2422500073" class="form-control" value="<?php echo $ekspedisi->jenis_layanan2422500073 ?>" maxlength="30" required>
        </div>
        <div class="form-group">
          <label>Tarif per Kg</label>
          <input type="text" name="tarif_per_kg2422500073" class="form-control" value="<?php echo $ekspedisi->tarif_per_kg2422500073 ?>" maxlength="10" required>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="status2422500073" class="form-control" required>
            <option value="Aktif" <?php echo ($ekspedisi->status2422500073 == 'Aktif') ? 'selected' : '' ?>>Aktif</option>
            <option value="Tidak Aktif" <?php echo ($ekspedisi->status2422500073 == 'Tidak Aktif') ? 'selected' : '' ?>>Tidak Aktif</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo base_url('admin/Ekspedisi') ?>" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</div>