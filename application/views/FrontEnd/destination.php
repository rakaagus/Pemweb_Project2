<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-banner-content">
              <h1>Destination Page</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Blog Start ====== -->
    <section class="ud-blog-grids">
      <div class="container">
        <div class="row">
          <?php foreach($list_data as $data): 
              $filegambar1 = base_url('/uploads/wisata/'.$data->foto1);
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
                <a href="<?= base_url()?>index.php/home/detaildestination?id=<?= $data->id ?>">
                  <img src="<?= $filegambar1;?>" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date"><?= $data->nama_jenis ?></span>
                <h3 class="ud-blog-title">
                  <a href="<?= base_url()?>index.php/home/detaildestination?id=<?= $data->id ?>">
                    <?= $data->nama ?>
                  </a>
                </h3>
                <p class="ud-blog-desc">
                  <?= $data->deskripsi ?>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- ====== Blog End ====== -->