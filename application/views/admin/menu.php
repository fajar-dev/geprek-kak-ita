<div class="section-body">
  <div class="row">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
      <div class="card">
        <div class="card-header">
          <h4>Daftar Menu</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Gambar</th>
                  <th>Nama Produk</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                <td><?php echo $no++?></td>
                  <td><img src="<?php echo site_url('assets/gambar/'.$data->foto) ?>" alt="<?php echo htmlentities($data->nama_produk, ENT_QUOTES, 'UTF-8');?>" width="200" class="img-thumbnail"></td>
                  <td><?php echo htmlentities($data->nama_produk, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->harga, ENT_QUOTES, 'UTF-8');?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>admin/hapus_menu/<?php echo $data->id;?>" class="btn btn-danger btn-del">Hapus</a>
                  </td>
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