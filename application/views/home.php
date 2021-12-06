<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Geprek Kak Ita</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/page/assets/img/gallery/logo.png">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?php echo base_url() ?>assets/page/assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-4" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block" height="40px" src="<?php echo base_url() ?>assets/page/assets/img/gallery/logo.png" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">Geprek Kak Ita</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="ms-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
              <p class="mb-0 fw-bold text-lg-center my-auto">Deliver to: <i class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Blang  Pulo, Lhokseumawe </span></p>
            </div>
          </div>
        </div>
      </nav>
      <section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
          <div class="row flex-center justify-content-between">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img class="img-fluid" src="<?php echo base_url() ?>assets/page/assets/img/gallery/hero-header.png" alt="hero-header" /></a></div>
            <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Geprek Kak ita</h1>
              <h1 class="text-800 mb-5 fs-4">Harga rakyat, Rasa Pejabat</h1>
              <a class="btn btn-danger" href="#menu">Pesan Sekarang !!</a>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-primary-gradient">

        <div class="container">
          <div class="row justify-content-center g-0">
            <div class="col-xl-9 py-5">
              <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4 pt-5">
                <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="<?php echo base_url() ?>assets/page/assets/img/gallery/location.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Select location</h5>
                    <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="<?php echo base_url() ?>assets/page/assets/img/gallery/order.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Choose order</h5>
                    <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="<?php echo base_url() ?>assets/page/assets/img/gallery/pay.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Pay advanced</h5>
                    <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="<?php echo base_url() ?>assets/page/assets/img/gallery/meals.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                    <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-4 overflow-hidden mb-5" id="menu">

        <div class="container mb-5 pb-5">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Menu Kami</h5>
            </div>
            <div class="col-12">
              <div class="row gx-3 h-100 align-items-center">
                      <?php
                        foreach($hasil as $data){
                      ?>
                <div class="col-sm-6 col-md-4 col-xl-3 mb-5">
                  <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3" src="<?php echo site_url('assets/gambar/'.$data->foto) ?>" alt="<?php echo htmlentities($data->nama_produk, ENT_QUOTES, 'UTF-8');?>" />
                    <div class="card-body ps-0">
                      <h3 class="fw-bold text-1000 text-truncate mb-1"><?php echo htmlentities($data->nama_produk, ENT_QUOTES, 'UTF-8');?></h3>
                      <span class="text-1000 fw-bold">Rp. <?php echo htmlentities($data->harga, ENT_QUOTES, 'UTF-8');?></span>
                    </div>
                  </div>
                  <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!"  data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data->id;?>" role="button">Order now</a></div>
                </div>
                  <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $data->id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Buat Pesanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="<?php echo base_url() ?>page/tambah" method="post">
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">produk</label>
                                <input type="text" readonly class="form-control" name="produk" value="<?php echo htmlentities($data->nama_produk, ENT_QUOTES, 'UTF-8');?>" id="exampleFormControlInput1">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. HP</label>
                                <input type="number" class="form-control" name="hp" id="exampleFormControlInput1">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-primary">pesan</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <section class="py-0 mt-5 pt-5">
        <div class="bg-holder" style="background-image:url(<?php echo base_url() ?>assets/page/assets/img/gallery/cta-two-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xxl-9 py-7 text-center">
              <h1 class="fw-bold mb-4 text-white fs-6">Kamu Tertarik?<br />Pesan Sekarang !!</h1><a class="btn btn-danger" href="#menu"> PESAN<i class="fas fa-chevron-right ms-2"></i></a>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pt-5 bg-1000">

        <div class="container">
         
          <div class="row  pb-3">
            <div class="col-md-6 order-0">
              <p class="text-200 text-md-start">All rights Reserved &copy; Kak Ita, 2021</p>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?php echo base_url() ?>assets/page/vendors/@popperjs/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/page/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/page/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo base_url() ?>assets/page/vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo base_url() ?>assets/page/assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>