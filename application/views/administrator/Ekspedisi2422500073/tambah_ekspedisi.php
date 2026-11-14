<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <h1>Tambah Data Ekspedisi</h1>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <form action="<?php echo base_url('admin/Ekspedisi/tambah_aksi') ?>" method="post">
        <div class="form-group">
          <label>Nama Ekspedisi</label>
          <input type="text" name="nama_ekspedisi2422500073" class="form-control" maxlength="11" required placeholder="Contoh: JNE">
        </div>
        <div class="form-group">
          <label>Jenis Layanan</label>
          <input type="text" name="jenis_layanan2422500073" class="form-control" maxlength="30" required placeholder="Contoh: Reguler / Express">
        </div>
        <div class="form-group">
          <label>Tarif per Kg</label>
          <input type="text" name="tarif_per_kg2422500073" class="form-control" maxlength="10" required placeholder="Contoh: 10000">
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="status2422500073" class="form-control" required>
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url('admin/Ekspedisi') ?>" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</div>