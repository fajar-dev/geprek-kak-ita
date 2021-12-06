<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Input data Produk</h4>
        </div>
        <div class="card-body">
        <span class="text-danger"><?php echo $this->session->flashdata('msg') ?></span>
        <?php echo form_open_multipart('Admin/tambah_proses');?>
          <div class="form-group">
                      <label>Nama Produk</label>
                      <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Gambar Produk</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="foto" id="customFile">
                      <label class="custom-file-label" for="customFile"></label>
                    </div>
                    </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block my-3" tabindex="4">Simpan</button>
        </div>
        <?php echo form_close(); ?> 
      </div>
    </div>
  </div>
</div>