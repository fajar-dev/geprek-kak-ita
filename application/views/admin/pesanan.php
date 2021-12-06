<div class="section-body">
  <div class="row">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
      <div class="card">
        <div class="card-header">
          <h4>Daftar pesanan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Tanggal Pesan</th>
                  <th>Nama Produk</th>
                  <th>Nama Pelanggan</th>
                  <th>alamat</th>
                  <th>hp</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                <td><?php echo $no++ ?></td>
                  <td><?php echo htmlentities($data->tgl_pesan, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->nama_produk, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->nama_pelanggan, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->no_hp, ENT_QUOTES, 'UTF-8');?></td>
                  <td><a href="<?php echo base_url('admin/hapus_pesanan/'.$data->id) ?>" class=" btn btn-danger btn-del">Hapus</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>